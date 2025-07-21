<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<?php 
$atual = $_GET["atual"] ?? 0;
$min = 1500;
$res = intdiv($atual, $min);
$div = $atual % $min;
?>

<div class="container">
    <h1 class="mb-4">Cálculo de Salário Mínimo</h1>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get" class="mb-4">
        <div class="mb-3">
            <label for="TxtSal" class="form-label">Salário Atual:</label>
            <input type="number" class="form-control" id="TxtSal" name="atual" value="<?php echo $atual; ?>">
        </div>

        <input type="submit" name="enviar" class="btn btn-primary" value="Calcular">
    </form>

    <p class="alert alert-info">
        Você tem <?php echo $res; ?> salário(s) mínimo(s) e mais R$ <?php echo $div; ?>.
    </p>
</div>

</body>
</html>
