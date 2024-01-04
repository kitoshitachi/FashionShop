<?php
    include_once "../display/header.php";
    include_once "../display/slider.php";
    include_once "lsp.php";

$lsp = new lsp;
if ($_SERVER['REQUEST_METHOD']== 'POST') {
    $category_id = $_POST['category_id'];
    $lsp_name = $_POST['lsp_name'];    
    $insert_lsp = $lsp->insert_lsp($category_id,$lsp_name);
}
?>
        <div class="content-right">
            <div class="add">
                <h1>Thêm loại sản phẩm</h1>
                <form action="" method="POST">
                    
                    <select name="category_id" id="">
                        <option value="">Chọn danh mục</option>
                        <?php
                            $show_category = $lsp ->show_category();
                            if($show_category){
                                while($result = $show_category->fetch_assoc()){        
                        ?>
                        <option value="<?php echo $result['category_id'] ?>"><?php echo $result['category_name'] ?></option>
                        <?php
                                }
                            }
                        ?>
                    </select>
                    <input required name="lsp_name" type="text" placeholder="Nhập tên loại sản phẩm">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>