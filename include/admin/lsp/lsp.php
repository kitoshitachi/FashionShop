<?php
    include_once "../database.php";
?>

<?php
    class lsp{
        private $db;

        public function __construct()
        {
            $this->db = new database();
        }
        
        public function insert_lsp($category_id,$lsp_name){
            $query = "INSERT INTO tbl_lsp(category_id,lsp_name) value('$category_id','$lsp_name')";
            $this->db->insert($query);
            header('Location:lsp_list.php');
        }

        public function show_category(){
            $query = "SELECT * FROM tbl_category ORDER BY category_id DESC";
            $result = $this->db->select($query);
            return $result;
        }
        public function show_lsp(){
            $query = "SELECT lsp_id,lsp_name,category_name FROM tbl_lsp INNER JOIN tbl_category ON tbl_lsp.category_id = tbl_category.category_id ORDER BY lsp_id DESC";
            $result = $this->db->select($query);
            return $result;
        }
        public function get_lsp($lsp_id){
            $query = "SELECT * FROM tbl_lsp WHERE lsp_id = '$lsp_id'";
            $result = $this->db->update($query);
            return $result;
        }
        public function update_lsp($lsp_id,$category_id,$lsp_name){
            $query = "UPDATE tbl_lsp SET lsp_name = '$lsp_name', category_id = '$category_id' WHERE lsp_id = '$lsp_id'";
            $result = $this->db->update($query);
            header('Location:lsp_list.php');
            return $result;
        }
        public function delete_lsp($lsp_id){
            $query = "DELETE FROM tbl_lsp WHERE lsp_id = '$lsp_id'";
            $result = $this->db->delete($query);
            header('Location:lsp_list.php');
            return $result;
        }
    }
?>