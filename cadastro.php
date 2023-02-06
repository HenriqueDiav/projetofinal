<?php

include("./header.php");
require('./conexao.php');

if (isset($_POST['salvar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];

    $query = "INSERT INTO `tarefas`(`nome`, `email`, `endereco`, `senha`) VALUES ('$nome','$email','$endereco','$senha')";

    $result = mysqli_query($conexao, $query);

    header("location: pagina.php");

}

?>

<div>
    <div class="row justify-content-center">
        <div class="col-6">
    <form action="cadastro.php" method="post">
        <div class="card-header">LOGIN
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="nome" placeholder="Nome">    
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email">    
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="endereco" placeholder="Endereço">    
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="senha" placeholder="Senha">    
        </div>
        <input type="submit" value="Salvar" name="salvar" class="btn btn-warning">
    </form>
    </div>
    </div>
</div>