<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html dir=rtl>

<head>
  <title></title>
</head>
    <style type="text/css">
		/*اللون وشكل الزراير*/
	#a{
		background-color:white;
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
		color:white;
    }
		/*شكل الاطار ولون الصفحة*/
		body{
		background-image: url('food.jpg');
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
		width:80%;
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
    <form action="foods_menu2.php" method="post">
	<b><h3>تسجيل بيانات المطاعم</h3></b>
    <table border=10 height=60% width=60%>
	<tr><th><b> رقم المطعم </b></th><th><input type="text" name="ffid" id="b"></th></tr>
	<tr><th><b> اسم المطعم </b></th><th><input type="text" name="ffname" id="b"></th><tr>
	<tr><th><b> قيمة الخصم </b></th><th><input type="text" name="fprice" id="b"></th><tr>
    <tr><th colspan='2'><input type="submit" value="     حفظ     " id="a">
	<input type="reset" value="     تراجع     " id="a"></th></tr>
    </table>
    <br>
    <button class="button button2"><a href="vfoods_menu2.php" id='aa'>عرض بيانات المطعم</a></button>
    </form>
</body>
</html>
