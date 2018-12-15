<?php
    //Tính kế thừa

      class DongVat
    {
      // Thuộc Tính
      var $mat = '';
      var $mui = '';
      var $mieng = '';
      var $chan = '';
      var $gioitinh = '';

      // Hàm, phương thức
      function an(){
          // lệnh
      }

      function ngu(){
          // lệnh
      }

      function chay(){
          // lệnh
      }

      function lahet(){
          // lệnh
      }
    }

    // Lớp Con


      // Tất cả các hàm, phương thức đều kế thừa từ cha
      // nên không cần viết lại


      // class DongVat1
      // {
      // // Thuộc tính
      //   var $mat = '';
      //   var $mui = '';
      //
      //   // Phương Thức
      //   function an1()
      //   {
      //       echo 'Dong Vat Dang An';
      //   }
      //
      //   // Lớp Con Trâu
      //     class ConTrau1 extends DongVat1
      //     {
      //     function gioi_thieu1()
      //     {
      //         $this->mat = 'Đây là cái mặt';
      //         $this->mui = 'Đây là cái mũi';
      //         parent::an1(); // xuất ra chuỗi "Động Vật Đang Ăn"
      //     }
      // }

      // Lớp Động Vật
class DongVat1
{
    // Thuộc tính
    var $mat = '';
    var $mui = '';

    // Phương Thức
    function an()
    {
        echo 'Dong Vat Dang An';
    }
}

      // Lớp Con Trâu
      class ConTrau1 extends DongVat1
      {
          function gioi_thieu()
          {
              $this->mat = 'Đây là cái mặt';
              $this->mui = 'Đây là cái mũi';
              parent::an(); // xuất ra chuỗi "Động Vật Đang Ăn"
          }
      }

      // Chương Trình
      $contrau = new ConTrau1();

      // Gọi đến hàm gioi_thieu trong lớp Con Trâu
      // nên xuất ra màn hình chuỗi "Động Vật Đang Ăn"
      $contrau->gioi_thieu();

      // Trong hàm giới thiệu có gán giá trị cho 2
      // thuộc tính mắt và mũi, giờ ta xuất ra màn hình
      // xem giá trị nó là gì

        echo $contrau->mat;
  echo $contrau->mui;



 ?>
