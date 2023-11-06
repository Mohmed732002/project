<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html dir=rtl>

<head>
  <title></title>
</head>
    <style type="text/css">
		/*اللون وشكل الزراير*/
	#a{
		background-color:#a52a2a;
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
		background-color:#b22222;
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
		background-image: url('f32.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-position:center;
        background-size:100%;
        font-size:30px;
		}
		/*شكل ولون الاعنوان*/
    h3{
		background-color:;
		border-radius:20px;
		font-size:40px;
		width:80%;
		color:#b22222;
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
		background-color:;
		border-radius:20px;
		font-size:50px;
		width:60%;
		color: black;
		font-family: Tahoma;
		padding-bottom:10px;
    }
	a{
		text-decoration:none;
	}
        </style>
</head>
<body><center>
    <form action="expenses.php" method="post">
	<b><h3>تسجيل المصروفات</h3></b>
    <table border=10 height=60% width=60%>
	<tr><th><b> رقم الفرقة </b></th><th><input type="text" name="eeid" id="b"></th></tr>
	<tr><th><b> اسم الفرقة </b></th><th><input type="text" name="eename" id="b"></th><tr>
	<tr><th><b> المصروفات الدراسية كاش </b></th><th><input type="text" name="tuition_expenses1" id="b"></th><tr>
	<tr><th><b> السداد كاش بخصم 10% </b></th><th><input type="text" name="tuition_expenses2" id="b"></th><tr>
    <tr><th colspan='2'><input type="submit" value="     حفظ     " id="a">
	<input type="reset" value="     تراجع     " id="a"></th></tr>
    </table>
    <br>
    <a href="vexpenses.php" id='aa'>عرض بيانات المصروفات</a>
    </form>
</body>
</html>
