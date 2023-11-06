<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["Lid"];
$a2=$_POST["Lname"];
$s="insert into library values ('$a1' , '$a2')";
$q=mysql_query($s);
header("location:form10.php");
mysql_close();
?>