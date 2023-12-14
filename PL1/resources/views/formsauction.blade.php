<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>


</head>



<body>

<form action="/auction" method="post">
@csrf

  <label for="art"> Obra de arte </label> <br>
  <input type="text" name="art" required> <br>
  
  <label for="name"> Nome </label> <br>
  <input type="text" name="name" required> <br>
  
  <label for="price"> Valor </label> <br>
  <input type="price" name="price" required> <br>


  <input type="submit"> <br>

</form>



</body>