
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    
 </head>
  

  <body>
   
<form action="test.php" method="get">
 Height (in cm units):<input type = "number" name="height"> <br>
 Weight (in kg units):<input type = "number" name="weight"> <br>
 <input type="submit">
</form>


BMI INDEX: 
<?php
 echo $_GET["weight"] / pow(($_GET["height"]/100),2) 
 

?>



  </body>
</html>
