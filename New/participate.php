<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["tid"];
$a2=$_POST["bid"];
$a3=$_POST["subscription_date"];
$s="insert into participate values ('$a1' , '$a2' , '$a3')";
$q=mysql_query($s);
header("location:form7.php");
mysql_close();
?>