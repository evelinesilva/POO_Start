<?php
  require 'Cliente.php';
  require 'CartaoDeCredito.php';
  require 'Agencia.php';
  require 'Conta.php';

  $c1 = new Cliente();
  $c1->nome = "Maria";
  $c1->codigo = 1010;

  echo "$c1->nome" . PHP_EOL;

  $cdc1 = new CartaoDeCredito();
  $cdc1->numero = 111;
  $cdc1->dataDeValidade = "01/01/2020";

  echo "$cdc1->dataDeValidade" . PHP_EOL;

  $ag1 = new Agencia();
  $ag1->numero = 321;

  echo "$ag1->numero" . PHP_EOL;

  $cc1 = new Conta();
  $cc1->numero = 1;
  $cc1->saldo = 100;
  $cc1->limite = 50;

  echo "$cc1->saldo" . PHP_EOL;




 ?>
