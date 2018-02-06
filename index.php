<?php
require "Imposto.php";
require "Orcamento.php";
require "ICCC.php";

$reforma = new Orcamento(3000);
$novoImposto = new ICCC();

echo $novoImposto->calcula($reforma);