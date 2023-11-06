<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["cid"];
$a2=$_POST["cname"];
$a3=$_POST["book_num"];
$a4=$_POST["Book_term1"];
$a5=$_POST["Book_term2"];
$s="insert into course values ('$a1' , '$a2' , '$a3' , '$a4' , '$a5')";
$q=mysql_query($s);
header("location:form2.php");
mysql_close();
?>