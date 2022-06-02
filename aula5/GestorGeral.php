<?php

declare(strict_types=1);
class GestorGeral extends Gestor
{
  private float $bonificacao;

  public function getBonificacao(): float
  {
    return $this->bonificacao;
  }
  public function setBonificacao(float $bonificacao): void
  {
    $this->bonificacao = $bonificacao;
  }
}
