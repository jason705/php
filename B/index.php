<html>
<head>
<title>計算機</title>
</head>
<body>
<?php
function add($number1,$number2)
{
    return $number1+$number2;
}

function minus($number1,$number2)
{
    return $number1-$number2;
}

function times($number1,$number2)
{
    return $number1*$number2;
}

function division($number1,$number2)
{
    return $number1/$number2;
}

function index($number1,$number2)
{
	$sum=1;
	for($i=0;$i<$number2;$i++){
		$sum=$number1*$sum;
	}
    return $sum;
}

echo "<form action='' method='get'>";
echo "<input type='number' name='num1'><br/>";
echo "<input type='number' name='num2'><br/>";
echo "<select name='calculate'>";
echo "<option value='add'>+</option>";
echo "<option value='minus'>-</option>";
echo "<option value='times'>*</option>";
echo "<option value='division'>/</option>";
echo "</select>";
echo "<input type='submit' value='計算'>";
echo "</form>";


if(isset($_GET['num1'])){
	$num1=$_GET['num1'];
	$num2=$_GET['num2'];
	$calculate=$_GET['calculate'];

	switch ($calculate) {
		case 'add':
			echo add($num1,$num2);
			break;
		
		case 'minus':
			echo minus($num1,$num2);
			break;
		
		case 'times':
			echo times($num1,$num2);
			break;
		
		case 'division':
			echo division($num1,$num2);
			break;
		default:
			break;
	}



}

?>





</body>
</html>