<?php
include_once "../display/header.php";
include_once "../display/slider.php";
include_once "product.php";

$product = new product;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo '<pre>';
    // echo print_r($_FILES['product_img']);
    // echo '</pre>';
    $insert_product = $product->insert_product($_POST, $_FILES);
}
?>
<div class="content-right">
    <div class="product-add">
        <h1>Thêm sản phẩm</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="area1">
                <label for="">Nhập tên sản phẩm<span style="color:red;">*</span></label>
                <label for="">Chọn danh mục<span style="color:red;">*</span></label>
                <label for="">Chọn loại sản phẩm<span style="color:red;">*</span></label>

                <input required name="product_name" type="text">
                <select required name="category_id" id="category_id">
                    <option value="">--Chọn--</option>
                    <?php
                    $show_category = $product->show_category();
                    if ($show_category) {
                        while ($result = $show_category->fetch_assoc()) {
                    ?>
                            <option value="<?php echo $result['category_id'] ?>"><?php echo $result['category_name'] ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
                <select required name="lsp_id" id="lsp_id">
                    <option value="">--Chọn--</option>

                </select>

                <label for="">Chọn ảnh<span style="color:red;">*</span> <span><?php if (isset($insert_product)) echo ($insert_product); ?></span></label>
                <label for="">Nhập giá sản phẩm<span style="color:red;">*</span></label>
                <label for="">Nhập giá khuyến mãi</label>

                <input required name="product_img[]" multiple type="file">
                <input required name="product_price" type="text">
                <input name="product_sale_price" type="text">
            </div>
            <div class="area2">
                <label for="">Mô tả sản phẩm<span style="color:red;">*</span></label>
                <textarea name="product_desc" id="editor" cols="30" rows="10"></textarea>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#editor'))
                        .catch(error => {
                            console.error(error);
                        });
                </script>

                <button type="submit">Thêm</button>
            </div>
        </form>
    </div>
</div>
</section>
</body>

</html>
<script>
    $(document).ready(function() {
        $("#category_id").change(function() {
            //alert($(this).val())
            var x = $(this).val()
            $.get("product_insert_ajax.php", {
                category_id: x
            }, function(data) {
                $("#lsp_id").html(data)
            })
        })
    })
</script>