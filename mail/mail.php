<?php
$c = $_GET['c'];


$url = array(
"00",
"01",
"02",
"03",
"04",
"05",
"06",
"07",
"08",
"09",
"10",
"11",
"12",
"13",
"14",
"15",
"16",
"17",
"18",
"19",
"20",
"21",
"22",
"23",
"24",
"25",
"26",
"27",
"28",
"29",
"30",
"31",
"32",
"33",
"34",
"35",
"36",
"37",
"38"
);



$correo = array(
"rojo.alac@gmail.com",
"elvisrodriguezs94@gmail.com",
"castilloanya@gmail.com",
"soral.92v@gmail.com",
"elevangelistadecristo1998@gmail.com",
"rodriguezma45@gmail.com",
"plinio9410@gmail.com",
"ganadesdelaweb@gmail.com",
"eltabogarcia@gmail.com",
"alvarezcristhofher4@gmail.com",
"laar1984@gmail.com",
"HIPICAPASION@GMAIL.COM",
"briianjj2016@gmail.com",
"consultorsha@gmail.com",
"yelitzondavid.ft@gmail.com",
"osothor66@gmail.com",
"alexander1x33@gmail.com",
"jackzius@gmail.com",
"tdarquitec@gmail.com",
"yorlis.tovar@gmail.com",
"verdugo838@gmail.com",
"agcoinss@gmail.com",
"aleelpran2011@gmail.com",
"mariaenriquetaalvarez1@gmail.com",
"rojascastro.ma@gmail.com",
"leopoldomagallanes@gmail.com",
"marcomirque@gmail.com",
"RUALCA04@GMAIL.COM",
"gilberlys1996@gmail.com",
"sergioivacevedo@gmail.com",
"acsuayo@gmail.com",
"ganadineroenrublos2018@gmail.com",
"jesus.erazo.mj@gmail.com",
"yaliana.tv@gmail.com",
"df.beats.25@gmail.com",
"diazmarwin@gmail.com",
"mejiasleonet@gmail.com",
"rafaelq.sistemas@gmail.com",
"jo.25el.26@gmail.com"
);


$c = str_replace($url[0], $correo[0], $c);
$c = str_replace($url[1], $correo[1], $c);
$c = str_replace($url[2], $correo[2], $c);
$c = str_replace($url[3], $correo[3], $c);
$c = str_replace($url[4], $correo[4], $c);
$c = str_replace($url[5], $correo[5], $c);
$c = str_replace($url[6], $correo[6], $c);
$c = str_replace($url[7], $correo[7], $c);
$c = str_replace($url[8], $correo[8], $c);
$c = str_replace($url[9], $correo[9], $c);
$c = str_replace($url[10], $correo[10], $c);
$c = str_replace($url[11], $correo[11], $c);
$c = str_replace($url[12], $correo[12], $c);
$c = str_replace($url[13], $correo[13], $c);
$c = str_replace($url[14], $correo[14], $c);
$c = str_replace($url[15], $correo[15], $c);
$c = str_replace($url[16], $correo[16], $c);
$c = str_replace($url[17], $correo[17], $c);
$c = str_replace($url[18], $correo[18], $c);
$c = str_replace($url[19], $correo[19], $c);
$c = str_replace($url[20], $correo[20], $c);
$c = str_replace($url[21], $correo[21], $c);
$c = str_replace($url[22], $correo[22], $c);
$c = str_replace($url[23], $correo[23], $c);
$c = str_replace($url[24], $correo[24], $c);
$c = str_replace($url[25], $correo[25], $c);
$c = str_replace($url[26], $correo[26], $c);
$c = str_replace($url[27], $correo[27], $c);
$c = str_replace($url[28], $correo[28], $c);
$c = str_replace($url[29], $correo[29], $c);
$c = str_replace($url[30], $correo[30], $c);
$c = str_replace($url[31], $correo[31], $c);
$c = str_replace($url[32], $correo[32], $c);
$c = str_replace($url[33], $correo[33], $c);
$c = str_replace($url[34], $correo[34], $c);
$c = str_replace($url[35], $correo[35], $c);
$c = str_replace($url[36], $correo[36], $c);
$c = str_replace($url[37], $correo[37], $c);
$c = str_replace($url[38], $correo[38], $c);


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
