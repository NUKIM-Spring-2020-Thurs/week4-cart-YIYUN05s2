<?php

session_start();

$id=$_POST["id"];
$pwd=$_POST["pwd"];
$uid="mai";
$upwd="junjun1126";


if($id==$uid && $pwd==$upwd){
	$_SESSION["login"]="S";
	header('Location:catalog.php');
}
else{
	$_SESSION["login"]="F";
	header('Location:login.php');
}
?>



