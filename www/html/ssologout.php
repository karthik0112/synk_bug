
<?php
$url = "https://crmdevapi.codingtown.com/v1/sso/logout";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers = array(
   "Accept: application/json",
   "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJuYW1lIjoiTUlBTF9JVlJfREVWX1NFQ19VU0VSIiwiaWF0IjoxNjU3MDk2MDc0fQ.mdM-MsxZa5lxpv-ygIHmX2u3AfYIBekPZVMTzsfUBHg",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$info = Array();
$info['agent_code']= $_GET["extension"];
$data = json_encode($info);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$resp = curl_exec($curl);
curl_close($curl);
echo $data;
?>
