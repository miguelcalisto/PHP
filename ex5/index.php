<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Números</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<?php 
$numero1 = $_GET["num1"] ?? 0;
$numero2 = $_GET["num2"] ?? 0;
$soma = $numero1 + $numero2;
?>

<div class="container">
    <h1 class="mb-4">Somar Números</h1>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get" class="mb-4">
        <div class="mb-3">
            <label for="Txtnum1" class="form-label">Número 1</label>
            <input type="number" name="num1" id="Txtnum1" class="form-control" value="<?php echo $numero1; ?>">
        </div>

        <div class="mb-3">
            <label for="Txtnum2" class="form-label">Número 2</label>
            <input type="number" name="num2" id="Txtnum2" class="form-control" value="<?php echo $numero2; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <section>
        <div class="alert alert-info">
            Resultado = <?php echo $soma; ?>
        </div>
    </section>
</div>

</body>
</html>
