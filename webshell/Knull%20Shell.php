<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <title>Knull Shell</title>
<style type="text/css">

body {
  font-family: sans-serif;
  color: black;
  background: #f3f3f3;
}

h4 {
  color: navy;
}

img {
  border: none;
}

div#terminal {
  border: inset 2px navy;
  padding: 2px;
  margin-top: 0.5em;
}

div#terminal textarea { 
  color: white;
  background: black;
  font-size: 100%;
  width: 100%;
  border: none;
}

p {
  margin-top: 0.5em;
  margin-bottom: 0.5em;
}

p#prompt {
  color: white;
  background: black;
  font-family: monospace;
  margin: 0px;
}

p#prompt input {
  color: white;
  background: black;
  border: none;
  font-family: monospace;
}

legend {
  padding-right: 0.5em;
}

fieldset {
  padding: 0.5em;
}

div#navycolor {

  color: navy;

}

.error {
  color: red;
}

</style>
</head>

<body>

<form name="shell" action="/Knull Shell.php" method="post">


<fieldset>
  <legend><h4>Authentication</h4></legend>

  
  <p>Username: <input name="username" type="text" value=""></p>

  <p>Password: <input name="password" type="password"></p>

  <p><input type="submit" value="Login"></p>

</fieldset>


</form>

</body>
</html>
