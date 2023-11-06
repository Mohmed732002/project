<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["Baid"];
$a2=$_POST["baname"];
$a3=$_POST["money"];
$a4=$a3*0.10;
$a5=$a3*0.20;
$a6=$a3*0.70;
$s="insert into bank values ('$a1' , '$a2', '$a3', '$a4', '$a5', '$a6')";
$q=mysql_query($s);
header("location:form4.php");
mysql_close();
?>