<?php
    include_once "../display/header.php";
    include_once "../display/slider.php";
    include_once "lsp.php";
?>
<?php
$lsp = new lsp;
$show_lsp = $lsp->show_lsp();
?>
        <div class="content-right">
            <div class="list">
                <h1>Danh sách loại sản phẩm</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Danh mục</th>
                        <th>Loại sản phẩm</th>
                        <th>Xử lý</th>
                    </tr>
                    <?php
                    if($show_lsp)
                        $i =0;
                        while($result = $show_lsp->fetch_assoc()){ $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['lsp_id'] ?></td>
                        <td><?php echo $result['category_name'] ?></td>
                        <td><?php echo $result['lsp_name'] ?></td>
                        <td>
                            <a href="lsp_update.php?lsp_id=<?php echo $result['lsp_id'] ?>">Sửa</a> |
                            
                            <a href="lsp_delete.php?lsp_id=<?php echo $result['lsp_id'] ?>">Xóa</a>
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