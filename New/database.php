<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title></title>
</head>

<body>

<?php

$c=mysql_connect('localhost','root','');
$s="create database HIC";
$q=mysql_query($s);
mysql_select_db("HIC");

$s="create table student (Tid int primary key, Tname text,Taddress text,
Telephone text, level text)";
$q=mysql_query($s);

$s="create table course (cid int primary key, cname text,book_num int,
Book_term1 int, Book_term2 int)";
$q=mysql_query($s);

$s="create table study (cid int , tid int ,mark float)";
$q=mysql_query($s);

$s="create table bank (Baid int primary key, baname text, money float,
p1 float, p2 float, p3 float)";
$q=mysql_query($s);

$s="create table pay_off (Tid int , baid int ,amount_paid float,
date_of_payment date)";
$q=mysql_query($s);

$s="create table bus (Bid int primary key, bname text,money float)";
$q=mysql_query($s);

$s="create table Participate (tid int , bid int ,
Subscription_Date date)";
$q=mysql_query($s);

$s="create table student_activities (said int primary key, cname text)";
$q=mysql_query($s);

$s="create table practice (Said int , Tid int ,
Num_ofsubecribes float)";
$q=mysql_query($s);

$s="create table library (Lid int primary key, Lname text)";
$q=mysql_query($s);

$s="create table borrow (Lid int , Tid int ,Start_date date,
End_date date)";
$q=mysql_query($s);

$s="create table resturant (Resid int primary key, Resname text,Resaddress text,
Resphone text)";
$q=mysql_query($s);

$s="create table take (Tid int , Resid int ,ratio float,
tprice float)";
$q=mysql_query($s);

$s="create table emp (Eid int primary key, Ename text,Etype text,
Eaddress text, ephone text)";
$q=mysql_query($s);

$s="create table work_in (Tid int , eid int )";
$q=mysql_query($s);

$s="create table s_salary (Sid int primary key, ssdate date,
eid int ,total float,t1 float,t2 float,t3 flaot,net float)";
$q=mysql_query($s);

$s="create table discount (Did int primary key, Dname text,Dcount int,
Eid int , sid int )";
$q=mysql_query($s);

$s="create table courses1 (coid int primary key, cname text,term int,
Number_of_hours int)";
$q=mysql_query($s);

$s="create table courses2 (coid int primary key, cname text,term int,
Number_of_hours int)";
$q=mysql_query($s);

$s="create table courses3 (coid int primary key, cname text,term int,
Number_of_hours int)";
$q=mysql_query($s);

$s="create table courses4 (coid int primary key, cname text,term int,
Number_of_hours int)";
$q=mysql_query($s);

$s="create table courses11 (coid int primary key, cname text,term int,
Number_of_hours int)";
$q=mysql_query($s);

$s="create table courses12 (coid int primary key, cname text,term int,
Number_of_hours int)";
$q=mysql_query($s);

$s="create table courses13 (coid int primary key, cname text,term int,
Number_of_hours int)";
$q=mysql_query($s);

$s="create table courses14 (coid int primary key, cname text,term int,
Number_of_hours int)";
$q=mysql_query($s);

$s="create table student_housing (ssid int primary key, ssname text, ssaddress text,
ssinstitute text, ssdiv text, ssthe_band text, ssgender text, sstpotr int,
ssinsurance int, ssparent_number int)";
$q=mysql_query($s);

mysql_close();
?>

</body>

</html>
