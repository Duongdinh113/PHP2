<?php
include_once "bai1/GiangVien.php";
include_once "bai2/GiangVien.php";
use bai1\GiangVien as b1GV; //đổi tên namespace nếu use bị trùng
use bai2\GiangVien as b2GV;
$gvbai1 = new b1GV();
$gvbai2 = new b2GV();