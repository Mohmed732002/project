<!DOCTYPE html>
<html lang="en" dir=rtl>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus</title>
    <style type="text/css">
    /*اللون وشكل الزراير*/    
        #a{
	background-color:pink;
	color:blue;
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
    background-color: ;
    border-radius:20px;
    font-size:40px;
    width:50%;
    color:pink;
    font-family: Tahoma;
    height:60px;
    }
    /*شكل الجدول ولونه*/
    table{
        border-radius:25px;
        border-color:lightblue;
        color:pink;
        padding-top:10px;
        padding-bottom:10px;
    }
    th{
        height:60px;
    }
    .button {
    background-color:pink;
	color:blue;
    border-radius:20px;
    font-size:44px;
    width:60%;
    font-family: Tahoma;
    padding-top:10px;
            padding-bottom:10px;
    }
    .button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }
    body{
		background-image: url('bus.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-position:center;
        background-size:100%;
        font-size:55px;
		}
        a{
            text-decoration:none;
            
        }
        </style>
</head>




<body><center>
    <form action="bus.php" method="post">
     <b><h3>تسجيل بيانات الاتوبيس bus</h3></b> 
    <table border=10 height=60% width=60%>
       <tr><th><b> رقم الاتوبيس </b></th><th><input type="text" name="Bid" id="b"></th></tr>
       <tr><th><b> اسم الاتوبيس </b></th><th><input type="text" name="bname" id="b"></th><tr>
       <tr><th><b> سعر الاشتراك </b></th><th><input type="text" name="money" id="b"></th><tr>
       <tr><th colspan='2'><input type="submit" value="     حفظ     " id="a">
       <input type="reset" value="     تراجع     " id="a"></th></tr>
    </table>
    <br>
    <button class="button button2"><a href="vbus.php" id='aa'>عرض بيان الاتوبيس</a></button>
    </form>
</body>
</html>