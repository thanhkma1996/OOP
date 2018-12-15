<?php
    // mức truy cập private

    class Xe
    {
        private $loaixe;

        function getLoaixe()
        {
             return $this->loaixe;
        }

        function setLoaixe($loaixe)
        {
                $this->loaixe = $loaixe;
        }
    }

    // Khởi tạo một lớp đối tượng xe
    $xe = new Xe();

    // Gán giá trị cho thuộc tính loại xe
    $xe->setLoaixe('Wave S');

    // Lấy giá trị thuộc tính loại xe
    echo $xe->getLoaixe();  // kết quả xuất ra Wave S

      // ví dụ có tính kế thừa

      class Xe1
{
    private $loaixe1;

    var $tenxe1;

    function getLoaixe1()
    {
        return $this->loaixe1;
    }

    function setLoaixe1($loaixe1)
    {
        $this->loaixe1 = $loaixe1;
    }

    private function xoaLoaixe1()
    {
        echo 'Hàm xóa loại xe';
    }




}

class XeHonda extends Xe
{
    function hienThiThongTin()
    {
        // lệnh này đúng
        echo $this->tenxe;

        // lệnh này sai vì thuộc tính loaixe là
        // private trong lớp cha
        echo $this->loaixe;

        // lệnh này đúng
        $this->setLoaixe('Wave S');

        // lệnh này đúng
        echo $this->getLoaixe();

        /// Lệnh này sai vì hàm xoaLoaixe là
        // private trong lớp cha
        $this->xoaLoaixe();
    }
}

// -------------------
// Chương trình chính//
// -------------------

// Khởi Tạo mới lớp xe hon da
$xehonda = new XeHonda();

// Gọi hàm hienThiThongTin trong lớp XeHonda
// Các bạn kiểm tra trong hàm này để xem các
// lỗi mà tôi đã ghi chú
$xehonda->hienThiThongTin();


  // MỨC TRUY CẬP PROTECTED
class Xe
{
    protected $loaixe;
}

// Kế thừa từ lớp xe
class XeHonda extends Xe
{
    function hienThiThongTin()
    {
        // Lệnh này đúng vì loaixe đang ở
        // mức protected nên nó được kế thừa
        $this->loaixe = 'Wave S';
    }
    protected function suaChuaXe()
    {
        // Lệnh
    }
}

// ------------------//
// Chuong Trình Chính//
// ------------------//

$honda = new XeHonda();

// Lệnh này sai vì loaixe đang
// ở mức protected nên ở bên ngoài lớp
// không được truy xuất vào
$honda->loaixe = 'Wave Tàu';

// Lệnh này đúng
$honda->hienThiThongTin();

// Lệnh này sai vì: function suaChuaXe đang
// ở mức protected nên ko thể truy xuất
// từ ngoài lớp XeHonDa
$honda->suaChuaXe();


 ?>
