<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Resultado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

<div class="container py-5 text-center">

<?php
if (isset($_GET["numero"]) && is_numeric($_GET["numero"])) {
    $num = (int)$_GET["numero"];
    $antec = $num - 1;
    $posterior = $num + 1;

    echo "<h2>Número informado: <strong>$num</strong></h2>";
    echo "<p>Antecessor: <strong>$antec</strong></p>";
    echo "<p>Sucessor: <strong>$posterior</strong></p>";
} else {
    echo "<p class='text-danger'>Número inválido ou não informado.</p>";
}
?>

<a href="index.html" class="btn btn-secondary mt-3">Voltar</a>

</div>

</body>
</html>
