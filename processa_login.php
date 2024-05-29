<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica se o usuário e a senha são "adm"
    if ($username === 'adm' && $password === 'adm') {
        // Redireciona para uma página de sucesso (pode ser qualquer página que você desejar)
        header("Location: inicio.php");
        exit();

        
    } else {
        // Exibe uma mensagem de erro
        echo '<script>alert("Usuário ou senha incorretos!"); window.location.href = "login.html";</script>';
    }
} else {
    // Redireciona para a página de login se o acesso não for via POST
    header("Location: login.html");
    exit();
}
?>
