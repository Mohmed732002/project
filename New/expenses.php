<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["eeid"];
$a2=$_POST["eename"];
$a3=$_POST["tuition_expenses1"];
$a4=$_POST["tuition_expenses2"];
$s="insert into expenses values ('$a1' , '$a2' , '$a3' , '$a4')";
$q=mysql_query($s);
header("location:form32.php");
mysql_close();
?>