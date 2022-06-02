<?php

declare(strict_types=1);

class Categoria
{

  public function __construct(

    private string $nome,
    private string $descricao

  ) {
  }


  public function getNome(): string
  {
    return $this->nome;
  }
  public function setNome(string $n): void
  {
    $this->nome = $n;
  }
  public function getDescricao(): string
  {
    return $this->descricao;
  }
  public function setDescricao(string $d): void
  {
    $this->descricao = $d;
  }
}
