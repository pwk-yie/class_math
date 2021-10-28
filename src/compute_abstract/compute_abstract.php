<?php
namespace compute_abstract;

use compute_interface\compute_inter;

abstract class compute_abstract implements compute_inter{
    public $m;
    public $n;
    public $final;

    public function m_cal($m,$n){
        $this->$m=$m;
    }
    public function n_cal($m,$n){
        $this->$n=$n;
    }
    public function Formula_cal($m,$n){

    }
    public function total_cal($method,$m,$n){
        
    }


}