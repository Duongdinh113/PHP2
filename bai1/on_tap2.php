<?php 
// hàm là gì
// hàm function

// hàm dùng để gom code có tính tái sử dụng cao
// hàm có 2 loại
// - có trả về // có return
// - khồn trả về // hông có return
$c = 7;
function KtraSoChan($n){ // tất cả những biến trong ngoặc gọi là tham số
    if($n % 2 == 0){
        echo "đây là số chẵn";
    }else{
        echo "đây là số lẻ";
    }

}
KtraSoChan($c);
echo "<pre>";
function KtraSoChan_coTrave($a){
  
        if($a % 2 == 0){
            return 1;
        }else{
            return 2;
        }
}
echo KtraSoChan_coTrave($c);
// xây dựng 1 hàng thông tin sinh viên gồm những tham số truyền vào : $hoten, $namsinh, $gioiTinh, $email, $diachi
// hiển thị thông tin
// tính tuổi = năm hiện tại - năm sinh (date('y'))
$hoTen = "duong van dinh";
$namSinh = 2002;
$gioiTinh = "nam";
$email = "dinhdvph29050@fpt.edu.vn";
$diaChi = "Thanh hóa";
echo "<pre>";
function thongTinSV($hoTen,$namSinh,$gioiTinh,$email,$diaChi){
    echo "ho ten :".$hoTen ."</br>";
    echo "nam sinh : ".(date('Y') - $namSinh)."</br>";
    echo "gioi tinh : ".$gioiTinh."</br>";
    echo "email : ".$email."</br>";
    echo "dia chi : ".$diaChi."</br>";
}

thongTinSV($hoTen,$namSinh,$gioiTinh,$email,$diaChi);
?>