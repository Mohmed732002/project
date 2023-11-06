<!DOCTYPE html>
<html lang="en" dir=rtl>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <style type="text/css">
    h2{
        background-color:;
        border-radius:20px;
        font-size:40px;
        width:50%;
        color:#b22222;
        font-family: Tahoma;
        height:60px;
    }    
    form{
        background-color:;
        color:black;
        border-radius:20px;
        font-size:30px;
        width:60%;
        padding-top:20px;
        padding-bottom:20px;
    }
    body{
        background-image: url('st2.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-position:center;
        background-size:100%;
        font-size:30px;
    }
    #b{
        background-color:#c0c0c0;
        color:black;
        font-size:25px;
        width:300px;
        height:45px;
        border-radius:25px;
    }
    #b:hover{
        background-color: #ffebcd;
        box-shadow: 10px 10px black;
    }
    #yy{
        font-size:20px;
    }
    #a{
        background-color:white;
        color:black;
        font-size:30px;
        width:200px;
        height:50px;
        border-radius:30px;
    }
    #a:hover{
        background-color: #ffebcd;
        box-shadow: 10px 10px black;
    }
    .button {
        background-color:white;
        color:black;
        font-size:30px;
        width:80%;
        height:50px;
        border-radius:30px;
    }
    .button:hover {
        background-color: #ffebcd;
        box-shadow: 10px 10px black;
    }
    a{
        text-decoration:none;
        color:black;
    }
    </style>
</head>

<body><center>
    <h2>تسجيل بيانات الطالب</h2>
    <form action="student.php" method="post">
            رقم الطالب <input type="text" name="Tid" id=b><br><br>
            اسم الطالب <input type="text" name="Tname" id=b><br><br>
            العنوان <input type="text" name="Taddress" id=b><br><br>
            التليفون <input type="text" name="Telephone" id=b><br><br>
            الفرقة <input type="text" name="level" id=b><br><br>
        <input type="submit" value="حفظ" id=a>
        <input type="reset" value="تراجع" id=a>
    <br><br>
    <button class=button><a href="vstudent.php">عرض الطلاب المقيدين في المعهد</a></button>
    </form>
</body>
</html>
