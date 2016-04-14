<html>
<head>
<title>歡迎</title>
</head>	
<body>
<?php
session_start();
$link=mysqli_connect("localhost","root","123456","a");
mysqli_query($link,"set uName utf8");
$name=$_COOKIE['name'];
$pwd=$_COOKIE['pwd'];

if(isset($_SESSION['check'])){
$sql="SELECT * from a WHERE name='$name' AND password='$pwd'";
$result=mysqli_query($link,$sql);
	$read=mysqli_fetch_array($result);
	echo $Name.'歡迎回來<br/>';
	echo '上一次登入時間為'.$read[6];
	echo '<br/>登入次數為'.$read[5];
	
	echo "<form action='profile.php' method='post'>";
	echo "<input type='hidden' name='id' value=$read[0]>";
	echo "<br/><input type='submit' value='修改個人資料'>";

	}
else{
	header('Location:log.php');
}

?>


</body>
</html>