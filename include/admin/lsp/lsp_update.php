<?php
    include_once "../display/header.php";
    include_once "../display/slider.php";
    include_once "lsp.php";

    $lsp = new lsp;
    if(!isset($_GET['lsp_id']) || $_GET['lsp_id'] == null)
            echo "<script> window.location.href = 'lsp_list.php'</script>";
    else
        $lsp_id = $_GET['lsp_id'];
    
    $get_lsp = $lsp -> get_lsp($lsp_id);
    if($get_lsp)
        $result1 = $get_lsp -> fetch_assoc();

    if ($_SERVER['REQUEST_METHOD']== 'POST') {
        $category_id = $_POST['category_id'];
        $lsp_name = $_POST['lsp_name'];    
        $update_lsp = $lsp->update_lsp($lsp_id,$category_id,$lsp_name);
    }
?>

        <div class="content-right">
            <div class="add">
                <h1>Sửa loại sản phẩm</h1>
                <form action="" method="POST">
                    
                    <select name="category_id" id="">
                        <option value="">Chọn danh mục</option>
                        <?php
                            $show_category = $lsp ->show_category();
                            if($show_category){
                                while($result = $show_category->fetch_assoc()){
                        ?>
                        <option <?php if($result1['category_id'] == $result['category_id']) echo "SELECTED" ?> value="<?php echo $result['category_id'] ?>"><?php echo $result['category_name'] ?></option>
                        <?php
                                }
                            }
                        ?>
                    </select>
                    <input required name="lsp_name" type="text" placeholder="Nhập tên loại sản phẩm"
                     value="<?php echo $result1['lsp_name'] ?>">
                    <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>