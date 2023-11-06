<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title></title>
</head>

<body>

<?php

if($_POST["username"]=="admin" && $_POST["password"]=="admin")
{
SESSION_START();
$_SESSION["login"]="yes";
header('location:home2.php');
}
else
{
SESSION_START();
$_SESSION["login"]="no";
header('location:login1.php');
}
?>

</body>

</html>
