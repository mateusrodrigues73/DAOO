<?php

include './autoLoad.php';

use models\Imc;
use models\Paciente;

$p1 = new Paciente ("José", 32, 70, 1.75);
$p1->setImc(Imc::calculo($p1));
$p1->setClassificacao( Imc::classificacao($p1));
$p1->showImc();
