<?php

include 'bai9.php';

$connguoi = new ConNguoi\ConNguoi(); // gọi lớp con nguoi trong bai 9

echo $connguoi->getName();
//kết quả: Con Người

//khai báo hàm __autoload
function __autoload($test)
{
    //kiểm tra xem file tồn tại không
    if(file_exists($test . '.php')){
        //Nếu tồn tại thì nhúng file vào.
        include_once $test . '.php';
    }
}
//Khởi tạo 2 class
$nguoilon = new NguoiLon();
//Kết Quả: Class NguoiLon
$trecon = new TreCon();
//Kết Quả: Class TreCon
