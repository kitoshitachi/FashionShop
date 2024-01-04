<?php
    include_once "../display/header.php";
    include_once "../display/slider.php";
    include_once "product.php";
?>
<?php
$product = new product;
$show_product = $product->show_product();
?>

        <div class="content-right">
            <div class="list">
                <h1>Danh sách sản phẩm</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Danh mục</th>
                        <th>Loại sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Giá khuyến mãi</th>
                        <th>Ảnh</th>
                        <th>Mô tả</th>
                        <th>Xử lý</th>
                    </tr>
                    <?php
                    if($show_product)
                        $i =0;
                        while($result = $show_product->fetch_assoc()){ $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['product_id'] ?></td>
                        <td><?php echo $result['category_name'] ?></td>
                        <td><?php echo $result['lsp_name'] ?></td>
                        <td><?php echo $result['product_name'] ?></td>
                        <td><?php echo $result['product_price'] ?></td>
                        <td><?php echo $result['product_sale_price'] ?></td>
                        <td><img width="70" height="80" src="./product_img/<?php echo $result['product_img'] ?>" alt="<?php echo $result['product_desc'] ?>"></td>
                        <td><textarea disabled name="" id="" cols="30" rows="10"><?php echo $result['product_desc'] ?></textarea> </td>
                        <td>
                            <a href="product_update.php?lsp_id=<?php echo $result['product_id'] ?>">Sửa</a> |
                            
                            <a href="product_delete.php?lsp_id=<?php echo $result['product_id'] ?>">Xóa</a>
                        </td>

                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </section>
</body>
</html>