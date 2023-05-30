<?php
namespace NSP1;
class SinhVien {
    public $ten;
    public $namSinh;
    public function __construct($ten,$namSinh) {
        $this->ten = $ten;
        $this->namSinh = $namSinh;
    }
    public function hienThiThongTinSV() {
        echo "Tên".$this->ten."</br>";
        echo "Tuổi".$this->namSinh."</br>";
    }
}