<?php

include("./header.php");

$valoritem = 0;
$mostrar = 0;

?>
<div class="textotd">
    <div class="container text-white justify-content-center">
        <h1>Carrinho de Compras</h1>
        <hr>
        <ul class="list group mb-3">
            <li class="list-group-item bg-dark tx-white py-3">
                <div class="row g-3">
                    <div class="col-4 col-md-3 col lg-2">
                        <a href="">
                            <img src="./lanche1.png" alt="">
                        </a>
                    </div>
                    <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-top">
                        <h4>
                            <b>
                                <a href="" class="text-decoration-none text-warning">Hamburger Simples</a>
                            </b>
                        </h4>
                        <div class="w-75 p-3">
                            <h4>
                                <small>Pão, 1 hambúrguer artesanal de costela de 90g, queijo cheddar fatia, cebola
                                    picada, catchup e mostarda.</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0
                         col-xl-2 align-self-center mt-3">
                        <div class="input-group">
                            <button type="button" class="btn btn-outline-warning borderdark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                </svg>
                            </button>
                            <input type="text" class="form-control text-center bg-light borderdark" value="0">
                            <button type="button" class="btn btn-outline-warning borderdark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16" onclick="<?php $mostrar = $valoritem + 19.90 ?>">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </button>
                            <button type="button" class="btn btn-outline-danger borderdark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="text-left mt-3">
                            <small class="text-white"> Valor: <?php echo "$mostrar";?></small>
                           

                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item bg-dark tx-white py-3">
                <div class="row g-3">
                    <div class="col-4 col-md-3 col lg-2">
                        <a href="">
                            <img src="./lanche2.png" alt="">
                        </a>
                    </div>
                    <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-top">
                        <h4>
                            <b>
                                <a href="" class="text-decoration-none text-warning">Hamburger Duplo</a>
                            </b>
                        </h4>
                        <div class="w-75 p-3">
                            <h4>
                                <small>Pão, 2 hambúrguer artesanal de costela de 90g, queijo cheddar fatia, cebola
                                    picada, catchup e mostarda.</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0
                         col-xl-2 align-self-center mt-3">
                        <div class="input-group">
                            <button type="button" class="btn btn-outline-warning borderdark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                </svg>
                            </button>
                            <input type="text" class="form-control text-center bg-light borderdark" value="4">
                            <button type="button" class="btn btn-outline-warning borderdark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </button>
                            <button type="button" class="btn btn-outline-danger borderdark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="text-left mt-3">
                            <small class="text-white"> Valor: <?php $valor="19,90"; echo "$valor";?></small>
                           

                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item bg-dark tx-white py-3">
                <div class="row g-3">
                    <div class="col-4 col-md-3 col lg-2">
                        <a href="">
                            <img src="./lanche3.png" alt="">
                        </a>
                    </div>
                    <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-top">
                        <h4>
                            <b>
                                <a href="" class="text-decoration-none text-warning">Hamburger Bacon</a>
                            </b>
                        </h4>
                        <div class="w-75 p-3">
                            <h4>
                                <small>Pão, 2 hambúrgueres artesanais de costela de 90g cada, queijo cheddar fatia, bacon fatia e maionese da casa.</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0
                         col-xl-2 align-self-center mt-3">
                        <div class="input-group">
                            <button type="button" class="btn btn-outline-warning borderdark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                </svg>
                            </button>
                            <input type="text" class="form-control text-center bg-light borderdark" value="4">
                            <button type="button" class="btn btn-outline-warning borderdark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </button>
                            <button type="button" class="btn btn-outline-danger borderdark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="text-left mt-3">
                            <small class="text-white"> Valor: <?php $valor="19,90"; echo "$valor";?></small>
                           

                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>