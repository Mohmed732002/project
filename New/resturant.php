<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["Resid"];
$a2=$_POST["Resname"];
$a3=$_POST["Resaddress"];
$a4=$_POST["Resphone"];
$a5=$_POST["tid"];
$s="insert into resturant values ('$a1' , '$a2' , '$a3' , '$a4', '$a5')";
$q=mysql_query($s);
header("location:form12.php");
mysql_close();
?>