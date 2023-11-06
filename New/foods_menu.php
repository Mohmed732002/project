<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["fname"];
$a2=$_POST["ffood"];
$a3=$_POST["fprice"];
$a4=$_POST["fpriceb"];
$a5=$_POST["fpriceb"];
$a6=$_POST["tid"];
$s="insert into foods_menu values ('$a1' , '$a2' , '$a3' , '$a4' , '$a5', '$a6')";
$q=mysql_query($s);
header("location:form33.php");
mysql_close();
?>
