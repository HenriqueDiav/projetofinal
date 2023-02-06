<?php
include("./header.php");
require("./conexao.php");
?>

<?php

if (isset($_POST['salvar'])) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $endereco = $_POST['endereco'];
  $senha = $_POST['senha'];

  $query = "INSERT INTO `tarefas`(`nome`, `email`, `endereco`, `senha`) VALUES ('$nome','$email','$endereco','$senha')";

  $result = mysqli_query($conexao, $query);

  header("location: ");

}

?>
<section id="home">
    <!-- carrosel -->
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img src="./hamburgurês.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="./cerveja.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./sorvete.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
</section>

<section id="historia">
    <div class="row justify-content-center">
        <div class="col-6">
            <h5 class="card-header text-warning bg-dark text-center">
                NOSSA HISTÓRIA
            </h5>
            <div class="card">
                <h5 class="card-body text-dark text-center">
                    The Burger Company has been offering quality burgers and other fast-food items since the late 1950s.
                    The
                    company was founded by brothers Joe and Jim Burger, who opened their first restaurant in their
                    hometown
                    of Chicago, Illinois. The Burger Company quickly grew in popularity due to its generous portions,
                    flavorful food, and affordability.

                    In the 1960s, the Burger Company began to expand its menu items and locations, eventually opening
                    over
                    200 restaurants across the United States. By the 1970s, the Burger Company had become a household
                    name,
                    with many people visiting their restaurants for a quick, delicious meal. As the company grew, it
                    began
                    to offer an ever-increasing variety of menu items, such as salads, sandwiches, and specialty drinks.

                    In the 1990s, the Burger Company began to focus on providing healthier options, such as leaner cuts
                    of
                    beef and vegetarian options. In the 2000s, the Burger Company began to offer food delivery services,
                    as
                    well as a loyalty program that rewards customers for their patronage. Over the years, the Burger
                    Company
                    has continued to evolve and grow, while staying true to its commitment to providing quality food and
                    excellent customer service. Today, the Burger Company is a well-known and beloved fast-food chain,
                    with
                    locations all over the
                </h5>
            </div>
</section>


<section id="cardapio">
    <div class="row justify-content-center">
        <div class="col-6">
            <h5 class="card-header text-warning bg-dark text-center"> CARDAPÍO
            </h5>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./cardapio.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

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
<section id="cadastro">
    <div>
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="cadastro.php" method="post">
                    <h5 class="card-header bg-dark text-white text-center">LOGIN
                    </h5>
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

</section>