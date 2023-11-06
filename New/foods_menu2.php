<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["ffid"];
$a2=$_POST["ffname"];
$a3=$_POST["fprice"];
$s="insert into foods_menu2 values ('$a1' , '$a2' , '$a3')";
$q=mysql_query($s);
header("location:form35.php");
mysql_close();
?>
