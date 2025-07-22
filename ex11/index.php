<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$antigo = $_GET["preco"] ?? null;
$por = $_GET["porcent"]   ?? null;

$novo = (($antigo * $por)/100) + $antigo;


?>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
<label for="TxtP">preco antigo: </label>
<input type="number" name="preco" id="TxtP" value="<?php echo $antigo?>">

<label for="TxtR"> reajuste em %: </label>
<input type="number" name="porcent" id="TxtR" value="<?php  echo $por?>">

<input type="submit" value="calcular">



    </form></form>

     <?php 
    if((isset($antigo) && isset($por))){
            echo " novo preco = ". number_format($novo , 2, "," , ".");


    }else {
        echo "valores nãoinformados";
    }
    
    ?> 
</body>
</html>