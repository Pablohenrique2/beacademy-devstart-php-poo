<?php

declare(strict_types=1);
class Cursos
{
  private string $nome;
  private float $cargaHoraria;
  private string  $materia;
  private string $professor;


  public function getNome(): string
  {
    return $this->nome;
  }
  public function setNome(string $n): void
  {
    $this->nome = $n;
  }
  public function getCargaHoraria()
  {
    return $this->cargaHoraria;
  }
  public function setCargaHoraria(float $c)
  {
    $this->cargaHoraria = $c;
  }
  public function getMateria()
  {
    return $this->materia;
  }
  public function setMateria(string $m)
  {
    $this->materia = $m;
  }
}
