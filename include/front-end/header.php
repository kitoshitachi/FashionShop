<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--font sansita, galada-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Galada&family=Sansita:ital,wght@1,700&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="include/assets/css/header1.css">
    <link rel="stylesheet" href="include/assets/css/mainstyle1.css">
    <title>JORKER FASHION</title>
</head>
<?php 
    include "include/front-end/show.php";
    $show = new show;
?>
<body>
    <header>
        <div class="header_menu">
            <div class="header_menu_left">
                <li><a href="">Shop</a>
                    <ul class="sub_menu grid">
                    <?php 
                        include_once "show.php";
                        $show = new show;
                    
                        $show_category = $show ->show_category();
                        if($show_category){
                            while($result = $show_category->fetch_assoc()){        
                    ?>
                        <li><a href="category.php"><?php echo $result['category_name'] ?></a>
                            <ul>
                            <?php
                                $show_lsp = $show->show_lsp($result['category_id']);
                                if($show_lsp)
                                while($result1 = $show_lsp->fetch_assoc()){
                            ?>
                                <li><a href=""><?php echo $result1['lsp_name'] ?></a></li>
                            <?php
                                }
                            ?>
                            </ul>
                        </li>
                        <?php
                            }
                        }
                    ?>     
                    </ul>
                </li>

                <li><a href="">Contact us</a></li>
            </div>
            <div class="logo">
                <p><a href="index.php">JORKER SHOP</a></p>
            </div>
            <div class="header_menu_right">
                <li><a id="thanhSearch" class="fas fa-search" href=""></a></li>
                <li><a href="">Wish List</a></li>
                <li><a href="Login.html">Log in</a></li>
            </div>

            <div class="sub_search_display">
                <div class="sub_search_container">
                    <div class="sub_search_container_header">
                        <input autocomplete="off" placeholder="Search" type="text" id="sub_search_input" onkeyup="myFunction()"></a>
                    </div>
                    <div class="sub_search_container_body sub_search_container_body_grid">
                        
                    </div>
                    <div class="sub_search_container_footer">
                        
                    </div>
                </div>
            </div>

            <script src="include/assets/js/search1.js"></script>
        </div>
    </header>