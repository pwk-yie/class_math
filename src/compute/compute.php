<?php
namespace compute;

use compute_abstract\compute_abstract;

class P extends compute_abstract{
    
    public function m_cal($m,$n){
        if($m>=$n){
            return $m--*$this->m_cal($m,$n);
        } else {
            return 1;
        }
    }

    public function Formula_cal($m,$n){
        $method_str="(";

        if($m>$n){
            $method_str.="{$m}*";
            $m--;
            return $method_str.$this->Formula_cal($m,$n)."\n";
        } else {
            return "{$n})";
        }
    }

}

class C extends compute_abstract{

    public function m_cal($m,$n){
        if($m>=$n){
            return $m--*$this->m_cal($m,$n);
        } else {
            return 1;
        }
    }

    public function n_cal($m,$n){

        $cal = $this->m_cal($m,$n);
        
        for($i=$n-1;$i>=1;$i--){
            $n*=$i;
        }
        return $cal/$n;
    }


}

class compute extends compute_abstract{    

    public function m_cal($m,$n){

        if($m>=$n){
            return $m--*$this->m_cal($m,$n);
        } else {
            return 1;
        }
    }
    public function n_cal($m,$n){

        $cal = $this->m_cal($m,$n);
        
        for($i=$n-1;$i>=1;$i--){
            $n*=$i;
        }
        return $cal/$n;
    }

    public function total_cal($method,$m,$n){
        static $method_str ="(";
        if($method=="m_cal"){
            if($m>$n){
                $method_str.="{$m}*";
                $m--;
                return $method_str.$this->total_cal("m_cal",$m,$n)."\n";
            } else {
                return "{$n})";
            }

        } else if($method=="n_cal"){
            $method_str .= $this->total_cal("m_cal",$m,$n);
            $method_str .= "/";
        
            for($i=$n;$i>=1;$i--){
                if($i==1){
                    return $method_str .= "1";
                }
                $method_str .= "{$i}*";
            }
        }
    }


}