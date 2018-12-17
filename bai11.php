<?php
      // gọi nhiều phương thức method
      class ConNguoi
{
    private $name;

    public function setName($name = 'Con Nguoi')
    {
        $this->name = $name;
        //trả về đối tượng hiện tại
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }
}

//Khởi tạo class
$connguoi = new ConNguoi();

//gọi nhiều phương thức trên một dòng
echo $connguoi->setName('Vũ Thanh Tài')->getName();
//Kết quả: Vũ Thanh Tài



 ?>
