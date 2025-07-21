<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <?php 
    $numero = isset($_GET["num"]) ? $_GET["num"] : 0;
    $raizQuadrada = sqrt($numero);
    $raizCubica = pow($numero, 1/3);
    ?>

    <div class="container py-4">
        <h1 class="mb-4">Cálculo de Raízes</h1>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get" class="mb-4">
            <div class="mb-3">
                <label for="TxtNum" class="form-label">Número:</label>
                <input type="number" name="num" id="TxtNum" class="form-control" value="<?php echo $numero; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <div class="alert alert-secondary">
            <p>Raiz quadrada: <strong><?php echo number_format($raizQuadrada, 2, ",", "."); ?></strong></p>
            <p>Raiz cúbica: <strong><?php echo number_format($raizCubica, 2, ",", "."); ?></strong></p>
        </div>
    </div>

</body>
</html>
