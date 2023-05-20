<?php 
// xây dựng 1 class hay gọi là 1 khuân mẫu cho nhiều đối tượng sinh viên
    class SinhVien {
      //  khai báo thuộc tình tức là khai báo biến
      public $tenSV;
      public $maSV;
      public $namSinh;
      
      // tạo ra 1 phương thức set giá trị
      // Hàm khởi tạo (1 dạng magic function)
      public function __construct($maSV,$tenSV,$namSinh)
      {
        $this->maSV = $maSV;
        $this->tenSV = $tenSV;
        $this->namSinh = $namSinh;
      }
      // public function setMaSV($maSV){
      //   $this->maSV = $maSV;
      // }
      // public function setTenSV($tenSV){
      //   $this->tenSV = $tenSV;
      // }
      // public function setNamSV($namSinh){
      //   $this->tenSV = $namSinh;
      // }
      // khai báo phương thức tức là khai báo hàm
      public function tinhTuoi(){
       
        return  (date('Y') -  $this->namSinh);
       }
      public function hienThiThongTinSV(){
       echo $this->maSV."-".$this->tenSV."-".$this->namSinh."-".$this->tinhTuoi(); 
      }  
     
    }
    // khởi tạo đối tượng-> tạo ra sinh viên
    $sv1 = new SinhVien("ph1111","NVA","2003");
    
    // $sv1->setMaSV("ph12345");
    
    $sv1->hienThiThongTinSV();
    
    // tạo 1 tính tuổi có trả về = năm hiện tại - năm sinh đấy  hiển thị thông tin tuổi sinh viên
?>