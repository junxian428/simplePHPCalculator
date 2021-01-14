
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chat Room</title>
    
 </head>
  
 
 <body>

<form action="test.php" method="post">
   First Number: <input type="number" name="num1"><br>
   OP: <input type="textbox" name="op"><br>   
   Second Number: <input type="number" name="num2"><br>
    
   <input type="submit">
</form>

<?php
   $num1 = $_POST["num1"];
   $num2 = $_POST["num2"];
   $op = $_POST["op"];

   if ($op == "+"){
    echo $num1 + $num2;
   }
   elseif($op == "-"){
     echo $num1 - $num2;
   }
   elseif($op == "/"){
     echo $num1 / $num2;

   }
   elseif($op == "*"){
     echo $num1 * $num2;
   }
   else {
    echo "Invalid Syntax";
   }
 
?>

  </body>
</html>
