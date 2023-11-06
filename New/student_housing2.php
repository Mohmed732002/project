<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["ssid"];
$a2=$_POST["ssname"];
$a3=$_POST["ssaddress"];
$a4=$_POST["ssinstitute"];
$a5=$_POST["ssdiv"];
$a6=$_POST["ssthe_band"];
$a7=$_POST["ssgender"];
$s="insert into student_housing2 values ('$a1' , '$a2' , '$a3' , '$a4', '$a5', '$a6', '$a7')";
$q=mysql_query($s);
header("location:form36.php");
mysql_close();
?>
