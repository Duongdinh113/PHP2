<?php
//điều chỉnh kết nối db ở đây
//đây là nơi đặt những biến chung của dự án
const DBNAME = "web18105";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";
const BASE_URL ="http://localhost/PHP2/base-mvc/";

function redirect($key,$msg,$router){
    $_SESSION[$key] = $msg;
    switch($key){
        case  'success' :
            unset($_SESSION['errors']);
            break;
        case  'errors' :
            unset($_SESSION['success']);
            break;
    }
    header('location:'.BASE_URL.$router."?msg=".$key);die;
}   