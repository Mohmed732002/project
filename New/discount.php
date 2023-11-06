<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["Did"];
$a2=$_POST["Dname"];
$a2=$_POST["Dcount"];
$a2=$_POST["Eid"];
$a2=$_POST["sid"];
$s="insert into discount values ('$a1' , '$a2' , '$a3' , '$a4' , '$a5')";
$q=mysql_query($s);
header("location:form17.php");
mysql_close();
?>