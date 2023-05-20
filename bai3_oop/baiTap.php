<?php
class giangVien{
 public $maGV;
 public $tenGV;
 public $namBatDau;
 public $luongCoBan;
 public $soGioDay;
 
    public function __construct($maGV,$tenGV,$namBatDau,$luongCoBan,$soGioDay){
        $this->maGV =$maGV;
        $this->tenGV =$tenGV;
        $this->namBatDau =$namBatDau;
        $this->luongCoBan =$luongCoBan;
        $this->soGioDay =$soGioDay;

    }
    public function tinhThamNien(){
        return (date('Y') - $this->namBatDau);
    }

    public function tongLuong(){
        return $this->luongCoBan * $this->soGioDay;
    }
    public function xepLoai(){
        if($this->tongLuong() >= 5000){
           return "đạt";
        }else{
            return "không đạt";
        }
       }
    public function hienThiThongTinGV(){
        echo $this->maGV.",".$this->tenGV.",".$this->tinhThamNien().",".$this->tongLuong().",".$this->xepLoai();
       
    }
  
}
$GV1 = new giangVien("GV11123","NVA","2021","5","1200");
$GV2 = new giangVien("GV13123","NVA","2021","3","1200");
$GV1->hienThiThongTinGV();
echo "<pre>";
$GV2->hienThiThongTinGV();
?>
