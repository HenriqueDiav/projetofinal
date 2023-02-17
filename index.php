<?php
require("./conexao.php");

include("./header.php");

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
    <div class="row justify-content-center">
        <div class="col-12">
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                        <img src="./hamburger's.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="./cervejav2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./Sorvetes.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
</section>
<section id="historia">
    <div class="meio">
        <table>
            <tr>
                <td>
                    <div class="mula">
                        <img src="./meio2.png" alt="imagem do lado da história">
                    </div>
                </td>
                <td>
                    The Burger Company has been offering quality burgers and other fast-food items since the late 1950s.
                    The
                    company was founded by brothers Joe and Jim Burger, who opened their first restaurant in their
                    hometown
                    of
                    Chicago, Illinois. The Burger Company quickly grew in popularity due to its generous portions,
                    flavorful
                    food, and affordability. In the 1960s, the Burger Company began to expand its menu items and
                    locations,
                    eventually opening over 200 restaurants across the United States. By the 1970s, the Burger Company
                    had
                    become a household name, with many people visiting their restaurants for a quick, delicious meal. As
                    the
                    company grew, it began to offer an ever-increasing variety of menu items, such as salads,
                    sandwiches,
                    and
                    specialty drinks. In the 1990s, the Burger Company began to focus on providing healthier options,
                    such
                    as
                    leaner cuts of beef and vegetarian options. In the 2000s, the Burger Company began to offer food
                    delivery
                    services, as well as a loyalty program that rewards customers for their patronage. Over the years,
                    the
                    Burger Company has continued to evolve and grow, while staying true to its commitment to providing
                    quality
                    food and excellent customer service. Today, the Burger Company is a well-known and beloved fast-food
                    chain,
                    with locations all over the
                </td>
            </tr>
        </table>
    </div>
</section>

<section id="ifood">
    <table class="cardapioimagens">
        <td>
            <div class="ifood">
                <div class="card text-white bg-dark" style="width: 24rem;">
                    <a href="https://www.ifood.com.br/inicio" target="_blank"><img src="./promoções.png" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Veja nossas promoções</h5>
                    </div>
                </div>
            </div>
        </td>
        <td>
            <div class="ifoodpromo1">
                <div class="card text-white bg-dark" style="width: 24rem;">
                    <a href="https://www.ifood.com.br/inicio" target="_blank"><img src="./ifood.png" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Peça pelo ifood</h5>
                    </div>
                </div>
            </div>
        </td>
        <td>
            <div class="ifoodpromo2">
                <div class="card text-white bg-dark" style="width: 24rem;">
                    <a href="https://www.ifood.com.br/inicio" target="_blank"><img src="./card.png" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Peça pelo ifood</h5>
                    </div>
                </div>
            </div>
        </td>
    </table>

</section>

<section id="cardapio">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="textotd">
                <h5 class="card-header bg-dark text-white text-center">CARDÁPIO
                </h5>
            </div>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./cardapio4.png" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Fale Conosco</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Instagram <i class="fa-brands fa-instagram"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Twitter <i class="fa-brands fa-twitter"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://youtu.be/dQw4w9WgXcQ" target="_blank>Youtube <i class="fa-brands fa-youtube"></i></a>
            </li>
        </ul>
    </div>
</nav>