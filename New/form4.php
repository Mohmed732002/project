<!DOCTYPE html>
<html lang="en" dir=rtl>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bank</title>
    <style type="text/css">
    h3{
        background-color:;
        border-radius:20px;
        font-size:40px;
        width:50%;
        color:white;
        font-family: Tahoma;
        height:60px;
    }    
    form{
        background-color:;
        color:white;
        border-radius:20px;
        font-size:30px;
        width:60%;
        padding-top:20px;
        padding-bottom:20px;
    }
    body{
        background-image: url('vbank.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-position:center;
        background-size:100%;
        font-size:30px;
    }
    #b{
        background-color:white;
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
<h3>البنك</h3>
    <form action="bank.php" method="post">
    رقم البنك <input type="text" name="Baid" id="b"><br><br>
    اسم البنك <input type="text" name="baname" id="b"><br><br>
    مصروفات المعهد <input type="text" name="money" id="b"><br><br>
       <tr><th colspan='2'><input type="submit" value="     حفظ     " id="a">
       <input type="reset" value="     تراجع     " id="a">
    <br><br>
    <button class="button button2"><a href="vbank.php" id='aa'>عرض بيان جميع البنوك</a></button>
    </form>
</body>
</html>