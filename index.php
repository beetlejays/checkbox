<?php 
     
     if(isset($_POST["boxes"])) {
           foreach($_POST["boxes"] as $box) {
                 echo $box . "<br>";
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
<form action="" method="post">
<label for="one">One</label>      
<input type="checkbox" value="one" name="boxes[]" id="one">
<label for="two">Two</label>      
<input type="checkbox" value="two" name="boxes[]" id="two"><br><br>
<input type="submit" value="submit">
</form>
      
</body>
</html>