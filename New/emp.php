<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["Eid"];
$a2=$_POST["Ename"];
$a3=$_POST["Etybe"];
$a4=$_POST["Eaddress"];
$a5=$_POST["ephone"];
$s="insert into emp values ('$a1' , '$a2' , '$a3' , '$a4' , '$a5')";
$q=mysql_query($s);
header("location:form14.php");
mysql_close();
?>