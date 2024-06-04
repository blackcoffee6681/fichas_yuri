<?php 
if(!isset($_SESSION)){
    session_start();
}
include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OIOIOI</h1>
    Bem vindo <?php echo $_SESSION['jogador']; ?>
    Bem vindo <?php echo $_SESSION['nome_personagem']; ?>
    Bem vindo <?php echo $_SESSION['itens']; ?>
    Bem vindo <?php echo $_SESSION['forca']; ?>

    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>