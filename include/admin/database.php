<?php
  include "config.php"
?>

<?php
    class database{
      public $host = host;
      public $user = user;
      public $password = password;
      public $dbname = db_name;

      public $conn;
      public $error;
      // hàm tự động kết nối
      public function __construct()
      {
        $this->connect();
      }

      // kết nối
      private function connect(){
        $this->conn = new mysqli($this->host,$this->user,$this->password,$this->dbname);

        if(!$this->conn){
          $this->error ="connection fail".$this->conn->connect_error;

          return false;
        }
      }

      // thực thi select
      public function select($query){
        $result = $this->conn->query($query) or die($this->conn->error.__LINE__);
        $num_row = mysqli_num_rows($result);
        if($num_row > 0) return $result;
        else return false;
      }

      //thực thi insert
      public function insert($query){
        $insert_row=$this->conn->query($query) or die($this->conn->error.__LINE__);

        if($insert_row) return $insert_row;
        else return false;
      }

      //thực thi update
      public function update($query){
        $update_row=$this->conn->query($query) or die($this->conn->error.__LINE__);

        if($update_row) return $update_row;
        else return false;
      }
      
      //thực thi delete
      public function delete($query){
        $delete_row=$this->conn->query($query) or die($this->conn->error.__LINE__);

        if($delete_row) return $delete_row;
        else return false;
      }

      
    }
?>