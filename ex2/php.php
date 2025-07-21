<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Número</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                <h1 class="card-title mb-4">Gerando Número</h1>

                <?php 
                    $min = 0;
                    $max = 100;
                    $rand = rand($min, $max);
                    $antecessor = $rand - 1;
                    $sucessor = $rand + 1;

                    echo '<p class="fs-4">Número gerado: <strong>' . $rand . '</strong></p>';
                    echo '<p>Antecessor: <strong>' . $antecessor . '</strong></p>';
                    echo '<p>Sucessor: <strong>' . $sucessor . '</strong></p>';
                ?>

                <button onclick="location.reload()" class="btn btn-primary mt-3">Gerar Novo Número</button>
            </div>
        </div>
    </div>

</body>
</html>
