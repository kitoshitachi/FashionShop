<?php
    include "../Fashion_shop/include/admin/database.php";    
?>

<?php
    class show{
        private $db;

        public function __construct()
        {
            $this->db = new database();
        }

        public function show_category(){
            $query = "SELECT * FROM tbl_category ORDER BY category_id ASC";
            $result = $this->db->select($query);
            return $result;
        }
        public function show_lsp($category_id){
            $query = "SELECT lsp_name FROM tbl_lsp WHERE category_id = '$category_id' ORDER BY lsp_id DESC";
            $result = $this->db->select($query);
            return $result;
        }
        public function show_product(){
            $query = "";
            $result = $this ->db->select($query);
            return $result;
        }
    }
?>