<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script src="https://kit.fontawesome.com/1e592b5726.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <!-- <style type="text/css">
    a {
        text-decoration: none;
        font-size: 20px;
        font-weight: bold;
        padding: 10px;
    }

    input {
        text-align: center;
        width: 50px;

    }
    </style> -->

    <script>
    function incrementaValor1(valorMaximo) {
        var value = parseInt(document.getElementById('resultado1').value, 10);
        value = isNaN(value) ? 0 : value;
        if (value >= valorMaximo) {
            value = valorMaximo;
        } else {
            value++;
        }
        document.getElementById('resultado1').value = value;
    }

    function decrementaValor1(valorMinimo) {
        var value = parseInt(document.getElementById('resultado1').value, 10);
        value = isNaN(value) ? 0 : value;
        if (value <= valorMinimo) {
            value = 0;
        } else {
            value--;
        }
        document.getElementById('resultado1').value = value;
    }

    function incrementaValor2(valorMaximo) {
        var value = parseInt(document.getElementById('resultado2').value, 10);
        value = isNaN(value) ? 0 : value;
        if (value >= valorMaximo) {
            value = valorMaximo;
        } else {
            value++;
        }
        document.getElementById('resultado2').value = value;
    }

    function decrementaValor2(valorMinimo) {
        var value = parseInt(document.getElementById('resultado2').value, 10);
        value = isNaN(value) ? 0 : value;
        if (value <= valorMinimo) {
            value = 0;
        } else {
            value--;
        }
        document.getElementById('resultado2').value = value;
    }
    </script>
</head>

<?php

include("./header.php");

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
                            <img src="./lanche1.png" class="rounded" alt="">
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
                            <button type="button" class="btn btn-outline-warning borderdark btn-sm"
                                onclick="decrementaValor1(0); return false;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                </svg>
                            </button>
                            <input name="resultado1" id="resultado1" value="0">
                            <button type="button" class="btn btn-outline-warning borderdark btn-sm"
                                onclick="incrementaValor1(10);return false;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16" onClick=calc()>
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </button>
                        </div>
                        <div class="text-left mt-3">
                            <small class="text-white"></small>


                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item bg-dark tx-white py-3">
                <div class="row g-3">
                    <div class="col-4 col-md-3 col lg-2">
                        <a href="">
                            <img src="./lanche2.png" class="rounded" alt="">
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
                            <button type="button" class="btn btn-outline-warning borderdark btn-sm"
                                onclick="decrementaValor2(0); return false;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                </svg>
                            </button>
                            <input name="resultado2" id="resultado2" value="0">
                            <button type="button" class="btn btn-outline-warning borderdark btn-sm"
                                onclick="incrementaValor2(10);return false;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16" onClick=calc()>
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </button>
                        </div>
                        <div class="text-left mt-3">
                            <small class="text-white"></small>


                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item bg-dark tx-white py-3">
                <div class="row g-3">
                    <div class="col-4 col-md-3 col lg-2">
                        <a href="">
                            <img src="./lanche4.png" class="rounded" alt="">
                        </a>
                    </div>
                    <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-top">
                        <h4>
                            <b>
                                <a href="" class="text-decoration-none text-warning">Hamburger Cheddar</a>
                            </b>
                        </h4>
                        <div class="w-75 p-3">
                            <h4>
                                <small>Pão, 2 hambúrgueres artesanais de costela de 90g cada, 4 fatias queijo cheddar ,
                                    bacon fatia e maionese da casa.</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0
                         col-xl-2 align-self-center mt-3">
                        <div class="input-group">
                            <button type="button" class="btn btn-outline-warning borderdark btn-sm"
                                onclick="decrementaValor(0); return false;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                </svg>
                            </button>
                            <input name="resultado" id="resultado" value="0">
                            <button type="button" class="btn btn-outline-warning borderdark btn-sm"
                                onclick="incrementaValor(10);return false;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16" onClick=calc()>
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </button>
                        </div>
                        <div class="text-left mt-3">
                            <small class="text-white"></small>


                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item bg-dark tx-white py-3">
                <div class="row g-3">
                    <div class="col-4 col-md-3 col lg-2">
                        <a href="">
                            <img src="./lanche5.png" class="rounded" alt="">
                        </a>
                    </div>
                    <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-top">
                        <h4>
                            <b>
                                <a href="" class="text-decoration-none text-warning">Hamburger Frango</a>
                            </b>
                        </h4>
                        <div class="w-75 p-3">
                            <h4>
                                <small>Frango empanado, muçarela derretida, cream cheese, alho crocante, cebola roxa, tomate e alface.</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0
                         col-xl-2 align-self-center mt-3">
                        <div class="input-group">
                            <button type="button" class="btn btn-outline-warning borderdark btn-sm"
                                onclick="decrementaValor(0); return false;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                </svg>
                            </button>
                            <input name="resultado" id="resultado" value="0">
                            <button type="button" class="btn btn-outline-warning borderdark btn-sm"
                                onclick="incrementaValor(10);return false;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16" onClick=calc()>
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </button>
                        </div>
                        <div class="text-left mt-3">
                            <small class="text-white"></small>


                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item bg-dark tx-white py-3">
                <div class="row g-3">
                    <div class="col-4 col-md-3 col lg-2">
                        <a href="">
                            <img src="./lanche3.png" class="rounded" alt="">
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
                                <small>Pão, 2 hambúrgueres artesanais de costela de 90g cada, queijo cheddar fatia,
                                    bacon fatia e maionese da casa.</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0
                         col-xl-2 align-self-center mt-3">
                        <div class="input-group">
                            <button type="button" class="btn btn-outline-warning borderdark btn-sm"
                                onclick="decrementaValor(0); return false;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                </svg>
                            </button>
                            <input name="resultado" id="resultado" value="0">
                            <button type="button" class="btn btn-outline-warning borderdark btn-sm"
                                onclick="incrementaValor(10);return false;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16" onClick=calc()>
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </button>
                        </div>
                        <div class="text-left mt-3">
                            <small class="text-white"></small>


                        </div>
                    </div>
                </div>
            </li>

            <div class="textright bg-dark">
                <button class="btn float-right btn-warning">Fechar Compra</button>
                <h4 class="text-white bg-dark mb-3">Valor Total: <input name="preco" id="resultado1" value="0"></h4>
            </div>
            </li>
        </ul>
    </div>
</div>