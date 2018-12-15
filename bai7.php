<?php
    // Hàm khởi tạo
    // Cách 1
    class SinhVien
    {
        function SinhVien() {
            echo 'Lớp Sinh Viên vừa được khởi tạo';
            echo "<br/>";
        }
    }

    // khởi tạo lớp SinhVien
    $sinhvien = new SinhVien1();

    // Cách thư 2 Khai báo dưới dạng _constract
        class SinhVien1
    {
        function __construct() {
            echo 'Lớp Sinh Viên vừa được khởi tạo';
        }
    }

    // khởi tạo lớp SinhVien
    $sinhvien = new SinhVien1();

// HÀM KHỞI TẠO TRONG KẾ THỪA

    class A {

        function __construct() {
          echo 'Lớp A được khởi tạo';
        }
    }

    class B extends A {

      function __construct() {
        echo 'Lớp B được khởi tạo';
      }
    }

    $a = new B(); // Kết quả là Lớp B được khởi tạo

    // khi không có khởi tạo hàm construct trong lớp B thì lớp A sẽ được thực thi khi lớp B extend lớp A

    // Lớp A
    class A {

        function __construct() {
            echo 'Lớp A được khởi tạo';
        }
    }

    // Lớp B
    class B extends A {

    }

    // Khởi Tạo Lớp B
    $a = new B(); // Kết quả là Lớp A Chạy


    // Trong trường hợp khi lớp A không có hàm khwori tạo __construct thì lú này
    // câu lệnh thực thi ở lớp B khi có hàm __construct sẽ được hiển thị

    // Hàm hủy

    // Lớp A
    class A {

        function __construct() {
            echo 'Lớp A được khởi tạo <br/>';
        }

        function show()
        {
            echo 'Lớp A đang được sử dụng <br/>';
        }

        function __destruct() {
            echo 'Lớp A bị hủy  <br/>';
        }
    }

    // Chương trình
    $a = new A();
    $a->show();


 ?>
