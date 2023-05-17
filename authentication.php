<?php
require_once 'config.php';
session_start();

// Verifica se o usuário já está logado, se sim, redireciona para a página de teste
if (isset($_SESSION['user_id'])) {
    header("Location: todo_list.php");
    exit;
}

// Verifica se o formulário de registro foi enviado
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Conecta ao banco de dados (substitua os valores conforme suas configurações)
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Verifica se ocorreu um erro na conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Insere o novo usuário no banco de dados
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === true) {
        echo "Registro realizado com sucesso. Faça o login abaixo.";
    } else {
        echo "Erro ao registrar o usuário: " . $conn->error;
    }

    $conn->close();
}

// Verifica se o formulário de login foi enviado
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Conecta ao banco de dados (substitua os valores conforme suas configurações)
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Verifica se ocorreu um erro na conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Verifica as credenciais do usuário no banco de dados
    $sql = "SELECT id FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        header("Location: todo_list.php");
        exit;
    } else {
        echo "Usuário ou senha inválidos.";
    }

    $conn->close();
}
