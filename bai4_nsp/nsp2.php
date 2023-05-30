<?php
namespace NSP2;
class SinhVien {
    public $ten;
    public $tuoi;
    public function __construct($ten,$tuoi){
        $this->ten = $ten;
        $this->tuoi = $tuoi;
    }
    public function hienThiThongTinSV() {
        echo "Tên :". $this->ten."</br>";
        echo "Tuổi: ".$this->tuoi."</br>";
    }

}