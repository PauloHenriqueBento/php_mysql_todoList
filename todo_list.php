<?php require_once 'header.php' ?>
<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
?>
<body class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Bem-vindo!</h1>
        <a href="logout.php" class="btn btn-danger px-3">Sair</a>
    </div>
</body>
</html>