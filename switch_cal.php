
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chat Room</title>
    
 </head>
  
 
 <body>

<form action="test.php" method="POST">
  Number 1:<input type="number" step="0.001" name="num1">
  Number 2:<input type="number" step="0.001" name="num2">
  Operator:<input type ="textbox" step="0.001" name="operator">
<input type="submit">

</form>

<?php
$op = $_POST["operator"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

switch($op){
case "+":
	echo $num1 + $num2;
	break;

case "-":
	echo $num1 - $num2;
	break;
case "*":
	echo $num1 * $num2;
	break;	

case "/":
	echo $num1 / $num2;
        break;
}
?>

  </body>
</html>
