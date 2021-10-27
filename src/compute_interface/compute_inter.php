<?php
namespace compute_interface;

interface compute_inter{
    // 計算M
    public function m_cal($m,$n);
    // 計算N
    public function n_cal($m,$n);
    // 寫上運算式
    public function total_cal($method,$m,$n);
}