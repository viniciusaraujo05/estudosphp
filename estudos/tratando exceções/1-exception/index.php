<?php

    use ItemVenda\ItemVenda;
    use Venda\Venda;

    require_once "Venda.php";
    require_once "ItemVenda.php";

    $camisa = new ItemVenda();
    $camisa->setDescricao("Camisa Polo");
    $camisa->setPreco(12.0);
    
    $Venda = new Venda();
    $Venda->adicionar(null);

    print  "Total da venda: " . $Venda->getTotal();

