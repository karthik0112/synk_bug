(print "Load server start /var/log/festival/festival_server.scm")
(set! server_port 1314)
(set! server_festival_version "festival" )
(set! server_log_file "/var/log/festival/festival_server.log" )
(set! server_startup_file "/var/log/festival/festival_server.scm" )

;; Marks end of machine created bit
;---


 ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
 ;; The default information below was created by the festival_server script
 ;; You should probably create a file which is similar but with whatever
 ;; access permissions and preloaded voices suit your local situation and
 ;; use the -c flag to festival_server

(defvar server_home "/var/log/festival")

;; Access from machines with no domain name and the local 
(set! server_access_list '("[^.]+" "127.0.0.1" "localhost.*" "issabel.local"))

(cd server_home)
(set! default_access_strategy 'direct)

;; Load any voices you regularly use here, this will make the
;; server more responsive

; (voice_rab_diphone)
; (voice_gsw_diphone )
; (voice_ked_diphone)
; (voice_ked_mttilt_diphone)

