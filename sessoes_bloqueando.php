<?php
    session_start();

    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['senha'] = $_POST['senha'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
<?php
    echo $_SESSION['nome'];
?> 
    echo date("d/m/Y");

</body>
</html>