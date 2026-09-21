<?php

class Quarto {
  public function __construct(
    public string $nome, 
    public string $tipo,
    private float $valorDiaria,
    public bool $disponivel)
  {}

  public function reservar(): void
  {
    $this->disponivel = false;
  }

  public function calcularHospedagem(int $qtd_dias): float
  {
    return $this->valorDiaria * $qtd_dias;
  }

  // setters
  public function setValorDiaria(float $valor) : void
  {
    $this->valorDiaria = $valor;
  }

  // getters
  public function getValorDiaria(): float
  {
    return $this->valorDiaria;
  }
}
