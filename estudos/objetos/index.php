<?php

    include_once("Expiravel.php");
    include_once("Produto.php");
    include_once("Assinatura.php");

    $assinatura = new Assinatura();

    $assinatura->setCodigo(123);
    $assinatura->setNome("Assinatura MVP");
    $assinatura->setPreco(69.99);
    $assinatura->setDataExpiracao("2018-08-20");

    echo "Dias restantes da assinatura: {$Assinatura->getTempoRestante()->days} ";