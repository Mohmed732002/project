<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["Tid"];
$a2=$_POST["Baid"];
$a3=$_POST["amount_paid"];
$a4=$_POST["date_of_payment"];
$s="insert into pay_off values ('$a1' , '$a2' , '$a3' , '$a4')";
$q=mysql_query($s);
header("location:form5.php");
mysql_close();
?>