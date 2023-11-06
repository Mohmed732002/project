<?php
$c=mysql_connect('localhost' , 'root' , '');
mysql_select_db('HIC');
$a1=$_POST["ssid"];
$a2=$_POST["ssname"];
$a3=$_POST["ssaddress"];
$a4=$_POST["ssinstitute"];
$a5=$_POST["ssdiv"];
$a6=$_POST["ssthe_band"];
$a7=$_POST["ssgender"];
$a8=$_POST["sstpotr"];
$a9=$_POST["ssinsurance"];
$a10=$_POST["ssparent_number"];
$s="insert into student_housing values ('$a1' , '$a2' , '$a3' , '$a4', '$a5', '$a6', '$a7',
'$a8', '$a9', '$a10')";
$q=mysql_query($s);
header("location:form23.php");
mysql_close();
?>
