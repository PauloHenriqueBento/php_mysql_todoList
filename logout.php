<?php
session_start();

// Destroi a sessão e redireciona para a página de login
session_destroy();
header("Location: index.php");
exit;
?>
