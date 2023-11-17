<?php
$titulo_pagina = "Informações Usuário";
require_once "./template/header.php";
require_once "./template/navbar.php";
require_once "./template/sidebar.php";
require_once "./template/footer.php";
?>
<main class = "col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class = "d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
        <h1 class= "h2">Lista de Cadastro</h1>
    </div>
    
    <table class="table table-bordered mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">CEP</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>mark@mdo.com</td>
      <td>1412313112</td>
      <td>1711111</td>
      <td><span class="bi bi-pencil-square"></span><span class="ms-2 bi bi-trash"></span></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>Jacob@gmail.com</td>
      <td>123123131</td>
      <td>123123131</td>
      <td><span class="bi bi-pencil-square"></span><span class="ms-2 bi bi-trash"></span></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry the Bird</td>
      <td>Jordan</td>
      <td>jordan@outlook.com</td>
      <td>1414141414</td>
      <td>14121565</td>
      <td><span class="bi bi-pencil-square"></span><span class="ms-2 bi bi-trash"></span></td>
    </tr>
    
  </tbody>
</table>
</main>