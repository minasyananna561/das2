<?php
session_start();

if(!isset($_SESSION["lang"]))
$_SESSION['lang']="en";
else if(isset($_GET['lang'])&& $_SESSION['lang']!=$_GET['lang']&&!empty($_GET['lang'])){
   if($_GET['lang']=="en")
    $_SESSION['lang']="en";
    if($_GET['lang']=="ru")
   $_SESSION['lang']="ru";
 if($_GET['lang']=="am"){
$_SESSION['lang']="am";}

}
require_once $_SESSION['lang'].".php";



?>