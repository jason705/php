<?php
$id=$_POST['id'];
$Pwd=$_POST['passwd'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$link=mysqli_connect("localhost","root","123456","a");
$update="UPDATE a SET password= '$Pwd' ,email= '$email' phone= '$phone' WHERE id='$id'";
mysqli_query($link, $update);
echo "<br/><a href='index.php'>返回</a>";
?>