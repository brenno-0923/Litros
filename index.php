<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Water</title>
</head>
<body>
    
<div>

<form action="index.php" method="POST">

   
    Informe seu nome: <input type="text" name="nome"> <p>
    Informe seu peso:<input type="number" id="peso" name="peso" step="0.1">

    <input type="submit"> <p>

<?php

if ($_SERVER["REQUEST_METHOD"]==="POST"){
    if(isset($_POST["peso"]) && !empty($_POST["peso"]) && !empty($_POST["nome"]) && !empty($_POST["nome"])){

        $nome = $_POST['nome'];
        $peso = $_POST['peso'];

        $agua = 0.035 * $peso;

        echo $nome." Voce deve tomar todos os dias " .$agua ." litros";
    }

}


?>

</form>

</div>

</body>
</html>