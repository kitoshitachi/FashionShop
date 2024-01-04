<?php
    include_once "./product.php";
    $product = new product;
    $category_id = $_GET['category_id'];
    $show_lsp_ajax = $product ->show_lsp_ajax($category_id);
    if($show_lsp_ajax){
        while($result = $show_lsp_ajax->fetch_assoc()){        
?>
    <option value="<?php echo $result['lsp_id'] ?>"><?php echo $result['lsp_name'] ?></option>
<?php
        }
    }
?>