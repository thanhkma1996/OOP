<?php
      // Static and final

//       class ClassName
// {
//     //khai báo thuộc tính tĩnh
//     visibility
//     static $propertyName;
//     //Khai báo phương thức tĩnh
//     visibility static function methodName()
//     {
//         //
//     }
// }
//
//
// class ConNguoi
// {
//   private static $name;
//
//   public static function setName($name)
//   {
//       //code
//   }
//
//   public static function getName()
//   {
//       //code
//   }
// }


// +Khi không khai báo static.
class ConNguoi1
{
    private $name = 'amonymouse';

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

//khởi tạo đối tượng con người
$chuBlog = new ConNguoi1();
//set name cho đối tượng
$chuBlog->setName('Vũ Thanh Tài');
//in ra name của đối tượng
echo $chuBlog->getName();
//kết quả: Vũ Thanh Tài
//khởi tạo đối tượng Con người
$nguoixem = new ConNguoi1();
//hiển thị ra tên người xem
echo $nguoixem->getName();
//Kết quả: amonymouse
// +Khi khai báo thuộc tính là static.
class ConNguoi2
{
    private static $name = 'amonymouse';

    public function setName($name)
    {
        self::$name = $name;
    }

    public function getName()
    {
        return self::$name;
    }
}

//khởi tạo đối tượng con người
$chuBlog = new ConNguoi2();
//set name cho đối tượng
$chuBlog->setName('Vũ Thanh Tài');
//in ra name của đối tượng
echo $chuBlog->getName();
//kết quả: Vũ Thanh Tài
//khởi tạo đối tượng Con người
$nguoixem = new ConNguoi2();
//hiển thị ra tên người xem
echo $nguoixem->getName();
//Kết quả: Vũ Thanh Tài


    // final

    class ConNguoi
{
    private $soChan = 2;

    final public function getSoChan()
    {
        return $this->soChan;
    }
}

//Sai vì không thể override lại final phương thức
class NguoiLon extends ConNguoi
{
    public function getSoChan()
    {

    }
}
//Fatal error: Cannot override final method ConNguoi::getSoChan()




 ?>
