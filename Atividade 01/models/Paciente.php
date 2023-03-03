<?php

namespace models;

class Paciente extends Pessoa {
  private $imc;
	private $classificacao;

	public function __construct ($nome, $idade, $altura, $peso) {
		parent::__construct($nome, $idade, $altura,$peso);
	}

  public function showImc () {
    echo $this->nome . ', seu Imc é: ' . $this->imc . ', sua classificação é: ' . $this->classificacao . '.';
  }

  public function setImc ($imc) {
    $this->imc = $imc;
  }

  public function setClassificacao ($classificacao) {
    $this->classificacao = $classificacao;
  }
}
