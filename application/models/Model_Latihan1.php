<?php
class Model_Latihan1 extends CI_model
{
    //membuat variable untuk menampung nilai
    public $nilai1, $nilai2, $hasil;
    //metod penjumlahan
    public function jumlah($n1 = null, $n2 = null)
    {
        $this->nilai1 = $nil1;
        $this->nilai2 = $nil2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
       }
}