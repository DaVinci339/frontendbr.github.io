<?php 
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmar = $_POST['confirmar_senha'];
$con = mysqli_connect('localhost', 'root', '', 'aprendi');
if ($con) {
    if ($senha != $confirmar) {
        echo "As senhas não são iguais.";
    } else {
        $bus = mysqli_query($con, "SELECT * FROM usuario WHERE email_usuario = '$email'");

        if (mysqli_num_rows($bus) > 0) {
            echo "Esse e-mail já está cadastrado.";
        } 
        else {
            $sql = "INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario)  VALUES ('$nome', '$email', '$senha')";
            if (mysqli_query($con, $sql)) {
            header("Location: index.html");

            } else {

                echo "Erro ao cadastrar: " . mysqli_error($con);

            }
        }
    }

    mysqli_close($con);

} else {

    echo "Erro ao conectar com o banco de dados.";

}

?>
