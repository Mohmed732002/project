<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html dir=rtl>

<head>
  <title></title>
</head>
<style type="text/css">
	h3{
		background-color:black;
		border-radius:20px;
        border-color:red;
        border-width:5px;
        border-style: solid;
		font-size:40px;
		width:60%;
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
    a{
        text-decoration:none;
        color: white;

    }
    #ab{
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
        margin-bottom:25px;
        box-shadow:20px 10px 3px #a52a2a;
    }
    #ab:hover{
        
    }
    </style>
</head>
<body><center>
    <b><h3>عرض المواد المقررة فرقة رابعة ترم تاني</h3></b>
    <?php
    $c=mysql_connect('localhost' , 'root' , '');
    mysql_select_db('HIC');
    $s="select * from coursess4";
    $q=mysql_query($s);
    print "<table border=5 width=50%>";
    print "<tr><th>رقم المقرر</th><th>اسم المقرر</th><th>عدد ساعات العمل</th></tr>";
    while ($x=mysql_fetch_array($q))
    {
        print "<tr>";
        print "<th>".$x[0]."</th>";
        print "<th>".$x[1]."</th>";
        print "<th>".$x[2]."</th>";
        print "</tr>";
    }
    print "</table>";
    mysql_close();
    ?>
    <br>
<center><button id="ab"><a href="home.php">الرجوع الى الشاشة الرئيسية</a></button></center>
</body>
</html>