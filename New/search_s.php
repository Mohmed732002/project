<!DOCTYPE html>
<html lang="en" dir=rtl>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        h1{
            background-color:green;
			color:white;
			border-radius:20px;
			border-color:lime;
			border-width:20px;
			border-style:double;
			font-size:50px;
			padding-top:10px;
			padding-bottom:10px;
			width:40%;
			
        }
		form{
			background-color:blue;
			color:white;
			border-radius:80px;
			border-color:pink;
			border-width:20px;
			border-style:double;
			font-size:35px;
			padding-top:20px;
			padding-bottom:20px;
			width:70%;
		}
		#ii{
			background-color:white;
			color:blue;
			width:40%;
			font-size:30px;
			border-radius:20px;
		}
		#bb{
			background-color:white;
			color:blue;
			width:20%;
			font-size:30px;
			border-radius:20px;
		}
    </style>
</head>
<body><center>
<h1>صفحة البحث</h1>
    <form action="search2.php" method="post" class="ta">
        رقم الطالب <input type="text" name="tid" id="ii"><br><br>
        اسم الطالب <input type="text" name="tname" id="ii"><br><br>
        <input type="submit" value="     بحث     " id="bb">
    </form>
</body>
</html>