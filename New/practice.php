<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["Said"];
$a2=$_POST["Tid"];
$a3=$_POST["Num_ofsubecribes"];
$s="insert into practice values ('$a1' , '$a2' , '$a3')";
$q=mysql_query($s);
header("location:form9.php");
mysql_close();
?>