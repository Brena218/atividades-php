<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Formulário</h1>
   <form action="form.php" method="POST">
   <input type="number" name="id" id="id" placeholder="id : " required ><br><br>
      <input  type="text" name="nome" id="nome" placeholder="Nome: " required ><br><br>

      <input type=submit  value="Enviar">
      </form>
</body>
</html>
<?php
include "clientes.php";

$id=$_POST["id"];
$nome=$_POST["nome"];


$sql = "INSERT INTO sol VALUES ('$id','$nome')";
mysqli_query($conn,$sql) or die ("erro");
mysqli_close($conn);
echo "cliente cadastrado";



?>