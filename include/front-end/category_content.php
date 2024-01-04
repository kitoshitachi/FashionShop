
 <!-------------------------------------category-------------------------------------->
 <section class="category">
        <div class="container">
            <div class="category-top row">
                <p> Trang chủ</p> <span>&#10230;</span>
                <p>Nam</p> <span>&#10230;</span>
                <p>Bộ quần áo</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="category-left">
                    <ul>
                    <?php
                        $show_category = $show ->show_category();
                        if($show_category){
                            while($result = $show_category->fetch_assoc()){        
                    ?>
                        <li class="category-left-li"><p><?php echo $result['category_name'] ?></p>
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
                </div>
                <div class="category-right row">
                    <div class="category-right-top-item">
                        <p>HÀNG NỮ MỚI VỀ</p>
                    </div>
                    <div class="category-right-top-item ">
                        <button onclick="clickboloc_function()"><span>Bộ Lọc</span><i
                                class="fas fa-sort-down"></i></button>
                    </div>
                    <div class="category-right-top-item">
                        <select name="" id="">
                            <option value="">Sắp xếp</option>
                            <option value="">Giá cao đến thấp</option>
                            <option value="">Giá thấp đến cao</option>
                        </select>
                    </div>

                    <div id="boloc-hide">
                        <div class="boloc ">
                            <div class="boloc-item">
                                <h2>Size:</h2>
                                <ul class="boloc-item-size-bottom">
                                    
                                </ul>
                            </div>
                            <div class="boloc-item">
                                <h2>Màu:</h2>   
                                <ul class="boloc-item-color-bottom row">

                                </ul>
                            </div>
                            <div class="boloc-item">
                                <h2>Còn hàng:</h2>
                                <input type="checkbox">
                            </div>

                            <div class="boloc-item">
                                <input class="boloc-bottom" id="boloc_bottom_left" type="button" value="Xóa">
                                <input class="boloc-bottom" id="boloc_bottom_right" type="button" value="Lọc">
                            </div>
                        </div>
                    </div>
                    <script src="include/assets/js/boloc.js"></script>
                    <div class="category-right-content row">
                        <div class="category-right-content-item">
                            <img src="../image/sp1.jpg" id="M1" alt="">
                            <h1>ÁO LỤA TAY KIỂU M1</h1>
                            <p>100.000 <sup>đ</sup> </p>
                            <p>_new_</p>
                        </div>
                    </div>

                    <div class="category-right-bottom row">
                        <div class="category-right-bottom-items">
                            <p>Hiển thị 2 <span>|</span> 4 sản phẩm</p>
                        </div>
                        <div class="category-right-bottom-items">
                            <p><span>&#171;<span>1 2 3 4 5</span>&#187;</span>Trang cuối</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

<script src="include/assets/js/slidebar.js"></script>


