<?php
$titulo_pagina = "Cadastro de Usuario";
require_once "./template/header.php";
require_once "./template/navbar.php";
require_once "./template/sidebar.php";
require_once "./template/footer.php";
?>
<main class = "col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class = "d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
        <h1 class= "h2">Cadastrar-Se</h1>
    </div>

    <form action ="/admin/ajax/post.php" method="post">
         <div class="row">
            <div class = "col">
                <input id = "nome" name = "nome" type = "text" class="form-control" placeholder="Nome" aria-label = "Nome">
            </div>
            <div class = "col">
                <input id = "sobrenome" name = "sobrenome" type = "text"  class = "form-control" placeholder = "Sobrenome" aria-label = "Sobrenome">
            </div>
        </div>
         <div class = "row mt-2">
            <div class = "col-md-3">
                <input id = "telefone" name = "telefone"type = "text" class="form-control" placeholder="Telefone" aria-label = "Telefone">
         </div>
            <div class = "col-md-3">
                <input id = "email" name = "email" type = "text" class = "form-control" placeholder = "E-mail" aria-label = "E-mail">
            </div>
            <div class = "col-md-3">
                <input id = "Cep" name = "cep" type = "text" class="form-control" placeholder="Cep" aria-label = "Cep">
            </div>
        </div>
            <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
    </form>
</main>