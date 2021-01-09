
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    
 </head>
  

  <body>
   
<form action="test.php" method="get">
 Principle :<input type = "number" name="amount"> <br>
 Interest :<input type = "number" name="interest"> <br>
 Number of years : <input type = "number" name="years"><br>
 <input type="submit">
</form>


Compound Interest Calculator  :~~  
<?php
 echo $_GET["amount"] * pow((1 + ($_GET["interest"]/100)),$_GET["years"])

?>



  </body>
</html>
