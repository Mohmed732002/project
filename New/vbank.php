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
    table{
        background-color:black;
        color:white;
        border-radius:25px;
        border-color:red;
        font-size:30px;
        width:70%;
        box-shadow:20px 10px 3px #a52a2a;
    }
    th{
        height:55px;
    }
    </style>
</head>
<body background="vbank.jpg"><center>
    <b><h3>عرض جدول البنك</h3></b>
    <?php
    $c=mysql_connect('localhost' , 'root' , '');
    mysql_select_db('HIC');
    $s="select * from bank";
    $q=mysql_query($s);
    print "<table border=5 width=50%>";
   
    print "<tr><th>رقم البنك</th><th>اسم البنك</th><th>المصروفات</th><th>حصة الوزارة</th><th>حصة الجمعية</th><th>حصة المعهد</th></tr>";
   $s1=0;
   $s2=0;
   $s3=0;
   $s4=0;
   
    while ($x=mysql_fetch_array($q))
    {
        print "<tr>";
        print "<th>".$x[0]."</th>";
        print "<th>".$x[1]."</th>";
        print "<th>".$x[2]."</th>";
        print "<th>".$x[3]."</th>";
        print "<th>".$x[4]."</th>";
        print "<th>".$x[5]."</th>";
        print "</tr>";
        $s1=$s1+$x[2];
        $s2=$s1+$x[3];
        $s3=$s1+$x[4];
        $s4=$s1+$x[5];
    }
    print "</table>";
    print "<br><br>";
    print "<table border=2 >";
    print "<tr> <th colspan=4>    بيانات احصائية</th> </tr>";
    print "<tr><th> اجمالي المبالغ</th> <th> اجمالي حصة الوزارة</th> <th> اجمالي الجمعية</th> <th> اجمالي المعهد</th> </tr>";
    print "<tr> <th> <h2> ". $s1."</h2></th> <th>  <h2> ". $s2."</h2></th> <th> <h2> ". $s3."</h2></th> <th> <h2> ". $s4."</h2></th> </tr>";
    mysql_close();
    ?>
</body>
</html>