<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["Tid"];
$a2=$_POST["Tname"];
$s="insert into student_activities values ('$a1' , '$a2')";
$q=mysql_query($s);
header("location:form8.php");
mysql_close();
?>