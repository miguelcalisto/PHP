<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container">
        <h1 class="mb-4">Resultado</h1>
        <?php 
            $numero = $_GET["numero"];
            $parte_inteira = (int) $numero;
            $parte_fracionaria = $numero - $parte_inteira;
        ?>
        <ul class="list-group">
            
            <li class="list-group-item">

                Número informado: <strong> <?php echo $numero; ?>   </strong>
            
            </li>

            <li class="list-group-item"> 
                
            Parte inteira: <strong>
                
                 <?php echo $parte_inteira; ?>  
                
                </strong>
        
        </li>
            <li class="list-group-item">Parte fracionária: <strong><?php echo number_format($parte_fracionaria, 2, ',', ''); ?></strong></li>
        </ul>
        <a href="index.html" class="btn btn-secondary mt-3">Voltar</a>
    </div>
</body>
</html>
