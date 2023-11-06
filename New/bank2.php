<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["Baid"];
$a2=$_POST["baname"];
$s="insert into bank2 values ('$a1' , '$a2')";
$q=mysql_query($s);
header("location:form38.php");
mysql_close();
?>