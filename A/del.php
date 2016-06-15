<html>
<head>
<title>刪除</title>
</head>
<body>
<?php

$name=$_COOKIES["name"];
$pwd=$_COOKIES["pwd"]
$link=mysqli_connect("localhost","root","123456","a");
$del="DELETE FROM a WHERE name=".$name."AND password=".$pwd;
mysqli_query($link,$del);
setcookie("name","",time()-3600)
setcookie("pwd","",time()-3600)
session_destroy();
echo "帳號已刪除"
echo "<br/><a href='log.php'>返回</a>"

?>







?>
</body>
</html>