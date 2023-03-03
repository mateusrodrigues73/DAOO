<?php

namespace models;

class Pessoa {
  private $nome, $idade, $peso, $altura;

  function __construct ($nome, $idade, $peso, $altura) {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->peso = $peso;
    $this->altura = $altura;
  }

  public function __get ($nome) {
    return $this->$nome;
  }

  public function __set ($nome, $valor) {
    $this->$nome = $valor;
  }
}
