<?php 


if (isset($_POST["submit"])) {
     if (!isset($_POST)) {
           foreach ($_POST["box"] as $wert) {
           echo $wert . ", " ;
           }            
     }  else {
      echo "Sorry, please check a box";
     }  
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      
<form action="#" method="post">
      <label for="one">One</label>
      <input type="checkbox" for="one" value="one" name="box[]">
      <label for="two">Two</label>
      <input type="checkbox" for="two" value="two" name="box[]">
      <label for="three">Three</label>
      <input type="checkbox" for="three" value="three" name="box[]">
      <input type="submit" value="submit now" name="submit">
</form>




</body>
</html>