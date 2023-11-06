<!DOCTYPE html>
<html lang="en" dir=rtl>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .ta{
            background-color:pink;
            color:blue;
            border-radius:20px;
            font-size:30px;
            margin-top:170px;
            width:70%;
        }
		tr{
			height:60px;
		}
    </style>
</head>
<body><center>
<?php
$c=mysql_connect('localhost','root','');
mysql_select_db('HIC');
$a=$_POST["tid"];
$b=$_POST["tname"];
$s="select * from student where tid='$a' or tname='$b'";
$q=mysql_query($s);
print "<table border=5 height=20% width=80% class='ta'>";
while ($x=mysql_fetch_array($q))
{
    print "<tr><th>رقم الطالب</th><th>".$x[0]."</th></tr>";
    print "<tr><th>اسم الطالب</th><th>".$x[1]."</th></tr>";
    print "<tr><th>العنوان</th><th>".$x[2]."</th></tr>";
    print "<tr><th>الرقم</th><th>".$x[3]."</th></tr>";
    print "<tr><th>الفرقة</th><th>".$x[4]."</th></tr>";
}
print "</table>";
mysql_close();
?>
</body>
</html>