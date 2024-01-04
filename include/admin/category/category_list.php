<?php
    include_once "../display/header.php";
    include_once "../display/slider.php";
    include_once "category.php";
?>
<?php
$category = new category;
$show_category = $category->show_category();
?>
<style>
    
</style>
        <div class="content-right">
            <div class="list">
                <h1>Danh sách danh mục</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Danh mục</th>
                        <th>Xử lý</th>
                    </tr>
                    <?php
                    if($show_category)
                        $i =0;
                        while($result = $show_category->fetch_assoc()){ $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['category_id'] ?></td>
                        <td><?php echo $result['category_name'] ?></td>
                        <td>
                            <a href="category_update.php?category_id=<?php echo $result['category_id'] ?>">Sửa</a>|
                            
                            <a href="category_delete.php?category_id=<?php echo $result['category_id'] ?>">Xóa</a>
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