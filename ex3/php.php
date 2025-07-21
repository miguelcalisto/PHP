<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                <h1 class="card-title mb-4">Resultado</h1>

                <?php 
                if (isset($_GET["real"]) && is_numeric($_GET["real"])) {
                    $real = $_GET["real"];
                    $dolar = $real / 5;

                    echo "<p class='fs-4'>Seus <strong>R$ " . number_format($real, 2, ',', '.') . "</strong> equivalem a <strong>US$ " . number_format($dolar, 2, ',', '.') . "</strong>.</p>";
                } else {
                    echo "<p class='text-danger'>Erro: valor inválido.</p>";
                }
                ?>

                <a href="index.html" class="btn btn-secondary mt-3">Voltar</a>
            </div>
        </div>
    </div>

</body>
</html>
