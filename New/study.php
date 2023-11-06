<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["cid"];
$a2=$_POST["tid"];
$a3=$_POST["mark"];
$s="insert into study values ('$a1' , '$a2' , '$a3')";
$q=mysql_query($s);
header("location:form3.php");
mysql_close();
?>