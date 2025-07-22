<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Idade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<?php 
    $anoAtual = date("Y");
    $anoNascimento = $_GET["nasc"] ?? 2000;
    $anoInformado = $_GET["atual"] ?? $anoAtual;
?>

<div class="container">
    <h1 class="mb-4">Calculadora de Idade</h1>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get" class="mb-4">
        <div class="mb-3">
            <label for="TxtNasc" class="form-label">Ano de nascimento:</label>
            <input type="number" id="TxtNasc" name="nasc" class="form-control" value="<?php echo $anoNascimento; ?>">
        </div>
        <div class="mb-3">
            <label for="TxtAtual" class="form-label">Ano atual:</label>
            <input type="number" id="TxtAtual" name="atual" class="form-control" value="<?php echo $anoInformado; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>

    <?php 
        if ($_GET) {
            if ($anoNascimento > $anoInformado) {
                echo '<div class="alert alert-danger">O ano de nascimento não pode ser maior que o ano atual.</div>';
            } else {
                $idade = $anoInformado - $anoNascimento;
                echo "<div class='alert alert-success'>";
                echo "<p>Ano de nascimento: <strong>$anoNascimento</strong></p>";
                echo "<p>Ano informado: <strong>$anoInformado</strong></p>";
                echo "<p>Você terá <strong>$idade</strong> anos em $anoInformado.</p>";
                echo "</div>";
            }
        }
    ?>
</div>

</body>
</html>
