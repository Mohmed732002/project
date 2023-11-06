<!DOCTYPE html>
<html lang="en" dir=rtl>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pay_off</title>
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
    width:50%;
    color: blue;
    font-family: Tahoma;
    height:65px;
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
    <form action="pay_off.php" method="post">
     <b><h3>تسجيل السداد pay_off</h3></b> 
    <table border=10 height=60% width=60%>
       <tr><th><b> رقم الطالب </b></th><th><input type="text" name="Tid" id="b"></th></tr>
       <tr><th><b> رقم البنك </b></th><th><input type="text" name="Baid" id="b"></th><tr>
       <tr><th><b> المبلغ المسدد </b></th><th><input type="text" name="amount_paid" id="b"></th><tr>
       <tr><th><b> تاريخ السداد </b></th><th><input type="text" name="date_of_payment" id="b"></th><tr>
       <tr><th colspan='2'><input type="submit" value="     حفظ     " id="a">
       <input type="reset" value="     تراجع     " id="a"></th></tr>
    </table>
    <br>
    <button class="button button2"><a href="vpay_off.php" id='aa'>عرض بيان السداد</a></button>
    </form>
</body>
</html>