<?php
    require "src/conexao-bd.php";
    require "src/Modelo/Produto.php";
    require "src/Repositorio/ProdutoRepositorio.php";

    $produtoRepository = new ProdutoRepositorio($pdo);
    $id = $_GET["id"];
    $produtoRepository->excluir($id);