<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["Tid"];
$a2=$_POST["Tname"];
$a3=$_POST["Taddress"];
$a4=$_POST["Telephone"];
$a5=$_POST["level"];
$s="insert into student values ('$a1' , '$a2' , '$a3' , '$a4' , '$a5')";
$q=mysql_query($s);
header("location:form1.php");
mysql_close();
?>