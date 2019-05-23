<?php
include'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$Senha = $_POST['Senha'];
$nome_da_mae=$_POST['nome da mae'];

$inserir = "INSERT INTO Tabela (nome, email, Senha, Nome da mae) VALUES ('$nome','$email', '$Senha','$nome_da_mae')";
$resultado = mysqli_query($conn, $inserir);

if(mysqli_affected_rows($conn)!= 0){
    echo "<script type=\"text/javascript\">
             alert(\"usuario cadastrado com sucesso.\");
          </script>";
    header('location:login.php');
}else{
    echo "<script type=\"text/javascript\">
             alert(\"usuario nÃ£o foi cadastrado com sucesso.\");
          </script>";
     header('location:Cadastro.php');
}
        ?>
