<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>envio do formulario</h1>
    <?php 
    $nome = $_GET["nome"] ?? "sem nome";
    $sobrenome = $_GET["sobrenome"]?? "sem sobrenome";
    echo "<p> seu nome eh $nome" . "  $sobrenome !<p/>";
    ?>
</body>
</html>