<?php
require "./vendor/autoload.php";

$method = new compute\compute();
$P = new compute\P();
$C = new compute\C();

echo $P->Formula_cal(5,2)."=";

echo $P->m_cal(5,2)."\n |||||";

echo $method->total_cal("n_cal",5,2)."=";

echo $C->n_cal(5,2);