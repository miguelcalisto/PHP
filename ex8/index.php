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
    $sqr3 = pow($num , 1/3);
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">

    <label for="TxtNum"> numero: </label>
    <input type="number" name="num" id="TxtNum" value="<?php echo $num?>">
    <input type="submit" value="enviar">
    </form>
    <p>raiz quadrada = <?php echo number_format($sqr , 2,"," , ".")?></p>
    
    <p>raiz cubica = <?php echo number_format($sqr3 , 2 , "," , ".")?></p>

</body>
</html>