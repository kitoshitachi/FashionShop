_<?php
    include_once "../display/header.php";
    include_once "../display/slider.php";
    include_once "category.php";

    $category = new category;
    if(!isset($_GET['category_id']) || $_GET['category_id'] == null)
        echo "<script> window.location.href = 'category_list.php'</script>";
    else
        $category_id = $_GET['category_id'];
    
    $get_category = $category -> get_category($category_id);
    if($get_category)
        $result = $get_category -> fetch_assoc();

    if ($_SERVER['REQUEST_METHOD']== 'POST') {
        $category_name = $_POST['category_name'];
        $update_category = $category->update_category($category_id,$category_name);
    }
?>
        <div class="content-right">
            <div class="add">
                <h1>Sửa danh mục</h1>
                <form action="" method="POST">
                    <input required name="category_name" type="text" placeholder="Nhập tên danh mục"
                    value="<?php echo $result['category_name'] ?>">
                    <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>