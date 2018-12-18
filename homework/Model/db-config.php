<?php
  class Database {
    private $hostname = 'localhost';
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


    public function execute($sql) {
      $this->result = $this->conn->query($sql);
      return $this->result;
    }


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


    public function addData($name,$date,$country,$luongcung,$luongthuong,$luongphat,$luongthuclinh) {
        $sql= "insert into giaovien(id,name,date,country,luongcung,luongthuong,luongphat,luongthuclinh) values(null,'$name','$date','$country',
          '$luongcung','$luongthuong','$luongphat','$luongthuclinh'  ) ";
       return $this->execute($sql);
    }


  }

 ?>
