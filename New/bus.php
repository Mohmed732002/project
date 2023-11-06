<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["Bid"];
$a2=$_POST["bname"];
$a3=$_POST["money"];
$s="insert into bus values ('$a1' , '$a2' , '$a3')";
$q=mysql_query($s);
header("location:form6.php");
mysql_close();
?>