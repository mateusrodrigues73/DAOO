<?php

namespace models;

class Imc {
  public static function calculo (Paciente $paciente) {
    return $paciente->peso / ($paciente->altura * $paciente->altura);
  }

  public static function classificacao (Paciente $paciente) {
    $imc = Imc::calculo($paciente);
    if ($imc < 18.5) {
      return 'Abaixo do peso';
    } if ($imc < 24.9) {
      return 'Saudável';
    } if ($imc < 29.9) {
      return 'Sobrepeso';
    } else {
      return 'Obesidade';
    }
  }
}
