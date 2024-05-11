<?php
include_once("conexao.php");
if(isset($_POST["submit"])){
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $aluno = isset($_POST['aluno']) ? 1 : 0;
  $data_nasc = $_POST["data_nascimento"];
  $confirma_senha = $_POST["confirmar_senha"];

  // Verifique se o e-mail já existe
  $checkEmail = mysqli_query($conexao, "SELECT * FROM usuario WHERE email='$email'");
  if(mysqli_num_rows($checkEmail) > 0){
    echo "<div class='alert'>
            <span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>×</span> 
            Este e-mail já está cadastrado.
          </div>";
  } else if ($senha != $confirma_senha){
    echo "<div class='alert'>
            <span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>×</span> 
            As senhas não conferem.
          </div>";
  } else {
    $result = mysqli_query($conexao, "INSERT INTO usuario (nome,email,aluno,data_nasc,senha) 
    VALUES ('$nome','$email','$aluno','$data_nasc','$senha')");
    header("Location: TelaLogin.php");
  }
}
?>





<!DOCTYPE html>
<html>
    <head>
        <title>Tela de Cadastro</title>
        <link rel="stylesheet" type="text/css" href="bonitocad.css">
        <link rel="stylesheet" type="text/css" href="erro.css">
    </head>-
    <body>
        <h2>Cadastro</h2>
        <form action="TelaCadastro.php" method="post">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br>

            <label for="data_nascimento">Data de Nascimento:</label><br>
            <input type="date" id="data_nascimento" name="data_nascimento" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha" required><br>

            <label for="confirmar_senha">Confirmar Senha:</label><br>
            <input type="password" id="confirmar_senha" name="confirmar_senha" required><br>

            <label for="aluno">É aluno da rede Faetec?</label><br>
            <input type="checkbox" id="sim" name="aluno" value="sim">
            <label for="sim">Sim</label><br>


            <input type="submit" name="submit" value="Cadastrar">
        </form>
    </body>
</html>
