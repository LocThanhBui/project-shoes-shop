

<?php
session_start();
    if(!isset($_SESSION["user"])){
        header("location:login-register.php");
    }
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>LTL - STORE </title>
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon" />
    <!--=== All Plugins CSS ===-->
    <link href="../assets/css/plugins.css" rel="stylesheet">
    <!--=== All Vendor CSS ===-->
    <link href="../assets/css/vendor.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- Modernizer JS -->
    <script src="../assets/js/modernizr-2.8.3.min.js"></script>

    <!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <!-- Start Header Area -->
    <header class="header-area">
        <!-- main header start -->
        <div class="main-header d-none d-lg-block">
            <!-- header top start -->
            <div class="header-top theme-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="welcome-message">
                                <p>Welcome to LTL online store</p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-right">
                            <div class="header-top-settings">
                                <ul class="nav align-items-center justify-content-end">
                                    <li class="curreny-wrap">
                                        $ VNĐ (VI)
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list curreny-list">
                                            <li><a href="#">$ USD</a></li>
                                            <li><a href="#">$ VNĐ</a></li>
                                        </ul>
                                    </li>
                                    <li class="language">
                                        <img src="assets/img/icon/vietnam.png" alt="flag"> Vietnamese
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list">
                                            <li><a href="#"><img src="../assets/img/icon/vietnam.png" alt="flag"> Vietnamese</a></li>
                                            <li><a href="#"><img src="../assets/img/icon/en.png" alt="flag"> English</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top end -->

            <!-- header middle area start -->
            <div class="header-main-area sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">
                        <!-- start logo area -->
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="../index.php">
                                    <img src="../assets/img/logo/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- start logo area -->

                        <!-- main menu area start -->
                        <div class="col-lg-8 position-static">
                            <div class="main-menu-area">
                                <div class="main-menu">
                                    <!-- main menu navbar start -->
                                    <nav class="desktop-menu">
                                        <ul>
                                            <li class="active"><a href="../index.php">Trang chủ</a>
                                                
                                            </li>
                                            <li class="static"><a href="#">Danh mục <i class="fa fa-angle-down"></i></a>
                                                <ul class="megamenu dropdown">
                                                    <li class="mega-title"><a href="shop.php">Sản phẩm</a>
                                                        <ul>
                                                            <li><a href="shop.php">Tất cả sản phẩm</a></li>        
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="cart.php">Giỏ hàng</a>
                                                        <ul>
                                                            <li><a href="cart.php">Chi tiết giỏ hàng</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">Tìm kiếm đơn hàng</a>
                                                        <ul>
                                                            <li><a href="#">Chi tiết đơn hàng</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="contact-us.php">Liên hệ</a>
                                                        <ul>
                                                            <li><a href="my-account.php">Tài khoản</a></li>
                                                            <li><a href="login-register.php">Đăng nhập - Đăng ký</a></li>
                                                            <li><a href="contact-us.php">Liên hệ hỗ trợ</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="shop.php">Sản phẩm <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.php">Giày <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="shop.php">NIKE</a></li>
                                                            <li><a href="shop.php">JORDAN</a></li>
                                                            <li><a href="shop.php">ADIDAS</a></li>
                                                
                                                        </ul>
                                                    </li>              
                                                </ul>
                                            </li>
                                            <li><a href="blog-details.html">GIỚI THIỆU <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="blog-details.html"> LTL STORE</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact-us.php">Liên Hệ</a></li>
                                        </ul>
                                    </nav>
                                    <!-- main menu navbar end -->
                                </div>
                            </div>
                        </div>
                        <!-- main menu area end -->

                        <!-- mini cart area start -->
                        <div class="col-lg-2">
                            <div class="header-configure-wrapper">
                                <div class="header-configure-area">
                                    <ul class="nav justify-content-end">
                                        <li>
                                            <a href="#" class="offcanvas-btn">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </li>
                                        <li class="user-hover">
                                            <a href="#">
                                                <i class="ion-ios-gear-outline"></i>
                                            </a>
                                            <ul class="dropdown-list">
                                                <li><a href="login-register.php">Đăng nhập</a></li>
                                                <li><a href="login-register.php">Đăng ký</a></li>
                                                <li><a href="my-account.php">Tài khoản</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="cart.php" class="minicart-btn">
                                                <i class="ion-bag"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- mini cart area end -->
                    </div>
                </div>
            </div>
            <!-- header middle area end -->
        </div>
        <!-- main header start -->

        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo">
                                <a href="../index.php">
                                    <img src="../assets/img/logo/logo.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                                <div class="mini-cart-wrap">
                                    <a href="cart.php">
                                        <i class="ion-bag"></i>
                                    </a>
                                </div>
                                <div class="mobile-menu-btn">
                                    <div class="off-canvas-btn">
                                        <i class="ion-navicon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
    </header>
    <!-- end Header Area -->

    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="ion-android-close"></i>
            </div>

            <div class="off-canvas-inner">
                <!-- search box start -->
                <div class="search-box-offcanvas">
                    <form>
                        <input type="text" placeholder="Tìm kiếm...">
                        <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                    </form>
                </div>
                <!-- search box end -->

                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="../index.php">Trang chủ</a>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Danh mục</a>
                                <ul class="megamenu dropdown">
                                    <li class="mega-title menu-item-has-children"><a href="shop.php">Sản Phẩm</a>
                                        <ul class="dropdown">
                                            <li><a href="shop.php">
                                              Tất cả sản phẩm
                                            </a></li>
                                          
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="shop.php">Sản phẩm</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><a href="shop.php">Giày</a>
                                        <ul class="dropdown">
                                            <li><a href="shop.php">Nike</a></li>
                                            <li><a href="shop.php">Adidas</a></li>
                                            <li><a href="shop.php">Jordan</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="blog-details.php">Giới Thiệu </a>
                                <ul class="dropdown">
                                    <li><a href="blog-details.html">LTL STORE</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="contact-us.php">Liên Hệ </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->

                <!-- user setting option start -->
                <div class="mobile-settings">
                    <ul class="nav">
                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                <a href="#" class="dropdown-toggle" id="currency" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tiền tệ
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="currency">
                                    <a class="dropdown-item" href="#">$ USD</a>
                                    <a class="dropdown-item" href="#">$ VNĐ</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                <a href="#" class="dropdown-toggle" id="myaccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tài khoản
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                    <a class="dropdown-item" href="my-account.php">Đăng Nhập</a>
                                    <a class="dropdown-item" href="login-register.php"> Đăng kí</a>
                                    <a class="dropdown-item" href="login-register.php">Tài khoản</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- user setting option end -->

                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <ul>
                            <li><i class="fa fa-mobile"></i>
                                <a href="#">+084764856228</a>
                            </li>
                            <li><i class="fa fa-envelope-o"></i>
                                <a href="#">ltlstore@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="off-canvas-social-widget">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->

    <!-- main wrapper start -->
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area bg-img" data-bg="assets/img/banner/breadcrumb-banner.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap text-center">
                            <nav aria-label="breadcrumb">
                                <h1 class="breadcrumb-title">Tài khoản</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../index.php">Trang Chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tài Khoản</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- my account wrapper start -->
        <div class="my-account-wrapper section-padding">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- My Account Page Start -->
                        <div class="myaccount-page-wrapper">
                            <!-- My Account Tab Menu Start -->
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="myaccount-tab-menu nav" role="tablist">
                                        <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                           Bảng điều khiển</a>
                                        <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Đặt hàng</a>
                                        <a href="../Controller/logout.php"><i class="fa fa-sign-out"></i>  Đăng Xuất</a>
                                    </div>
                                </div>
                                <!-- My Account Tab Menu End -->
        
                                <!-- My Account Tab Content Start -->
                                <div class="col-lg-9 col-md-8">
                                    <div class="tab-content" id="myaccountContent">
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Bảng điều khiển</h3>
                                                <div class="welcome">                   
                                           Xin chào, <?php echo $_SESSION['user'];  ?> đã đăng nhập thành công.
                                    
                                        </div>
                                        <!-- Single Tab Content End -->
        
                                        <!-- Single Tab Content Start -->
                                        <!-- PHP Start Kiểm tra tình trạng đơn hàng -->
                                    
                                        <!-- PHP End Kiểm tra tình trạng đơn hàng -->
                                        <div class="tab-pane fade" id="orders" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Đặt Hàng</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Đặt hàng</th>
                                                                <th>Ngày</th>
                                                                <th>Trạng thái</th>
                                                                <th>Tổng tiền</th>
                                                                <th>Xem</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>12-09-2021</td>
                                                                <td>Đã xử lý</td>
                                                                <td>1.500.000 VNĐ</td>
                                                                <td><a href="cart.html" class="btn ">Xem</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>06-01-2021</td>
                                                                <td>Chưa xử lý</td>
                                                                <td>2.500.000 VNĐ</td>
                                                                <td><a href="cart.html" class="btn ">Xem</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>30-02-2021</td>
                                                                <td>Đang chờ xử lý</td>
                                                                <td>1.000.000 VNĐ</td>
                                                                <td><a href="cart.html" class="btn ">Xem</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
        
                                        <!-- Single Tab Content Start -->
                                        
                                        <!-- Single Tab Content End -->
        
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                            
                                        </div>
                                        <!-- Single Tab Content End -->
        
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                            
                                        </div>
                                        <!-- Single Tab Content End -->
        
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="account-info" role="tabpanel">
                                            
                                        </div> <!-- Single Tab Content End -->
                                    </div>
                                </div> <!-- My Account Tab Content End -->
                            </div>
                        </div> <!-- My Account Page End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- my account wrapper end -->
    </main>
    <!-- main wrapper end -->

    <!-- Start Footer Area Wrapper -->
   <footer class="footer-wrapper">
        <!-- footer main area start -->
        <div class="footer-widget-area section-padding">
            <div class="container">
                <div class="row mtn-40">
                    <!-- footer widget item start -->
                    <div class="col-xl-5 col-lg-3 col-md-6">
                        <div class="widget-item mt-40">
                            <h5 class="widget-title">LTL STORE</h5>
                            <div class="widget-body">
                                <ul class="location-wrap">
                                    <li><i class="ion-ios-location-outline"></i>390,  Hoàng Văn Thụ,  P.9,  Q.Tân Bình</li>
                                    <li><i class="ion-ios-email-outline"></i>Mail Us: <a href="mailto:ltlstore@gmail.com">ltltstore@gmail.com</a></li>
                                    <li><i class="ion-ios-telephone-outline"></i>Phone: <a href="+84764856228">+ 84764856228</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- footer widget item end -->

                    <!-- footer widget item start -->
                    <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="widget-item mt-40">
                                    <h5 class="widget-title">Sẩn Phẩm</h5>
                                    <div class="widget-body">
                                        <ul class="useful-link">
                                            <li><a href="shop.php">Nike</a></li>
                                            <li><a href="shop.php">Adidas</a></li>
                                            <li><a href="shop.php">Jordan</a></li>
                                        </ul>
                                    </div>
                                </div>
                    </div>
                    <!-- footer widget item end -->

                    <!-- footer widget item start -->
                    <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="widget-item mt-40">
                                    <h5 class="widget-title">Thông tin</h5>
                                    <div class="widget-body">
                                        <ul class="useful-link">
                                            <li><a href="index.php">Trang chủ</a></li>
                                            <li><a href="blog-details.html">Giới thiệu</a></li>
                                            <li><a href="contact-us.php">Liên hệ</a></li>
                                           
                                            
                                        </ul>
                                    </div>
                                </div>
                        
                    </div>
                    <!-- footer widget item end -->

                    <!-- footer widget item start -->
                    <div class="col-xl-2 col-lg-3 offset-xl-1 col-md-6">
                        <div class="widget-item mt-40">
                            <h5 class="widget-title">Tài Khoản</h5>
                            <div class="widget-body">
                                <ul class="useful-link">
                                    <li><a href="login-register.php">Đăng nhập </a></li>
                                    <li><a href="login-register.php">Đăng kí</a></li>
                                    <li><a href="my-account.php">Tài khoản</a></li>
                                    <li><a href="admin/master_ADMIN/Views/loginadmin.php">Đăng nhập với tư cách admin</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- footer widget item end -->
                </div>
            </div>
        </div>
        <!-- footer main area end -->

        <!-- footer bottom area start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 order-2 order-md-1">
                        <div class="copyright-text text-center text-md-left">
                            <p>Copyright 2021 <a href="../index.php">LTL</a>. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 order-md-2">
                        <div class="footer-social-link text-center text-md-right">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom area end -->
    </footer>
    <!-- End Footer Area Wrapper -->

    <!-- offcanvas search form start -->
    <div class="offcanvas-search-wrapper">
        <div class="offcanvas-search-inner">
            <div class="offcanvas-close">
                <i class="ion-android-close"></i>
            </div>
            <div class="container">
                <div class="offcanvas-search-box">
                    <form class="d-flex bdr-bottom w-100">
                        <input type="text" placeholder="Tìm kiếm tất cả tại đây....">
                        <button class="search-btn"><i class="ion-ios-search-strong"></i>search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas search form end -->

    

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->

    <!--=======================Javascript============================-->
    <!--=== All Vendor Js ===-->
    <script src="../assets/js/vendor.js"></script>
    <!--=== All Plugins Js ===-->
    <script src="../assets/js/plugins.js"></script>
    <!--=== Active Js ===-->
    <script src="../assets/js/active.js"></script>
</body>

</html>
