<?php

require_once "bootstrap.php";

use Curso\Loja\Entidades\Produto;

//$produtos = [
    //['nome' => 'Tv', 'preco'=>2500],
   // ['nome' => 'Sound bar', 'preco'=>650],
  //  ['nome' => 'Suporte Tv', 'preco'=>125]
//];

//foreach($produtos as $produto) {
    //$dbProduto = new Produto();

    //$dbProduto->setNome($produto['nome']);
    //$dbProduto->setPreco($produto['preco']);

   // $entityManager->persist($dbProduto);
//}

//$entityManager->flush();

$produtoRepository = $entityManager
    ->getRepository('Curso\Loja\Entidades\Produto');

$produto = $produtoRepository->find(3);

$entityManager->remove($produto);
$entityManager->flush();

echo "{$produto->getId()}";