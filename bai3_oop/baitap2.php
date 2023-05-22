<?php
// tạo ra hàm bò hiển thị trẻ con bò bằng 2 tay và 2 chân
//tạo 1 class ConNguoi gồm các thuộc tính :hoten,diachi,namsinh,email,sdt
// tạo phương thức set cho các thuộc tính trên
// tạo phương thức tinhtuoi = năm hiện tại - năm sinh (có trả về)
// tạo phương thức hiển thị thông tin :hoten,diachi,tuoi,email,sdt
//tạo 1 class HocSinh từ class ConNguoi gồm các thuộc tính :diemToan,diemLy,diemHoa
// tạo phương thức set cho các thuộc tính trên
//tạo phương thức tính điểm tb = (Toán + lý+ hóa)/3
//tạo phương thức hiển thị thông tin sinh viên hiển thị ra các thông tin
// hoten,diachi,tuoi,email,sdt,điểm TB
//tạo 1 class GiangVien kế thừa từ class ConNguoi gồm các thuộc tính:luongCB,soGioDay
//// tạo phương thức set cho các thuộc tính trên
/// tạo phương thức tính tổng lương = luongCB *soGioDay
/// //tạo phương thức hiển thị thông tin giảng viên hiển thị ra các thông tin
//// hoten,diachi,tuoi,email,sdt,tổng lương
///



class conNguoi {
    public $hoTen;
    public $diaChi;
    public $namSinh;
    public $email;
    public $sdt;

public function setHoTen($hoTen)
{
   echo "ho va ten: ".$this->hoTen = $hoTen;
  
}
// public function setDiaChi($diaChi)
// {
//     $this->diaChi = $diaChi;
  
// } 
public function setNamSinh($namSinh)
{
    $this->namSinh = $namSinh;
  
} 
public function tinhTuoi(){
       
    echo  "tuoi la: ".(date('Y') -  $this->namSinh);
   }
// contructs cha
public function __construct($hoTen,$diaChi,$namSinh,$email,$sdt)
{
    $this->hoTen = $hoTen;
    $this->diaChi = $diaChi;
    $this->namSinh = $namSinh;
    $this->email = $email;
    $this->sdt = $sdt;
}
// public function hieThiThongTin(){
//     echo "ho ten la: ".$this->hoTen."<br>";
//     echo "dia chi la: ".$this->diaChi."<br>";
//     echo "tuoi la: ".$this->namSinh."<br>";
//     echo "email la: ".$this->email."<br>";
//     echo "so dien thoai la: ".$this->sdt."<br>";
//    }
}
class hocSinh extends conNguoi{
    public $diemToan;
    public $diemLy;
    public $diemHoa;
    
    public function __construct($hoTen,$diaChi,$namSinh,$email,$sdt,$diemToan,$diemLy,$diemHoa)
    {
        parent:: __construct($hoTen,$diaChi,$namSinh,$email,$sdt);
        $this->diemToan = $diemToan;
        $this->diemLy = $diemHoa;
        $this->diemHoa = $diemLy;
    }
    // public function setMaSV($diemToan){
    //     $this->diemToan = $diemToan;
    //   }
    //   public function setTenSV($diemHoa){
    //     $this->diemHoa = $diemHoa;
    //   }
    //   public function setNamSV($diemLy){
    //     $this->diemLy = $diemLy;
    //   }
    public function diemTrungBinh(){
       return ($this->diemToan + $this->diemHoa + $this->diemHoa)/3;
    }
    public function hienTHiThongTinSV(){
        
    }
}
class giangVien extends conNguoi {
    public $luongCB;
    public $soGioDay;
    public function __construct($luongCB,$soGioDay)
    {
        $this->luongCB = $luongCB;
        $this->soGioDay = $soGioDay;
    }
    public function tongLuong(){
        return $this->luongCB * $this->soGioDay;
    }


}
$HS = new hocSinh("DVD","thanh hoa",2002,"dinh@",0978772,8,4,5);


// $TT = new conNguoi();
// $TT->setHoTen("DVD");
// echo "<pre>";
// $TT->setNamSinh(2002);
// $TT->tinhTuoi();
// echo "<pre>";
// $HS = new hocSinh(4,5,6);
// $HS->setHoTen("lla");
// echo "<pre>";
// $TT->setNamSinh(2002);
// $TT->tinhTuoi();
// echo "<pre>";
// $HS->diemTrungBinh();
// echo "<pre>";
// $GV = new giangVien(5000,1200);

// $GV->setHoTen("CCC");
// echo "<pre>";
// $TT->setNamSinh(2002);
// $TT->tinhTuoi();
// echo "<pre>";
// $GV->tongLuong();

// $HS->diemTrungBinh();
// $GV = new giangVien();
// $GV->hieThiThongTin();

?>