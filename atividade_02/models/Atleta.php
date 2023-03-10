<?php

namespace models;

class Atleta extends Pessoa {
  use traits\Imc;

	private $classificacao;

	public function __construct ($nome, $idade, $altura, $peso) {
		parent::__construct($nome, $idade, $altura,$peso);
	}

  public function showImc () {
    echo $this->nome . ", seu Imc é: " . $this->imc . ", sua classificação é: " . $this->classificacao . ".\n";
    if ($this->isNormal()) {
      echo "Condição normal.\n";
    } else {
      echo "Condição anormal.\n";
    }
  }

  public function setClassificacao ($classificacao) {
    $this->classificacao = $classificacao;
  }

  public function __toString() {
		return 	"\n=== Dados do atleta ==="
			. "\nNome: $this->nome"
			. "\idade: $this->idade"
			. "\nPeso: $this->peso"
			. "\nAltura: $this->altura"
			. "\nIMC: " . number_format($this->imc, 2)
      . "\nClassificação: $this->classificacao\n";
	}
}
