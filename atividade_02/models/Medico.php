<?php

namespace models;

use models\interfaces\iFuncionario;

class Medico extends Pessoa implements iFuncionario {
	private $crm, $especialidade, $salario, $tempoDeContrato;

	public function __construct(string $nome, int $crm, string $especialidade, $salario, $tempoDeContrato) {
		$this->nome = $nome;
		$this->crm = $crm;
		$this->especialidade = $especialidade;
		$this->salario = $salario;
		$this->tempoDeContrato = $tempoDeContrato;
	}

	public function getCRM() {
		return $this->crm;
	}

	public function mostrarSalario() {
		echo "\n" . $this->nome . ", seu salario é de R$" . $this->salario . ".";
	}
  public function mostrarTempoContrato() {
		echo "\n" . $this->nome . ", seu tempo de contrato é: " . $this->tempoDeContrato . " meses.\n";
	}

	public function __toString() {
		return 	"\n=== Dados ddo médico ==="
			. "\nNome: $this->nome"
			. "\nEspecialidade: $this->especialidade"
			. "\nSalario: R$$this->salario"
			. "\nTempo de Contrato: $this->tempoDeContrato meses"
			. "\nCRM: $this->crm\n";
	}
}