<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["ssid"];
$a2=$_POST["ssname"];
$a3=$_POST["ssphone"];
$a4=$_POST["ssaddress"];
$a5=$_POST["ssdiv"];
$a6=$_POST["ssbank"];
$a7=$_POST["ssprice"];
$a8=$_POST["ssbus"];
$a9=$_POST["sshouse"];
$a10=$_POST["ssfood"];
$s="insert into student2 values ('$a1' , '$a2', '$a3', '$a4', '$a5', '$a6', '$a7', '$a8', '$a9', '$a10')";
$q=mysql_query($s);
header("location:form37.php");
mysql_close();
?>