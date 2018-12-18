<?php
  class Database {
    private $hostname = '127.0.0.1';
    private $username = 'root';
    private $pass = '';
    private $db = 'oop';

    private $conn = NULL;
    private $result = NULL;

    public function connect() {
      $this->conn = new mysqli($this->hostname,$this->username,$this->pass,$this->db);
      if(!$this->conn) {
        echo "ket noi loi";
        exit();
      }
      else {
        mysqli_set_charset($this->conn,'utf8');
      }
      return $this->conn;
    }

    // Thuwjc hien cau truy van
    // cau try van nay duoc dung di nhieu lan nen ta tao ra 1 function
    public function execute($sql) {
      $this->result = $this->conn->query($sql);
      return $this->result;
    }

    // phuong thuc lay du lieu

    public function getData() {
      if($this->result){
        $data = mysqli_fetch_array($this->result);
      }
      else {
        $data = 0;
      }
      return $data;
    }

    // phuong thuc lay toan bo dl

    public function getAllData($table){
      $sql = "select * from $table";
      $this->execute($sql);
      if($this->num_rows() == 0){
        $data = 0;
      }
      else {
        while($datas = $this->getData()){
          $data[] = $datas;
        }
      }
       return $data;
    }

    // phuong thuc lay so ban
    public function num_rows() {
        if($this->result) {
          $num = mysqli_num_rows ($this->result);
        }else {
          $num = 0;
        }
        return $num;
    }


    // phuong thuc lay du lieu lay theo id

    public function getDataID($table,$id) {
      $sql = "select * from $table where id = '$id'";
      $this->execute($sql);
      if($this->num_rows() != 0){
        $data = mysqli_fetch_array($this->result);
      }
      else {
        $data = 0;
      }
      return $data;
    }


    // phuong thuc them du lieu
    public function addData($name,$date,$country) {
        $sql= "insert into thanhvien(id,name,date,country) values(null,'$name','$date','$country') ";
       return $this->execute($sql);
    }

    // phuowng thuc sua dl

    public function updateData($id,$name,$date,$country) {
        $sql = "update thanhvien set name='$name',date='$date',country='$country' where id='$id'";
        return $this->execute($sql);
    }


    // phuowng thuwc xoa

    public function delete($id,$table) {
      $sql = "delete from $table where id='$id'";
      return $this->execute($sql);
    }

    // phuong thuc tim kiem
    public function SearchData($table,$key){
      $sql = "select * from $table where name REGEXP '$key' order by id desc";
      $this->execute($sql);
      if($this->num_rows() == 0){
        $data = 0;
      }
      else {
        while($datas = $this->getData()){
          $data[] = $datas;
        }
      }
       return $data;
    }

  }

 ?>
