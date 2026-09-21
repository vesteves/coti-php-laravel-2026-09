<?php

require_once 'Quarto.php';

// Pousada Parnaioca

$quarto1 = new Quarto(
  "Quarto 1",
  "Solteiro",
  380,
  true
); // instancia de uma classe

$quarto2 = new Quarto(
  "Quarto 2",
  "Casal",
  420,
  true
); // instancia de uma classe

$quarto3 = new Quarto(
  "Quarto 3",
  "Casal",
  600,
  false
); // instancia de uma classe

// $quarto1->reservar();

// var_dump($quarto1->disponivel);

// var_dump($quarto2->disponivel);

// echo $quarto1->calcularHospedagem(3) . PHP_EOL;

// echo $quarto1->valorDiaria . PHP_EOL;

// var_dump($quarto3);
// $quarto3->reservar();
// var_dump($quarto3->disponivel);

// var_dump($quarto3);

// echo $quarto3->calcularHospedagem(3) . PHP_EOL;

$quarto3->setValorDiaria(200);

echo $quarto3->getValorDiaria() . PHP_EOL;