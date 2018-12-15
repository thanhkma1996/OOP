<?php
    // Kế thừa lồng

    // Kế thừa lồng  hay còn gọi là kế thừa nhiều lớp, nghĩa là một lớp được kế thừa từ nhiều lớp.
    //  Lớp B kế thừa lớp A, lớp C kế thừa lớp B và thế là ta có luồng kế thừa  A -> B -> C. Một ví dụ khác thực tế hơn,
    // giả sử Ông mình sinh ra Ba mình, Ba mình sinh ra mình như vậy mình kế thừa dòng máu của Ông mình và Ba mình.
    // Lớp A
    class A
    {
        protected $protected_A = 'Protected';
        private $private_A = 'Private';
        public $public_A = 'Public';

        private function showPrivate()
        {
            echo $this->private_A;
        }

        protected function showProtected()
        {
            echo $this->protected_A;
        }

        public function showPublic()
        {
            echo $this->public_A;
        }
    }

    // Lớp B Kế Thừa Lớp A
    class B extends A
    {
        public function ClassB()
        {
            echo $this->protected_A;
        }
    }

    // Lớp C Kế Thừa Lớp B
    class C extends B
    {
        public function showInfo()
        {
            // Lệnh này đúng vì nó truy xuất vào thuộc tính protected
            $this->protected_A = 'Nguyễn Văn A';

            // Lệnh này đúng vì nó truy xuất vào thuộc tính public
            $this->public_A = 'Nguyễn Văn B';

            // Lệnh này sai vì nó truy xuất vào thuộc tính private
            $this->private_A = 'Lệnh sai';
        }
    }

    // ------------------//
    // Chương trình chính//
    // ------------------//

    // Khởi tạo lớp C
    // Lớp C được kế thừa từ lớp B
    // mà lớp B kế thừa từ lớp A nên
    // suy ra nó kế thừa từ 2 lớp A, B
    $c = new C();

    // Lệnh này đúng vì gọi đến hàm public của lớp cha A
    $c->showPublic();

    // Lệnh này sai vì nó gọi hàm protected của lớp cha A
    $c->showProtected();

    // Lệnh này sai vì nó gọi hàm private của lớp cha A
    $c->showPrivate();

    // Lệnh này đúng vì nó truy xuất vào hàm public của lớp cha B
    $c->ClassB();


 ?>
