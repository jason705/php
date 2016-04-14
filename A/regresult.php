<html>
<head>
<title>註冊</title>
</head>
<body>
<?php
session_start();
$link=mysqli_connect("localhost","root","123456","a");
mysqli_query($link,"set uName utf8");
if(isset($_POST['name'])){
date_default_timezone_set('Asia/Taipei');   
$nowtime= date("Y-m-d H:i:s");
$sql="INSERT INTO a (name,password,email,phone,logcount,logtime) VALUES ('$_POST[name]','$_POST[passwd]','$_POST[email]','$_POST[phone]','0','$nowtime')";
$result=mysqli_query($link,$sql);
echo "註冊成功<br/>";
echo "<a herf='log.php'>返回</a>";
}else{
	echo "非法入口";
}




?>
</body>
</html>