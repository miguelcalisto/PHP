<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Médias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php 
$numero1 = $_GET["num1"] ?? 0;
$numero2 = $_GET["num2"] ?? 0;
$numero3 = $_GET["num3"] ?? 0;
$numero4 = $_GET["num4"] ?? 0;

$peso1 = 1;
$peso2 = 2;
$peso3 = 3;
$peso4 = 4;

$mediaSimples = ($numero1 + $numero2 + $numero3 + $numero4) / 4;
$mediaPonderada = (
    $numero1 * $peso1 +
    $numero2 * $peso2 +
    $numero3 * $peso3 +
    $numero4 * $peso4
) / ($peso1 + $peso2 + $peso3 + $peso4);
?>

<div class="container py-4">
    <h1 class="mb-4">Cálculo de Médias</h1>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get" class="mb-4">
        <div class="mb-3">
            <label for="TxtN1" class="form-label">Número 1:</label>
            <input type="number" name="num1" id="TxtN1" class="form-control" value="<?php echo $numero1; ?>">
        </div>

        <div class="mb-3">
            <label for="TxtN2" class="form-label">Número 2:</label>
            <input type="number" name="num2" id="TxtN2" class="form-control" value="<?php echo $numero2; ?>">
        </div>

        <div class="mb-3">
            <label for="TxtN3" class="form-label">Número 3:</label>
            <input type="number" name="num3" id="TxtN3" class="form-control" value="<?php echo $numero3; ?>">
        </div>

        <div class="mb-3">
            <label for="TxtN4" class="form-label">Número 4:</label>
            <input type="number" name="num4" id="TxtN4" class="form-control" value="<?php echo $numero4; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>

    <div class="alert alert-secondary">
        <p>Média simples: <strong><?php echo number_format($mediaSimples, 2, ",", "."); ?></strong></p>
        <p>Média ponderada: <strong><?php echo number_format($mediaPonderada, 2, ",", "."); ?></strong></p>
    </div>
</div>

</body>
</html>
