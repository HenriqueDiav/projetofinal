<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>CRUD</title>
    <style>
    body {
        background-color: black;
    }
    .preco{
        color: white;
        background-color: grey;
    }

    .textotd {
        font-family: 'Roboto', sans-serif;
        text-align: justify;
    }

    .textonav {
        font-family: 'Roboto', sans-serif;
    }
    .botao {
        text-decoration: none;
        font-size: 20px;
        font-weight: bold;
        padding: 10px;
        font-family: 'Roboto', sans-serif;
    }

    input {
        text-align: center;
        width: 50px;

    }

    .texto {
        color: white;
        text-align: center;
        font-size: 22px;
        font-weight: 500px;
        border-radius: 20px;
    }

    .meio {
        padding: 5em;
        text-align: center;
        font-size: 22px;
        font-weight: 500px;
        border-radius: 20px;
        color: white;
        font-family: 'League Spartan', sans-serif;
    }

    .mula img {

        border-radius: 25px;
    }

    .cardapioimagens {
        padding: 5em;
        text-align: center;
        margin-left: 250px;
    }

    .cardapioimagens {
        font-family: 'League Spartan', sans-serif;
    }

    .ifood {
        padding: 2em;
        text-align: center;
    }

    .ifoodpromo1 {
        padding: 2em;
        text-align: center;
    }

    .ifoodpromo2 {
        padding: 2em;
        text-align: center;
    }

    .cardapio {
        padding: 10em;
    }
    </style>
</head>

<body>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <div class="textonav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link btn btn-warning" href="./index.php">Home <i
                                class="fa-sharp fa-solid fa-burger"></i><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#historia">História</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#cardapio">Cardápio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./delivery.php">Delivery</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            Login/Cadastro
                        </a>
                        <div class="dropdown-menu">
                            <table>
                                <div class="modaltitulo">
                                    <button type="button" class="btn btn-black" data-toggle="modal"
                                        data-target="#modalExemplo">
                                        Login
                                    </button>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-black" data-toggle="modal"
                                        data-target="#modalexemplo">
                                        Cadastro
                                    </button>
                                </div>
                        </div>
                        </table>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Faça o Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulario Modal Login -->
                    <form class="login">
                        <div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <form action="cadastro.php" method="post">
                                        <h5 class="card-header bg-dark text-white text-center">LOGIN
                                        </h5>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="senha"
                                                placeholder="Senha">
                                        </div>
                                        <input type="submit" value="Salvar" name="salvar" class="btn btn-warning">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Formulario Modal Login -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- MODAL Login -->
    <div class="modal fade" id="modalexemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Se Cadastre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
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
                <div class="modal-body">
                    <!-- Formulario Modal Cadastro-->
                    <form class="cadastro">
                        <div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <form action="cadastro.php" method="post">
                                        <h5 class="card-header bg-dark text-white text-center">CADASTRO
                                        </h5>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nome" placeholder="Nome">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="endereco"
                                                placeholder="Endereço">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="senha"
                                                placeholder="Senha">
                                        </div>
                                        <input type="submit" value="Cadastrar" name="salvar" class="btn btn-warning">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Formulario Modal Cadastro-->
                </div>
            </div>
        </div>
    </div>
    </td>
    <!-- MODAL Cadastro -->