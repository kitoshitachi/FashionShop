<?php
    include_once "../database.php";
?>

<?php
    class product{
        private $db;

        public function __construct()
        {
            $this->db = new database();
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
        public function show_lsp_ajax($category_id){
            $query = "SELECT * FROM tbl_lsp WHERE category_id = '$category_id'";
            $result = $this->db->select($query);
            return $result;
        }

        public function insert_product(){
            $product_name =$_POST['product_name'];
            $category_id =$_POST['category_id'];
            $lsp_id =$_POST['lsp_id'];
            $product_price =$_POST['product_price'];
            $product_sale_price =$_POST['product_sale_price'];
            $product_desc =$_POST['product_desc'];
            
            $query = "INSERT INTO tbl_product(
                                    product_name,
                                    category_id,
                                    lsp_id,
                                    product_price,
                                    product_sale_price,
                                    product_desc)
                    value(
                                    '$product_name',
                                    '$category_id',
                                    '$lsp_id',
                                    '$product_price',
                                    '$product_sale_price',
                                    '$product_desc')";
            $result = $this->db->insert($query);
            if ($result) {
                $query ="SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 1";
                $result = $this->db->select($query)->fetch_assoc();
                $product_id = $result['product_id'];
                $filename = $_FILES['product_img']['name'];
                $filetmp = $_FILES['product_img']['tmp_name'];

                foreach($filename as $key => $value){
                    move_uploaded_file($filetmp[$key],"product_img/".$value);   
                    $query = "INSERT INTO tbl_img(product_id,product_img) VALUES ('$product_id','$value')";
                    $this->db->insert($query);
                }
            }
            //header('Location:lsp_list.php');
        }

        public function show_product(){
            $query = 
            "SELECT tbl_product.product_id, category_name, lsp_name, product_price, product_name, product_sale_price, product_img, product_desc
             FROM tbl_product INNER JOIN tbl_lsp ON tbl_product.lsp_id = tbl_lsp.lsp_id 
             INNER JOIN tbl_category ON tbl_category.category_id = tbl_product.category_id 
             INNER JOIN (SELECT DISTINCT product_id,product_img FROM tbl_img ORDER BY product_id ASC) img ON img.product_id = tbl_product.product_id
            ORDER BY tbl_product.product_id DESC LIMIT 0, 25;";
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