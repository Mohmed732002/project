<!DOCTYPE html>
<html lang="en" dir=rtl>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل بيانات سكن الطلاب</title>
    <style type="text/css">
    /*اللون وشكل الزراير*/    
        #a{
	background-color:blue;
	color:white;
	font-size:30px;
	width:200px;
	height:50px;
	border-radius:30px;
    }
    /*عند ما الماوس يتجه الى الزر يحول اللون الى اللون الاحمر*/   
        #a:hover{
    background-color: red;
    box-shadow: 10px 10px lightblue;
    }
    /*لون الخط لكل كلمة*/
        #b{
	background-color:white;
	color:blue;
	font-size:25px;
	width:300px;
	height:45px;
	border-radius:25px;
    }
    /*عند ما الماوس يتجه الى مربع البيانات يحول اللون الى اللون الاخضر الفاتح*/   
        #b:hover{
	background-color: lawngreen;
    box-shadow: 10px 10px yellow;
    }
    /*لون الخط لكل كلمة*/
        b{
	font-size:30px;
    text-shadow: 2px 2px 5px red;
    }
    /*شكل الاطار ولون الصفحة*/
    body{
		background-image: url('house.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-position:center;
        background-size:100%;
        font-size:55px;
		}
    /*شكل ولون الاعنوان*/
    h3{
    background-color: white;
    border-radius:20px;
    font-size:40px;
    width:50%;
    color: blue;
    font-family: Tahoma;
    height:60px;
    }
    /*شكل الجدول ولونه*/
    table{
        border-radius:25px;
        border-color:red;
        color:white;
    }
    th{
        height:60px;
    }
    .button {
    background-color: white;
    border-radius:20px;
    font-size:44px;
    width:60%;
    color: blue;
    font-family: Tahoma;
    margin-bottom:30px;
    padding-bottom:10px;
    }
    .button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }
    #ra{
        font-size:30px;
    }
    label {
        font-size:30px;
    }
    </style>
</head>
<body><center>
    <form action="student_housing2.php" method="post">
    <b><h3>تسجيل بيانات سكن الطلاب</h3></b> 
    <table border=10 height=60% width=60%>
       <tr><th><b>رقم السكن</b></th><th><input type="text" name="ssid" id="b"></th></tr>
       <tr><th><b>اسم السكن</b></th><th><input type="text" name="ssname" id="b"></th></tr>
       <tr><th><b>عنوان السكن</b></th><th><input type="text" name="ssaddress" id="b"></th></tr>
       <tr><th><b>سعر السكن</b></th><th><input type="text" name="ssinstitute" id="b"></th></tr>
       <tr><th><b>مدة الايجار</b></th><th><input type="text" name="ssdiv" id="b"></th></tr>
       <tr><th><b>التأمين</b></th><th><input type="text" name="ssthe_band" id="b"></th></tr>
       <tr><th><b>النوع</b></th><th><input type="text" name="ssgender" id="b"></th></tr>
       <tr><th colspan='2'><input type="submit" value="     حفظ     " id="a">
       <input type="reset" value="     تراجع     " id="a"></th></tr>
    </table>
    <br>
    <button class="button button2"><a href="vstudent_housing2.php" id='aa'>عرض بيان سكن الطلاب</a></button>
    </form>
    </body>
    </html>