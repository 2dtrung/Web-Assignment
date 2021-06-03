<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--bootsstrap cdn-->
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
    <title>Assignment1 - Web Programming</title>
</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="search.php" method="get">
                            <input type="search" name="search" id="search" placeholder="Gõ từ khoá....">
                            <button type="submit" name="ok" value="search"><img src="/img/core-img/search.png"
                                    alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Search Wrapper Area End -->
    <div class="main-content-wrapper d-flex clearfix">
        <!-- ##### Main Content Wrapper Start ##### -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.html"><img src="img/core-img/logo_1.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li><a href="index.html">Trang chủ</a></li>
                    <li><a href="intro.html">Giới thiệu</a></li>
                    <li class="active"><a href="product.html">Sản phẩm</a></li>
                    <li><a href="price-list.html">Bảng giá</a></li>
                    <li><a href="contact.html">Liên hệ</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                <a href="product.html" class="btn amado-btn mb-15">%Khuyến mãi%</a>
                <a href="product.html" class="btn amado-btn active">Sản phẩm mới</a>
            </div>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="cart.html" class="cart-nav"><img src="img/core-img/cart.png" alt=""> Giỏ hàng
                    <span>(0)</span></a>
                <a href="#" class="fav-nav"><img src="img/core-img/favorites.png" alt=""> Ưa thích</a>
                <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Tìm kiếm</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>

        <div class="shop_sidebar_area">

            <!-- ##### Single Widget ##### -->
            <div class="widget catagory mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Thể loại</h6>

                <!--  Catagories  -->
                <div class="catagories-menu">
                    <ul>
                        <li class="active"><a href="intro.html">Kinh dị</a></li>
                        <li><a href="comedy.html">Chuyện hài</a></li>
                        <li><a href="search.php?search=novel&ok=search">Tiểu thuyết</a></li>
                        <li><a href="search.php?search=fiction&ok=search">Giả tưởng</a></li>
                        <li><a href="search.php?search=tech&ok=search">Khoa học</a></li>
                        <li><a href="#">Thám tử</a></li>
                        <li><a href="search.php?search=life&ok=search">Người lớn</a></li>
                    </ul>
                </div>
            </div>

            <!-- ##### Single Widget ##### -->
            <div class="widget brands mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Tác giả</h6>

                <div class="widget-desc">
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="amado">
                        <label class="form-check-label" for="amado">Stephen King</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="ikea">
                        <label class="form-check-label" for="ikea">Lory Grey</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="furniture">
                        <label class="form-check-label" for="furniture">Dawis Cook</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="factory">
                        <label class="form-check-label" for="factory">Time Hidden</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="artdeco">
                        <label class="form-check-label" for="artdeco">Rebecca</label>
                    </div>
                </div>
            </div>


            <!-- ##### Single Widget ##### -->
            <div class="widget price mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Giá</h6>

                <div class="widget-desc">
                    <div class="slider-range">
                        <div data-min="10" data-max="1000" data-unit="VNĐ"
                            class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                            data-value-min="10" data-value-max="1000" data-label-result="">
                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                        </div>
                        <div class="range-price">10.000VNĐ - 1.0000.000VNĐ</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                            <!-- Total Products -->
                            <div class="total-products">
                                <p>Hiện thị 1-8 trong 25</p>
                                <div class="view d-flex">
                                    <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <!-- Sorting -->
                            <div class="product-sorting d-flex">
                                <div class="sort-by-date d-flex align-items-center mr-15">
                                    <p>Sắp xếp theo</p>
                                    <form action="#" method="get">
                                        <select name="select" id="sortBydate">
                                            <option value="value">Ngày</option>
                                            <option value="value">Mới nhất</option>
                                            <option value="value">Độ thông dụng</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="view-product d-flex align-items-center">
                                    <p>Xem</p>
                                    <form action="#" method="get">
                                        <select name="select" id="viewProduct">
                                            <option value="value">6</option>
                                            <option value="value">12</option>
                                            <option value="value">24</option>
                                            <option value="value">48</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <?php
                        if (isset($_REQUEST['ok'])) {
                        $search = addslashes($_GET['search']);
                        if (empty($search)) {
                            echo "Mời nhập dữ liệu";
                        } else {
                            
                            $query = "SELECT * from products WHERE name like '%$search%' or category like '%$search%'";

                            $con = mysqli_connect("localhost", "root", "", "data");

                            $sql = mysqli_query($con, $query);

                            $num = mysqli_num_rows($sql);
                           

                        if ($num > 0 && $search != "") 
                            {
                                                                      
                                // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                                while ($row = mysqli_fetch_assoc($sql)) {
                                    $id = $row['id'];
                                    $image = $row['image'];
                                    $rating = $row['rating'];
                                    echo '<div class="col-12 col-sm-6 col-md-12 col-xl-6">';
                                    echo '<div class="single-product-wrapper">';
                                        echo '<div class="product-img">';
                                            echo '<img src="'; echo "{$row['image']}"; echo '" alt="">';
                                            echo '<img class="hover-img" src="'; echo "{$row['image']}"; echo '"alt="">';
                                        echo '</div>';
                                    echo '<div class="product-description d-flex align-items-center justify-content-between">';
                                        echo '<div class="product-meta-data">';
                                            echo '<div class="line"></div>';
                                            echo "<p class='product-price'>{$row['price']} $</p>";
                                            echo '<a href="product-detail.html">';
                                                echo "<h6> {$row['name']} </h6>";
                                            echo '</a>';
                                        echo '</div>';

                                        echo '<div class="ratings-cart text-right">';
                                            echo '<div class="ratings">';
                                                if ($rating <= 1) :
                                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                                elseif ($rating > 1 && $rating <=2) :
                                                {        
                                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                                }
                                                elseif ($rating > 2 && $rating <=3) :
                                                {
                                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                                }
                                                elseif ($rating > 3 && $rating <=4) :
                                                {
                                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                                }
                                                elseif ($rating > 4 && $rating <=5) :
                                                {    
                                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';     
                                                }        
                                                else:
                                                    echo '';
                                                endif;
                                            echo '</div>';
                                            
                                            echo '<div class="cart">';
                                            echo '<a href="cart.html" data-toggle="tooltip" data-placement="left"';
                                                echo 'title="Thêm vào Giỏ hàng"><img src="/img/core-img/cart.png" alt=""></a>';
                                            echo '</div>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';                                    
                            echo '</div>';       
                                }
                            } 
                        else{echo "Không tìm thấy sản phẩm";}
                    }
                    }       
                    ?>
                </div>
            </div>
        </div>




    </div>



    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="/js/plugins.js"></script>
    <!-- Active js -->
    <script src="/js/active.js"></script>
    <!-- enter form -->
    <script src="js/enterform.js"></script>

</body>

</html>