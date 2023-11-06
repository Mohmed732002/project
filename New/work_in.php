<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["Tid"];
$a2=$_POST["eid"];
$s="insert into work_in values ('$a1' , '$a2')";
$q=mysql_query($s);
header("location:form15.php");
mysql_close();
?>