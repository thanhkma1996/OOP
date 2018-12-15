<?php
    // Lưu ý khi nào cần sử dụng protected hay public
    // Khai báo duwosi dạng public

    class A
{
    public $username;
    public $password;

    public function getUsername()
    {

    }

    public function getPassword()
    {

    }

    public function checkLogin()
    {

    }
}

  // Khai báo duwois dạng private

  class A
{
    private $__private;
    private function __func_private()
    {
    }
}


class A
{
    private $__username;
    private $__password;

    function getUsername()
    {
        return 'Xin chào ' . $this->__username;
    }

    function setUsername($username)
    {
        $this->__username = $username;
    }

    function getPassword()
    {
        return $this->__password;
    }

    function setPassword($password)
    {
        $this->__password = md5($password.'ky_tu_muon_them');
    }
}

// Sử dụng
$a = new A();

$a->setUsername('TheHalfheart');

echo $a->getUsername();

$a->setPassword('matkhau');

echo $a->getPassword();



 ?>
