#! /bin/bash
#	$Id$
#
# HylaFAX Facsimile Software
#
# Copyright (c) 1990-1996 Sam Leffler
# Copyright (c) 1991-1996 Silicon Graphics, Inc.
# HylaFAX is a trademark of Silicon Graphics
# 
# Permission to use, copy, modify, distribute, and sell this software and 
# its documentation for any purpose is hereby granted without fee, provided
# that (i) the above copyright notices and this permission notice appear in
# all copies of the software and related documentation, and (ii) the names of
# Sam Leffler and Silicon Graphics may not be used in any advertising or
# publicity relating to the software without the specific, prior written
# permission of Sam Leffler and Silicon Graphics.
# 
# THE SOFTWARE IS PROVIDED "AS-IS" AND WITHOUT WARRANTY OF ANY KIND, 
# EXPRESS, IMPLIED OR OTHERWISE, INCLUDING WITHOUT LIMITATION, ANY 
# WARRANTY OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE.  
# 
# IN NO EVENT SHALL SAM LEFFLER OR SILICON GRAPHICS BE LIABLE FOR
# ANY SPECIAL, INCIDENTAL, INDIRECT OR CONSEQUENTIAL DAMAGES OF ANY KIND,
# OR ANY DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS,
# WHETHER OR NOT ADVISED OF THE POSSIBILITY OF DAMAGE, AND ON ANY THEORY OF 
# LIABILITY, ARISING OUT OF OR IN CONNECTION WITH THE USE OR PERFORMANCE 
# OF THIS SOFTWARE.
#

#
# Convert PDF to facsimile using Ghostscript.
#
# pdf2fax [-o output] [-l pagelength] [-w pagewidth]
#	[-r resolution] [-m maxpages] [-*] [file ...]
#
# We need to process the arguments to extract the input
# files so that we can prepend a prologue file that sets
# up a non-interactive environment.
#
# NB: this shell script is assumed to be run from the
#     top of the spooling hierarchy -- s.t. the etc directory
#     is present.
#

test -f etc/setup.cache || {
    SPOOL=`pwd`
    cat<<EOF

FATAL ERROR: $SPOOL/etc/setup.cache is missing!

The file $SPOOL/etc/setup.cache is not present.  This
probably means the machine has not been setup using the faxsetup(8C)
command.  Read the documentation on setting up HylaFAX before you
startup a server system.

EOF
    exit 1
}
. etc/setup.cache

PS=$GSRIP

fil=
out=pdf.fax		# default output filename
pagewidth=1728		# standard fax width
pagelength=297		# default to A4 
vres=98			# default to low res
device=tiffg3		# default to 1D
unlimitedlength=no	# default to fixed length-pages
while test $# != 0
do
    case "$1" in
    -o)	shift; out="$1" ;;
    -w) shift; pagewidth="$1" ;;
    -l) shift; pagelength="$1" ;;
    -r) shift; vres="$1" ;;
    -m) shift;;				# NB: not implemented
    -U) unlimitedlength=yes ;;
    -1) device=tiffg3 ;;
    -2) ($PS -h | grep tiffg32d >/dev/null 2>&1) \
	    && { device=tiffg32d; } \
	    || { device=tiffg3; }
	;;
    -3) ($PS -h | grep tiffg4 >/dev/null 2>&1) \
	    && { device=tiffg4; } \
	    || { device=tiffg3; }
	;;
    -*)	;;
    *)	fil="$fil $1" ;;
    esac
    shift
done
test -z "$fil" && fil="-"		# read from stdin
case "${pagewidth}x${pagelength}" in
1728x280|1728x279|2592x280|2592x279|3456x280|3456x279)	# 279.4mm is actually correct...
    paper=letter;;
1728x364|2592x364|3456x364) 
    paper=legal;;
*x296|*x297)			# more roundoff problems...
    paper=a4;;
*x364)
    paper=b4;;
2432x*|3648x*|4864x*)
    paper=a3;;
*)
    echo "$0: Unsupported page size: $pagewidth x $pagelength";
    exit 254;;			# causes document to be rejected
esac
#
# The image must end up with a pixel width according to T.32 Table 21.
# Ghostscript contains code to fixate a4 and letter to 1728 pixels
# when using 196-204 dpi and tiffg3/4, it supposedly does the same for
# B4 but not for A3, thus the floats are needed (for A3's benefit).
#
# See ghostscript/doc/Devices.htm under -dAdjustWidth=1 (default).
# Use -dAdjustWidth=0 to disable.  With the right patch,
# http://bugs.ghostscript.com/show_bug.cgi?id=688064
# AdjustWidth can be made to specify the pagewidth directly and
# replace -dFIXEDMEDIA to permit TIFFs to be produced with
# varied lengths.
#
case "$paper" in
    a4)
	case "$pagewidth" in
	    2592) hres=313.65;;		# VR_300X300
	    3456) hres=418.20;; 	# VR_R16
	    *) hres=209.10;;		# everything else, 1728 pixels
	esac;;
    b4)
	case "$pagewidth" in
	    3072) hres=311.97;;		# VR_300X300
	    4096) hres=415.95;; 	# VR_R16
	    *) hres=207.98;;		# everything else, 2048 pixels
	esac;;
    a3)
	case "$pagewidth" in
	    3648) hres=311.94;;		# VR_300X300
	    4864) hres=415.93;; 	# VR_R16
	    *) hres=207.96;;		# everything else, 2432 pixels
	esac;;
    *)					# letter, legal
	case "$pagewidth" in
	    2592) hres=304.94;;		# VR_300X300
	    3456) hres=406.59;; 	# VR_R16
	    *) hres=203.29;;		# everything else, 1728 pixels
	esac;;
esac

#
# The sed work fixes bug in Windows-generated
# PostScript that causes certain international
# character marks to be placed incorrectly.
#
#    | $SED -e 's/yAscent Ascent def/yAscent 0 def/g' \
#
# NB: unfortunately it appears to break valid PostScript;
#     so it's been disabled.

#
# Suggestion from "Alan Sparks" <asparks@nss.harris.com>,
# Add the -DFIXEDMEDIA argument to the last command in ps2fax.
# This prevents page sizing within the documents from altering
# the command-line page size specification.  This prevents
# TIFFs to be made with pages of varied lengths, however.
# See the comments on AdjustWidth above.
#
FIXEDWIDTH="-dFIXEDMEDIA"
STRIPSIZE="-dMaxStripSize=0"

#
# Apply customizations such as watermarking.
#
if [ -f etc/FaxModify ]; then
    . etc/FaxModify
fi

$PS -q \
    -sDEVICE=$device \
    -dNOPAUSE \
    -dSAFER=true \
    -sPAPERSIZE=$paper \
    $FIXEDWIDTH \
    $STRIPSIZE \
    -dBATCH \
    -r$hres\x$vres \
    "-sOutputFile=$out" \
    $fil
