<?php
include_once "nsp1.php";
include_once "nsp2.php";
// khởi tạo sinh viên
$sv = new NSP1\SinhVien("ten",2003);  // của file nsp1
$sv->hienThiThongTinSV();
$sv2 = new NSP2\SinhVien("dương",19); // của file nsp2
//namespace sẽ giúp chúng ta phân biệt được các class ở các file nếu nhưng chúng trùng nhau
// namespace luôn luôn đặt ở trên đầu file PHP
// namespace thì không bao giờ được trùng nhau