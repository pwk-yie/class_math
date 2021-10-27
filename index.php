<?php
require "./vendor/autoload.php";

$method = new compute\compute();

echo $method->total_cal("m_cal",5,2)."=";

echo $method->m_cal(5,2)."\n |||||";

echo $method->total_cal("n_cal",5,2)."=";

echo $method->n_cal(5,2);