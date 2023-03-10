<?php

include './autoLoad.php';

use models\Atleta;
use models\Medico;
use models\logs\Relatorio;

$a1 = new Atleta ("José", 32, 70, 1.75);
$a1->setImc($a1->calculo());
$a1->setClassificacao($a1->classificacao());
$a1->showImc();

$m1 = new Medico("Maria", 324234, "odontologia", 9250.00, 28);
$m1->mostrarSalario();
$m1->mostrarTempoContrato();

$r1 = new Relatorio();
$r1->add($a1);
$r1->add($m1);
$r1->imprime();
