<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["lid"];
$a2=$_POST["tid"];
$a3=$_POST["start_date"];
$a4=$_POST["end_date"];
$s="insert into borrows values ('$a1' , '$a2' , '$a3' , '$a4')";
$q=mysql_query($s);
header("location:form11.php");
mysql_close();
?>