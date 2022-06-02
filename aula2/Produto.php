<?php

declare(strict_types=1);
class Produto
{
  //atributos
  private string $nome;
  private float $preco;
  private readonly Categoria $categoria;

  public function __construct(string $novoNome, float $novoPreco, Categoria $categoria)
  {
    $this->nome = $novoNome;
    $this->preco = $novoPreco;
    $this->categoria = $categoria;
  }


  //metodos especiais
  public function getNome(): string
  {
    return $this->nome;
  }
  public function setNome(string $novoNome): void
  {
    $this->nome = $novoNome;
  }
  public function getpreco()
  {
    return $this->preco;
  }
  public function setPreco(float $novoPreco): void
  {
    if ($novoPreco < 0) {
      die('Valor invalido');
    }
    $this->preco = $novoPreco;
  }
}
