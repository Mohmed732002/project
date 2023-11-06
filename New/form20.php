<!DOCTYPE html>
<html lang="en" dir=rtl>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مواد فرقة اولى</title>
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
	background-color:pink;
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
    background-color:#80cbc4;
    border-color:#42a5f5;
    border-style:dashed;
    height:600px;
    border-width:20px;
    border-radius: 20px;

    background-image: url();
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: 100% 100%;
    }
    /*شكل ولون الاعنوان*/
    h3{
    background-color: #aed581;
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
    }
    th{
        height:60px;
    }
    .button {
    background-color: #f48fb1;
    border-radius:20px;
    font-size:44px;
    width:60%;
    color: blue;
    font-family: Tahoma;
    }
    .button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }
        </style>
</head>
<body><center>
    <form action="courses3.php" method="post">
     <b><h3>تسجيل بيانات المواد القررة ف3</h3></b> 
    <table border=10 height=60% width=60%>
       <tr><th><b> رقم المقرر </b></th><th><input type="text" name="coid" id="b"></th></tr>
       <tr><th><b> اسم المقرر </b></th><th><input type="text" name="cname" id="b"></th><tr>
       <tr><th><b> عدد ساعات العمل </b></th><th><input type="text" name="Number_of_hours" id="b"></th><tr>
       <tr><th colspan='2'><input type="submit" value="     حفظ     " id="a">
       <input type="reset" value="     تراجع     " id="a"></th></tr>
    </table>
    <br>
    <button class="button button2"><a href="vcourses3.php" id='aa'>عرض بيان المواد المقررة فرقة ثالثة نظم</a></button>
    </form>
</body>
</html>