<?php

namespace models\traits;

trait Imc {
  private $imc;

  public function calculo () {
    return $this->peso / ($this->altura * $this->altura);
  }

  public function classificacao () {
    $imc = $this->calculo();
    if ($imc < 18.5) {
      return 'Abaixo do peso';
    } else if ($imc < 24.9) {
      return 'Saudável';
    } else if ($imc < 29.9) {
      return 'Sobrepeso';
    } else {
      return 'Obesidade';
    }
  }

  public function isNormal () {
    if ($this->idade >= 19 && $this->idade <= 24 && $this->imc >= 19 && $this->imc <= 24) {
      return true;
    } else if ($this->idade >= 25 && $this->idade <= 34 && $this->imc >= 20 && $this->imc <= 25) {
      return true;
    } else if ($this->idade >= 35 && $this->idade <= 44 && $this->imc >= 21 && $this->imc <= 26) {
      return true;
    } else if ($this->idade >= 45 && $this->idade <= 54 && $this->imc >= 22 && $this->imc <= 27) {
      return true;
    } else if ($this->idade >= 55 && $this->idade <= 64 && $this->imc >= 23 && $this->imc <= 28) {
      return true;
    } else if ($this->idade >= 65 && $this->imc >= 24 && $this->imc <= 29) {
      return true;
    } else {
      return false;
    }
  }

  public function setImc ($imc) {
    $this->imc = $imc;
  }
}
