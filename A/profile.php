<html>
<head>
<title>個人資料修改</title>
</head>	
<body>
<?php
session_start();
if(isset($_SESSION['check'])){
$link=mysqli_connect("localhost","root","123456","a");
$read="SELECT * FROM a WHERE id=".$_POST['id'];
$readresult=mysqli_query($link,$read);
$result=mysqli_fetch_array($readresult);


echo "<form action='update.php' method='post'>";
echo "<input type='hidden' name='id' value='$result[0]'><br/>";
echo "密碼:<input type='password' name='passwd' value='$result[2]'><br/>";
echo "email:<input type='email' name='email' value='$result[3]'><br/>";
echo "電話:<input type='phone' name='phone' value='$result[4]'><br/>";
echo "<input type='submit' value='修改'>";







}
?>
</body>
</html>