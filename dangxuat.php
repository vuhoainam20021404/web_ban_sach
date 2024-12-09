<?php
session_start(); // Khởi động phiên
$kh = isset($_SESSION["makh"]) ? $_SESSION["makh"] : '';
$nv = isset($_SESSION["manv"]) ? $_SESSION["manv"] : '';
$ad = isset($_SESSION["ma"]) ? $_SESSION["ma"] : '';
if($kh){
    header("Location: giaodienkh.php");
}
if($nv || $ad){
    header("Location: dangnhap.php");
}

session_destroy(); 
exit(); // Đảm bảo không có mã nào khác được thực thi sau khi điều hướng
?>
