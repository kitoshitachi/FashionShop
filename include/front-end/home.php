
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
            <script src="include/assets/js/category.js"></script>
        </div>
        <section class="slider">
            <div class="slider_content">
                <p>What Do You Want ?</p>
            </div>
            <div class="slider_content">
                <button>Sale 50%</button>
            </div>
            <div class="slider_content">
                <button>Special News</button>
            </div>
        </section>
    </header>

    <section class="feedback">
        <div class="feedback_top">
            <div class="feedback_top_left">
                <div class="img_black">
                    <div class="feedback_top_items">
                        <p>JOKER Clothes</p>
                    </div>
                    <div class="feedback_top_items">
                        <button>Got it</button>
                    </div>
                </div>
            </div>

            <div class="feedback_top_right">
                <div class="img_black">
                    <div class="feedback_top_items">
                        <p>JOKER Clothes</p>
                    </div>
                    <div class="feedback_top_items">
                        <button>Got it</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="feedback_bot">
            <h1>Question And Feedback</h1>
            <p>Would you like take some advice ?</p>
            <button>Ask Now</button>
        </div>
    </section>
