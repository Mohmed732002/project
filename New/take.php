<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["Tid"];
$a2=$_POST["Resid"];
$a3=$_POST["ratio"];
$a4=$_POST["tprice"];
$s="insert into take values ('$a1' , '$a2' , '$a3' , '$a4')";
$q=mysql_query($s);
header("location:form13.php");
mysql_close();
?>