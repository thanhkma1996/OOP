<?php
// Phân biệt This và self

// Khai báo class ConNguoi
class ConNguoi
{
    public function getClass()
    {
        return 'Đây là class ConNguoi';
    }

    public function echoClass()
    {
        echo $this->getClass();
    }
}

//Khai báo class NguoiLon
class NguoiLon extends ConNguoi
{
    public function getClass()
    {
        return 'Đây là class NguoiLon';
    }
}

//Khởi tạo class
$nguoilon = new NguoiLon();
//echoClass
$nguoilon->echoClass();

  // KHI THAY phương thức self thay cho $this+
//    Kết luận đầu tiên: Chúng ta có thể thấy là self hoàn toàn có thể gọi được phương thức bình thường.
// + Kết luận thứ hai: Dựa vào kết quả của 2 ví dụ thì chúng ta kết luận là self sẽ gọi đến đối tượng khai báo nó,
//  còn $this sẽ gọi đến đối tượng hiện tại.

 ?>
