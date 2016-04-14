<?php
session_start();
if(isset($_POST['name'])){
$Name=$_POST['name'];
$Pwd=$_POST['passwd'];
$link=mysqli_connect("localhost","root","123456","a");
mysqli_query($link,"set uName utf8");
$sql="SELECT * from a WHERE name='$Name' AND password='$Pwd'";
$result=mysqli_query($link,$sql);
$rows=mysqli_num_rows($result);
if($rows){
	$_SESSION["check"]="yes";
	setcookie('name',$Name);
	setcookie('pwd',$Pwd);
	date_default_timezone_set('Asia/Taipei');   
	$nowtime= date("Y-m-d H:i:s");
	$count=$read[5]+1;
	echo $count;
	$sql2="UPDATE a SET logtime= '$nowtime' logcount= '$count' WHERE id= '$read[0]'";
	mysqli_query($link,$sql2);




	//header('Location:index.php');
}else{
	echo "登入失敗，3秒後回登入頁面";
	header('refresh:3;url="login.php"');
}
?>