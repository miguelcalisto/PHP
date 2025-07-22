<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Preço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<?php 
    $antigo = $_GET["preco"] ?? null;
    $por = $_GET["porcent"] ?? null;
?>

<div class="container">
    <h1 class="mb-4">Reajuste de Preço</h1>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get" class="mb-4">
        <div class="mb-3">
            <label for="TxtP" class="form-label">Preço antigo:</label>
            <input type="number" name="preco" id="TxtP" class="form-control" value="<?php echo $antigo; ?>">
        </div>

        <div class="mb-3">
            <label for="TxtR" class="form-label">Reajuste em %:</label>
            <input type="number" name="porcent" id="TxtR" class="form-control" value="<?php echo $por; ?>">
        </div>

        <input type="submit" value="Calcular" class="btn btn-primary">
    </form>

    <?php 
        if ( !empty($antigo) && !empty($por)) {
            $novo = (($antigo * $por) / 100) + $antigo;
            echo "<div class='alert alert-success'>Novo preço = <strong>R$ " . number_format($novo, 2, ",", ".") . "</strong></div>";
        }elseif ($antigo==0 || $por==0) {

             echo "<div class='alert alert-warning'>Valores não podem ser  zeros.</div>";

        } else {
            echo "<div class='alert alert-danger'>Valores não informados.</div>";
        }
    ?>
</div>

</body>
</html>
