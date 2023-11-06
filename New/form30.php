<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html dir=rtl>

<head>
  <title></title>
</head>
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
		background-color: #aed581;
		border-radius:20px;
		font-size:40px;
		width:80%;
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
		padding-bottom:10px;
    }
    .button2:hover {
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }
	a{
		text-decoration:none;
	}
        </style>
</head>
<body><center>
    <form action="coursess3.php" method="post">
	<b><h3>تسجيل بيانات المواد (نظم معلومات ادارية) ف3</h3></b>
    <table border=10 height=60% width=60%>
	<tr><th><b> رقم المقرر </b></th><th><input type="text" name="coid" id="b"></th></tr>
	<tr><th><b> اسم المقرر </b></th><th><input type="text" name="cname" id="b"></th><tr>
	<tr><th><b> عدد ساعات العمل </b></th><th><input type="text" name="Number_of_hours" id="b"></th><tr>
	<tr><th colspan='2'><input type="submit" value="     حفظ     " id="a">
	<input type="reset" value="     تراجع     " id="a"></th></tr>
    </table>
    <br>
    <button class="button button2"><a href="vcoursess3.php" id='aa'>عرض المواد المقررة فرقة اولى نظم</a></button>
    </form>
</body>
</html>