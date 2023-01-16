<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="login.css" />
	
</head>
<body class="phpb">
<?php 
$username=$_GET["username"];
$email=$_GET["myemail"];
echo ("<h1>Sayfamıza Hoşgeldiniz $username...</h1>");
echo("<h3>Kullanıcı Adı=$username</h3>");
echo("<h3>E-Posta=$email</h3>");


?>
</body>