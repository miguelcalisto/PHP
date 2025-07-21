<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $num = $_GET["num"];
    $sqr = sqrt($num);
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">

    <label for="TxtNum"> numero: </label>
    <input type="number" id="TxtNum" value="<?php echo $num?>">
    <input type="submit" value="enviar">
    </form>
    <p>raiz quadrada = </p>

</body>
</html>