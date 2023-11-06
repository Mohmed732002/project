<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["Sid"];
$a2=$_POST["ssdate"];
$a3=$_POST["eid"];
$a4=$_POST["total"];
$a5=$a4*0.11;
$a6=$a5*0.1725;
$a7=($a4-$a5)*0.22;
$a8=$a4-$a5-$a7;
$s="insert into s_salary values ('$a1' , '$a2' , '$a3' , '$a4','$a5','$a6','$a7','$a8')";
$q=mysql_query($s);
header("location:form16.php");
mysql_close();
?>