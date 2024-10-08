<?php
    date_default_timezone_set('America/Sao_Paulo');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

    session_start();

    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['senha'] = $_POST['senha'];
?>

<p>Funcionário: <?php 
    echo $_SESSION['nome'];
?> , logado com sucesso</p>
<p>Data da conexão:
<?php 
    echo date("d/m/Y");
?>
</p>
<p>Hora da conexão:
<?php 
    echo date("h:i:s");
?>
</p>
    
</body>
</html>
