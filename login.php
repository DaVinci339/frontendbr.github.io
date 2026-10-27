<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

$bnc = mysqli_connect('localhost', 'root', '', 'aprendi');
if ($bnc) {
    $bus = mysqli_query( $bnc, "SELECT * FROM usuario WHERE email_usuario = '$email' AND senha_usuario = '$senha'" );
 $contagem = mysqli_num_rows($bus);
    if ($contagem == 1) {
        session_start();
        $_SESSION['logado'] = true;
        header("Location: index.html");
        exit;
    } 
    else {
        echo "E-mail ou senha incorretos.";
    }
} 
else {
    echo "Deu erro na conexão com o banco.";
}

?>