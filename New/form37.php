<!DOCTYPE html>
<html lang="en" dir=rtl>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل بيانات الطالب</title>
    <style type="text/css">
    h3{
        background-color: #aed581;
        border-radius:20px;
        font-size:40px;
        width:50%;
        color:blue;
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
        background-image: url('st.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-position:center;
        background-size:100%;
        font-size:30px;
    }
    #b{
        background-color:lightblue;
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
    <h3>تسجيل الالتحاق بالمعهد</h3>
    <form action="student2.php" method="post">
        رقم القومي <input type="text" name="ssid" id="b"><br><br>
        اسم الطالب <input type="text" name="ssname" id="b"><br><br>
        التليفون <input type="text" name="ssphone" id="b"><br><br>
        العنوان <input type="text" name="ssaddress" id="b"><br><br>
        الشعبة  <select name="ssdiv" id="yy">
                    <option>اختر.....</option>
                    <option>نظم معلومات ادارية</option>
                    <option>تجارة الكترونية</option>
                </select>
            <br><br>
            البنك   <select name="ssbank" id="yy">
                        <option>اختر.....</option>
                        <option>الاهلي</option>
                        <option>البنك الاهلي المصري</option>
                        <option>بنك الاسكندرية</option>
                        <option>التعمير والاسكان</option>
                        <option>CIB</option>
                        <option>بنك القاهرة</option>
                    </select>
            <br><br>
        المصروفات  <input type="radio" name="ssprice" value="كاش" >كاش
                    <input type="radio" name="ssprice" value="قسط">قسط
            <br><br>
        الاتوبيس <select name="ssbus" id="yy">
                    <option>اختر.....</option>
                    <option>حورس</option>
                    <option>الثقافة</option>
                    <option>الاستاد</option>
                    <option>الجمهورية</option>
                    <option>الاتحاد</option>
                </select> 
            <br><br>
        السكن <select name="sshouse" id="yy">
                    <option>اختر.....</option>
                    <option>سكن طلبة...</option>
                    <option>فندق ابو عمر</option>
                    <option>فندق ملك</option>
                    <option>فندق طيبة</option>
                    <option>فندق ناصر</option>
                    <option>ــــــــــ</option>
                    <option>سكن طالبات...</option>
                    <option>فندق الحرمين</option>
                    <option>فندق هابي لاند</option>
                    <option>فندق هنا</option>
                    <option>فندق النور</option>
                </select>
        <br><br>
        المطعم <select name="ssfood" id="yy">
                    <option>اختر.....</option>
                    <option>وصايه</option>
                    <option>ام حسن</option>
                    <option>ماكدونلز</option>
                    <option>كلاش</option>
                    <option>جادو</option>
                    <option>الزعيم</option>
                    <option>الدمشقي</option>
                    <option>سورس</option>
                    <option>مكة</option>
                    <option>زاكس</option>
                </select><br><br>
        <th colspan='2'><input type="submit" value="     حفظ     " id="a">
        <input type="reset" value="     تراجع     " id="a">
    <br><br>
    <button class="button button2"><a href="vstudent2.php" id='aa'>عرض بيان سكن الطلاب</a></button>
    </form>
    </body>
    </html>
