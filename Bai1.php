<?php



class DongVat
{
    // Các phương thức
    function an($thuc_an)
    {
        echo 'Hôm Nay Ăn Món ' . $thuc_an;
    }
}

    // Khởi tạo lớp động vật mới
    $conheo = new DongVat();

    // Gọi đến hàm ăn
    // kết quả là "Hôm Nay Ăn Món Cám"
    $conheo->an('Cám');


    class DongVat1 {
        var $hello = 'Xin chào các bạn, Tôi đang ăn nhé';
        // Các phương thức

        // hàm (hành động) ăn
        function an1()
        {
            echo $this->hello;
        }
    }

    // Khởi tạo lớp động vật mới
    $conheo = new DongVat1();

    // Gọi đến hàm ăn
    // kết quả "Xin chào các bạn, Tôi đang ăn nhé"
    $conheo->an1();


 ?>
