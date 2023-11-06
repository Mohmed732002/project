<!DOCTYPE html>
<html lang="en" dir=rtl>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
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
    
    }
    /*شكل ولون الاعنوان*/
    h3{
    background-color: #f48fb1;
    border-radius:20px;
    font-size:44px;
    width:50%;
    color: blue;
    font-family: Tahoma;
    margin-top:10px;
    margin-bottom:30px;
    height:65px;
    margin-top:20px;
    margin-bottom:15px;
    }
    th{
        height:60px;
    }
    /*شكل الجدول ولونه*/
    table{
        border-radius:25px;
        border-color:red;
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
    <form action="courses.php" method="post">
     <b><h3>تسجيل المواد المقررة</h3></b>  
    <table border=5 height=60% width=70%>
       <tr><th><b> رقم الفرقة </b></th><th><input type="text" name="cid" id="b"></th></tr>
       <tr><th><b> اسم الفرقة </b></th><th><input type="text" name="cname" id="b"></th><tr>
       <tr><th><b> عدد مواد السنة </b></th><th><input type="text" name="book_num" id="b"></th><tr>
       <tr><th><b> عدد مواد الترم الاول </b></th><th><input type="text" name="Book_term1" id="b"></th><tr>
       <tr><th><b> عدد مواد الترم الثاني </b></th><th><input type="text" name="Book_term2" id="b"><br></th><tr>
       <tr><th colspan='2'><input type="submit" value="     حفظ     " id="a">
       <input type="reset" value="     تراجع     " id="a"></th></tr>
    </table>
    <br>
    <button class="button button2"><a href="vcourses.php" id='aa'>عرض بيان عدد المواد في كل فرقة</a></button>
</form>
</body>
</html>