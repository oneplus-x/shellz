<?php
  #####################################################################################
  ##                                                                                 ##
  ##                                                                   03/07/2012    ##
  ##  Script   : Odz Multiple CMS Scaner Online v0.4 (0!IIIV)                        ##
  ##  Authors  : [KedAns-Dz] [Mennouchi Islam Azeddine]                              ##
  ##  Home     : www.owasp.org/index.php/Algeria                                     ##
  ##  Facebook : http://www.facebook.com/owaspdz                                     ##
  ##  Contact  : ked-h[at]hotmail[dot]com                                            ##
  ##             azeddine.mennouchi[at]owasp[dot]org                                 ##
  ##                                                                                 ##
  ##  Algerian Coders                                                                ##
  ##                                                                                 ##
  ##  ## IMPORTANT ##                                                                ##
  ##   # ONLY FOR EDUCATIONAL PURPOSE. THE AUTHOR IS NOT RESPONSABLE OF ANY          ##
  ##   # IMPROPERLY USE OF THIS TOOL. USE IT AT YOUR OWN RISK !!                     ##
  ##  ##                                                                             ##
  ##                                                                                 ##
  ##  Release: 0.4 Beta                                                              ##
  ##      After the success of the v0.3, I decided to code a new release :-)         ##
  ##                                                                                 ##
  ##                                                                                 ##
  ##  Features:                                                                      ##
  ##    [+] Multi sites scan (in on server)                                          ##
  ##    [+] latest exploits and vulns.                                               ##
  ##    [+] Robots.txt files scan                                                    ##
  ##    [+] htaccess files scan                                                      ##
  ##    [+] admin panel detection                                                    ##
  ##    [+]                                                                          ##
  ##    [+]                                                                          ##
  ##                                                                                 ##
  #####################################################################################
  
##############################################################
## GENERAL FORM                                             ##
##############################################################
echo'
<html>
<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Odz Multiple CMS Scaner Online v0.4 (0!IIIV)</title>
<meta content="KedAns-Dz , Odz Multiple CMS Scaner Online, owasp algeria" name="description">
<link href="http://209.217.227.77/~forumant/favicon.ico" type="image/x-icon" rel="shortcut icon" />
<style>
body{
	background: #fff;
	color: #393939;
	font-family: Arial;
	line-height: 0;
}
	
input[type=text], input[type=password], input[type=file], select, textarea {
	border: 1px solid #969696;
	padding: 7px 12px;
	-moz-border-radius: 5px; 
	-webkit-border-radius: 5px;
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	-webkit-box-shadow: 1 1px 0px rgba(0,0,0,0.5);

}

input[type=button], input[type=reset], input[type=submit] {
	border: 1px solid #969696;
	padding: 8px 24px;
	font-size: 11px;
	cursor: pointer;
	margin-top: 2px;
	-moz-border-radius: 5px; 
	-webkit-border-radius: 5px;
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	-webkit-box-shadow: 1 1px 0px rgba(0,0,0,0.5);	
}
#logo {
float:left;
background:url(owasp_logo.png) no-repeat;
width:240px;
height:240px;
margin-left:30px;
margin-top:5px;
}


.button{
 text-decoration:none; 
 text-align:center; 
 padding:11px 32px; 
 border:solid 1px #004F72; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:12px Tahoma, Helvetica, sans-serif; 
 font-weight:bold; 
 color:#E5FFFF; 
 background-color:#3BA4C7; 
 background-image: -moz-linear-gradient(top, #3BA4C7 0%, #1982A5 100%); 
 background-image: -webkit-linear-gradient(top, #3BA4C7 0%, #1982A5 100%); 
 background-image: -o-linear-gradient(top, #3BA4C7 0%, #1982A5 100%); 
 background-image: -ms-linear-gradient(top, #3BA4C7 0% ,#1982A5 100%); 
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#1982A5", endColorstr="#1982A5",GradientType=0 ); 
 background-image: linear-gradient(top, #3BA4C7 0% ,#1982A5 100%);   
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
}
</style>
</head>

<body>
<a id="logo" title="by owasp algeria" href="http://www.owasp.org/index.php/Algeria"></a>
<p align="center">
<a href="#" class="button"/>Odz Multiple CMS Scaner Online v0.4 (0!IIIV) | T0olKit By : KedAns-Dz</a>
</p><br>
<form method="POST">
<p align="center"><input type="text" name="site" size="65" value="127.0.0.1"><input type="submit" value="Scan.."></p>
</form><center>';


##############################################################
## set_time_limit/error_reporting                           ##
##############################################################

if(!@set_time_limit(0)){

	if(@function_exists('ini_set'))@ini_set('max_execution_time',0);
	
	elseif(@function_exists('ini_alter'))@ini_alter('max_execution_time',0);
	
	else trigger_error('Can not set_time_limit(0)', E_USER_NOTICE);

	if(@function_exists('ini_get')){
	
		if(@ini_get('max_execution_time')!='0')trigger_error('Can not set_time_limit(0)', E_USER_NOTICE);
	}
}
//-----------------------------------------------------------
    @error_reporting(E_ALL);
	
    @ini_set('display_errors','Off');


##############################################################
## DEFINES                                                  ##
##############################################################

define('Odz_VERSION','0.4');

##############################################################
## CONFIGURATION                                            ##
##############################################################

	// Load Class..
	$dz = new Odz();

##############################################################
## Odz CLASS                                                ##
##############################################################

class Odz
{

function load_contents($target){ // Adel SBM :This is my priv8 function ;)
	
if(function_exists('file_get_contents')){
			                      //  echo "Using file_get_contents";
$handle_file = @file_get_contents($target);
$contents = $handle_file;
	
}elseif(function_exists('fopen') AND function_exists('fread')){
			                       //  echo "Using fopen/fread";
$handle = fopen($target, "r");
$contents= fread($handle, 8192);
fclose($handle);
								
}elseif (function_exists("curl_init")) {
						           //  echo "Using CURL";
$user_agent = "Mozilla/5.0 (Windows; U; Windows NT 6.0; it; rv:1.9.2.8) Gecko/20100722 Firefox/3.6.8";
$ch = curl_init();
curl_setopt ($ch,CURLOPT_URL,$target );
curl_setopt ($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt ($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch,CURLOPT_VERBOSE,false);
curl_setopt ($ch, CURLOPT_TIMEOUT, 5);
curl_setopt ($ch,CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt ($ch,CURLOPT_SSLVERSION,3);
curl_setopt ($ch,CURLOPT_SSL_VERIFYHOST, FALSE);
$contents = curl_exec($ch);

}elseif(!($sock = fsockopen($target, 80))){
die( "\n [-] No response from {$host}:80\n");
fwrite($sock, $packet);
$contents = stream_get_contents($sock);
					
}else{
echo "Can't Get Contents..!!";
}
         		
return  $contents; // Let's see contents ;)
}	

//-----------------------------------------------------------------------------------

function filter($content){

$fcontent = trim(strip_tags($content));

return $fcontent; // Let's see filtred content ;)

}
//-----------------------------------------------------------------------------------

function valid_ip($ip_addr){

$parts = explode('.', $ip_addr);
if (count($parts) == 4) {
    foreach ($parts as $part) { 
        if ($part > 255 || $part < 0) {
            //error
        }
    }
	return $ip_addr;
} else {
    return "ip address is not valid";
	exit;
}
}

//-----------------------------------------------------------------------------------
function visit($url){
	
$user_agent = "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)";$ch=curl_init();
curl_setopt ($ch, CURLOPT_URL,$url );
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch,CURLOPT_VERBOSE,false);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch,CURLOPT_SSLVERSION,3);
curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, FALSE);
$page=curl_exec($ch);
//echo curl_error($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
if($httpcode>=200 && $httpcode<300) return true;
else return false;
}
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
		
function check_exploit($cpmxx){

$link ="http://packetstormsecurity.org/search/files/?q=$cpmxx";

$result = $this->load_contents($link);

if (@eregi("No Results Found",$result))  {

echo"<td>Not Found</td><td><a href='http://www.google.dz/#hl=en&q=download+$cpmxx'>Download</a></td></tr>";

}else{

echo"<td><a href='$link'>Found</a></td><td><=</td></tr>";

}
}

//----------------------------------------------------------------------------------------------------------
// U Can Activate this functions: get_robotstxt($url),get_admincp($url)  / This will take more scan time..
//----------------------------------------------------------------------------------------------------------

/* Robots.txt file Scan :
The robots.txt is used to tell search engines to ignore parts of your site. It can also be used by attackers to find stuff you
may not want to be public and other interesting directories
*/

function get_robotstxt($url){

if ($this->visit("$url/robots.txt"))
echo "<tr><td colspan=3>$url/robots.txt Found</td></tr>";
else
echo "<tr><td>Not Found</td>";

}

//-----------------------------------------------------------------------------------
/* Default Login Page finder (Default) 
The WordPress administration login page is at the default location : wp-admin
The Joomla administration login page is at the default location : administration
The Nuke's administration login page is at the default location : ..... 
The Xoops administration login page is at the default location : admin.php (I m not sure)
*/ 
function get_admincp($url){

$defadmins=array(
"wp-admin",
"administration",
"admin.php",
"admin"
);

foreach($defadmins as $defadmin){

if ($this->visit("$url/$defadmin"))
echo "<tr><td colspan=3>$url/$defadmin Found !</td></tr>";
else
echo "<tr><td>Not Found !!</td>";

}
}
//-----------------------------------------------------------------------------------

/* Joomla Conf */
function check_com($url){

$source = $this->load_contents($url);

@preg_match_all('{option,(.*?)/}i',$source,$f);
@preg_match_all('{option=(.*?)(&amp;|&|")}i',$source,$f2);
@preg_match_all('{/components/(.*?)/}i',$source,$f3);

$arz=@array_merge($f2[1],$f[1],$f3[1]);

$coms=array();

if(count($arz)==0){ echo "<tr><td colspan=3>[ Joomla ] ...Nothing Found !</td></tr>";}

foreach(@array_unique($arz) as $x){
$coms[]=$x;
}

foreach($coms as $comm){

echo "<tr><td>$comm</td>"; 
$this->check_exploit($comm);
}

}
//-----------------------------------------------------------------------------------
/* WordPress Conf */

function get_plugins($url){

$source = $this->load_contents($url);

@preg_match_all("#/plugins/(.*?)/#i", $source, $f);

$arz=@array_unique($f[1]);

if(count($arz)==0){ echo "<tr><td colspan=3>[ Wordpress ] ...Nothing Found !</td></tr>";}

foreach($arz as $plugin){

echo "<tr><td>$plugin</td>";

$this->check_exploit($plugin);

}

}

//-----------------------------------------------------------------------------------
/* Nuke's Conf */

function get_numod($url){

$source = $this->load_contents($url);

@preg_match_all('{?name=(.*?)/}i',$source,$f);
@preg_match_all('{?name=(.*?)(&amp;|&|l_op=")}i',$source,$f2);
@preg_match_all('{/modules/(.*?)/}i',$source,$f3);

$arz=@array_merge($f2[1],$f[1],$f3[1]);

$cpm=array();

if(count($arz)==0){ echo "<tr><td colspan=3>[ Nuke's ] ...Nothing Found !</td></tr>";}

foreach(@array_unique($arz) as $x){

$cpm[]=$x;
}

foreach($cpm as $nmod){

echo "<tr><td>$nmod</td>";

$this->check_exploit($nmod);

}

}

//-----------------------------------------------------------------------------------
/* Xoops Conf */

function get_xoomod($url){

$source = $this->load_contents($url);

@preg_match_all('{/modules/(.*?)/}i',$source,$f);

$arz=@array_merge($f[1]);

$cpm=array();

if(count($arz)==0){ echo "<tr><td colspan=3>[ Xoops ] ...Nothing Found !</td></tr>";}

foreach(@array_unique($arz) as $x){

$cpm[]=$x;
}

foreach($cpm as $xmod){

echo "<tr><td>$xmod</td>";

$this->check_exploit($xmod);

}

}

//-----------------------------------------------------------------------------------

function sec($site){
@preg_match_all('{http://(.*?)(/index.php)}siU',$site, $sites);
if(preg_match("www",$sites[0][0])){
return $site=str_replace("index.php","",$sites[0][0]);
}else{
return $site=str_replace("http://","http://www.",str_replace("index.php","",$sites[0][0]));
}}

} // END Odz CLASS 

##############################################################
## SCAN START                                               ##
##############################################################

$npages = 50000;

if ($_POST) 
{
  $ip = $dz->valid_ip($dz->filter($_POST['site']));
  $npage = 1;
  $allLinks = array();


   while($npage <= $npages) 
  { 
  
  $x=$dz->load_contents('http://www.bing.com/search?q=ip%3A' . $ip . '+index.php?option=com&first=' . $npage); // Thanx bing ;)

  
	if ($x)
	{
		@preg_match_all('(<div class="sb_tlst">.*<h3>.*<a href="(.*)".*>(.*)</a>.*</h3>.*</div>)siU', $x, $findlink);
		
		foreach ($findlink[1] as $fl)
		
		$allLinks[]=$dz->sec($fl);
		
		
		$npage = $npage + 10;
		
		if (preg_match('(first=' . $npage . '&amp)siU', $x, $linksuiv) == 0) 
			break;			   
	}
	
    else
		break;
  }


$allDmns = array();

foreach ($allLinks as $kk => $vv){

$allDmns[] = $vv;
}
			
echo'<table border="1"  width=\"80%\" align=\"center\">
<tr><td width=\"30%\"><b>Server IP&nbsp;&nbsp;&nbsp;&nbsp; : </b></td><td><b>'.$ip.'</b></td></tr>			
<tr><td width=\"30%\"><b>Sites Found&nbsp; : </b></td><td><b>'.count(@array_unique($allDmns)).'</b></td></tr>
</table>';
echo "<br><br>";

echo'<table border="1" width="80%" align=\"center\">';

foreach(@array_unique($allDmns) as $h3h3){

echo'<tr id=new><td><b><a href='.$h3h3.'>'.$h3h3.'</a></b></td><td><b>PacketStorm</b></td><td><b>Challenge of Exploiting ..!</b></td></tr>';

// Let's scan

$dz->check_com($h3h3);
$dz->get_plugins($h3h3);
$dz->get_numod($h3h3);
$dz->get_xoomod($h3h3);
$dz->get_htaccess($h3h3);
$dz->get_admin($h3h3);
$dz->get_robotstxt($h3h3);
}

// Print Header
echo"</table></center>";

}
?>
<code>
Coded By : KedAns-Dz | OWASP ALGERIA| Mennouchi Islam Azeddine
Made in Algeria | CopyCenter (^.^) 2o12 
</code>
</body>
</html>
<!-- ' Thanks to Lagripe-Dz aNd K!LLer-Dz'-->