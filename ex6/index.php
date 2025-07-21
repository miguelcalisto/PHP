<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<?php 
$dividendo = $_GET["dividendo"] ?? 0;
$divisor = $_GET["divisor"] ?? 1;
$res = $dividendo / $divisor;
$resultado = intdiv($dividendo, $divisor);
$resto = $dividendo % $divisor;
?>

<body class="p-4">
    <div class="container">
        <h1 class="mb-4">Calculadora de Divisão</h1>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get" class="mb-4">
            <div class="mb-3">
                <label for="TxtDividendo" class="form-label">Dividendo</label>
                <input type="number" class="form-control" id="TxtDividendo" name="dividendo" value="<?php echo $dividendo; ?>">
            </div>

            <div class="mb-3">
                <label for="TxtDivisor" class="form-label">Divisor</label>
                <input type="number" class="form-control" id="TxtDivisor" name="divisor" value="<?php echo $divisor; ?>">
            </div>

            <input type="submit" class="btn btn-primary" value="Calcular">
        </form>

        <ul class="list-group">
            <li class="list-group-item">Dividendo: <?php echo $dividendo; ?></li>
            <li class="list-group-item">Divisor: <?php echo $divisor; ?></li>
            <li class="list-group-item">Resultado: <?php echo number_format($res ,3,"," , "."); ?></li>
            <li class="list-group-item">Resto: <?php echo $resto; ?></li>
        </ul>
    </div>
</body>
</html>
