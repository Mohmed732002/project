<!DOCTYPE html>
<html lang="en" dir=rtl>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
	h3{
		background-color:black;
		border-radius:20px;
	        border-color:red;
	        border-width:5px;
	        border-style: solid;
		font-size:40px;
		width:50%;
		color: white;
		font-family: Tahoma;
		padding-top:10px;
		padding-bottom:15px;
        	box-shadow:20px 10px 3px #a52a2a;
    }
    body{
	        background-image: url('st2.jpg');
	        background-repeat:no-repeat;
	        background-attachment:fixed;
	        background-position:center;
	        background-size:100%;
	        font-size:30px;
    }
    table{
	        background-color:black;
	        color:white;
	        border-radius:25px;
	        border-color:red;
	        font-size:30px;
	        width:90%;
	        box-shadow:20px 10px 3px #a52a2a;
    }
    th{
        	height:55px;
    }
    </style>
</head>
<body><center>
    <b><h3>عرض بيانات تسجيل الطلبة</h3></b>
    <?php
    $c=mysql_connect('localhost' , 'root' , '');
    mysql_select_db('HIC');
    $s="select * from student2";
    $q=mysql_query($s);
    print "<table border=5>";
    print "<tr><th>الرقم القومي</th><th>اسم الطالب</th><th>التليفون</th><th>العنوان</th><th>الشعبة</th><th>البنك</th><th>المصروفات</th><th>الاتوبيس</th>
    <th>السكن</th><th>المطعم</th></tr>";
    while ($x=mysql_fetch_array($q))
    {
        print "<tr>";
        print "<th>".$x[0]."</th>";
        print "<th>".$x[1]."</th>";
        print "<th>".$x[2]."</th>";
        print "<th>".$x[3]."</th>";
        print "<th>".$x[4]."</th>";
        print "<th>".$x[5]."</th>";
        print "<th>".$x[6]."</th>";
        print "<th>".$x[7]."</th>";
        print "<th>".$x[8]."</th>";
        print "<th>".$x[9]."</th>";
        print "</tr>";
    }
    print "</table>";
    mysql_close();
    ?>
</body>
</html>
