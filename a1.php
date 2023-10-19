<?php
include ('aut.php');
$u=$_GET['cc'];
$s=$_GET['pass'];
echo autenticar($_GET['cc'],$_GET['pass']);
if (autenticar($_GET['cc'],$_GET['pass'])==1){
header("location:a2.php?cc=$u&pass=$s");
}
else
header("location:a3.php");


?>
