<?php
$c=mysql_connect('localhost','root','');
mysql_select_db('hic');
$a1=$_POST['coid'];
$a2=$_POST['cname'];
$a3=$_POST['Number_of_hours'];
$s="insert into courses3 values('$a1','$a2','$a3')";
$q=mysql_query($s);
header("location:form20.php");
mysql_close();
?>