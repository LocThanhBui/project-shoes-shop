<!doctype html>
<html class="no-js" lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Danh Mục Sản Phẩm</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <link rel="stylesheet" href="../css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/form/all-type-forms.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="../style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <?php
        
        require_once('../Models/db/helper.php');
        $id = $name = $prices = $quanlity = $date = $cate = $desc = $pricesdow = $status = $img =  "";
        if(isset($_POST))
        {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(isset($_POST["txtid"])){
                    $id= $_POST['txtid'];
                }
                if(isset($_POST["txtname"])){
                    $name= $_POST['txtname'];
                }
                if(isset($_POST["intPrices"])){
                    $prices= $_POST['intPrices'];
                }
                if(isset($_POST["intQuantity"])){
                    $quanlity= $_POST['intQuantity'];
                }
                if(isset($_POST["txtdate"])){
                    $date= $_POST['txtdate'];
                }
                if(isset($_POST["txtcate"])){
                    $cate= $_POST['txtcate'];
                }
                if(isset($_POST["txtdesc"])){
                    $desc= $_POST['txtdesc'];
                }
                if(isset($_POST["intPricesdow"])){
                    $pricesdow= $_POST['intPricesdow'];
                }
                if(isset($_POST["ckbstt"])){
                    $status= $_POST['ckbstt'];
                }

                if($_FILES['filehinh']['name']=="")
                {
                    $sql = "INSERT INTO sanpham (masp,tensp,gia,soluong,ngaynhap,loaisp,Mota,giamgia,trangthai) values ('$id','$name','$prices','$quanlity','$date','$cate','$desc','$pricesdow','$status')";
                    execute($sql);
                    header("Location: product-list.php");
                    die();
                }

                else {
                    move_uploaded_file($_FILES['filehinh']['tmp_name'],"../../../assets/uppload/" . $_FILES['filehinh']['name']);
                    $img = $_FILES['filehinh']['name'];
                    $sql = "INSERT INTO sanpham values ('$id','$name','$prices','$quanlity','$date','$cate','$img','$desc','$pricesdow','$status')";
                    execute($sql);
                    header("Location: product-list.php");
                    die();
                }
            }
            if(isset($_GET['id']))
            {
            $id = $_GET['id'];
            $sql = "SELECT * FROM sanpham WHERE masp = '$id'";
            $category = executeSingleResult($sql);
            if($category != null)
                {
                    $id = $category['masp'];
                    $name = $category['tensp'];
                    $prices = $category['gia'];
                    $quanlity = $category['soluong'];
                    $date = $category['ngaynhap'];
                    $cate = $category['loaisp'];
                    $desc = $category['Mota'];
                    $pricesdow = $category['giamgia'];
                    $status = $category['trangthai'];
                    $img = $category['hinhanhsp'];
                }
            }
        }
        

     ?>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="#"><img class="main-logo" src="" alt="" /></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                           
                                <a title="Product List" href="product-list.php"><i class="fa fa-female sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Danh sách sản phẩm</span></a>
                                <a title="Product Edit" href="product-edit.php"><i class="fa fa-bolt sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Thêm/sửa sản phẩm</span></a>
                           
                        </li>
                        <li>
                        </li>
                        <li>
                            
                        </li>
                        <li>
                        
                        </li>
                        <li>
                            
                        </li>
                        <li>
                            
                        </li>
                        <li>
                        </li>
                        <li id="removable">
                                <a title="Login" href="loginadmin.php"><i class="fa fa-hand-rock-o sub-icon-mg" aria-hidden="true"></i><span class="mini-sub-pro">Login</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="../../../index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="fa fa-bars"></i>
                                                </button>
                                        </div>
                                    </div>
        
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    
                                                        
                                                        
                                                </li>
                                                <li class="nav-item"></li>
                                                    
                                                        
                                               
                                                <li class="nav-item">
                                                    
                                                    
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"></a>

                                                    <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <div class="tab-content custom-bdr-nt">
                                                            <div id="Notes" class="tab-pane fade in active">
                                                                <div class="notes-area-wrap">
                                                                    
                                                                    <div class="notes-list-area notes-menu-scrollbar">
                                                                        <ul class="notes-menu-list">
                                                                            
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="Projects" class="tab-pane fade">
                                                                <div class="projects-settings-wrap">
                                                                    <div class="note-heading-indicate">
                                                                        
                                                                    </div>
                                                                    <div class="project-st-list-area project-st-menu-scrollbar">
                                                                        <ul class="projects-st-menu-list">
                                                                            
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="Settings" class="tab-pane fade">
                                                                <div class="setting-panel-area">
                                                                    
                                                                    <ul class="setting-panel-list">
                                                                        
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-tb-15">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><i class="fa fa-pencil" aria-hidden="true"></i>
                                        <?= !empty($_GET['id']) ? "Sửa sản phẩm" : "Thêm sản phẩm";?></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <form method="post" enctype="multipart/form-data" name="formnhaphang" id="formnhaphang">
                                        <div class="product-tab-list tab-pane fade active in" id="description">
                                            <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="review-content-section">
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                                <input type="text" name="txtid" value="<?=$id?>" class="form-control" placeholder="Mã sản phẩm">
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                                <input type="text" name="txtname" value="<?=$name?>" class="form-control" placeholder="Tên sản phẩm">
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                                <input type="text" name="intPrices" value="<?=$prices?>" class="form-control" placeholder="Giá ">
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-qrcode" aria-hidden="true"></i></span>
                                                                <input type="text" name="intQuantity" value="<?=$quanlity?>" class="form-control" placeholder="Số Lượng">
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-qrcode" aria-hidden="true"></i></span>
                                                                <input type="date" name="txtdate" value="<?=$date?>" class="form-control" placeholder="Ngày nhập">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="review-content-section">
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-ticket" aria-hidden="true"></i></span>
                                                                <textarea type="text" name="txtdesc" value="<?=$desc?>" class="form-control" placeholder="Mô tả sản phẩm"></textarea> 
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                                <input type="text" name="intPricesdow" value="<?=$pricesdow?>" class="form-control" placeholder="Giảm giá">
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-tag" aria-hidden="true"></i></span>
                                                                <input type="text" name="txtcate" value="<?=$cate?>" class="form-control" placeholder="Loại sản phẩm">
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-tag" aria-hidden="true"></i></span>
                                                                <input type="file" name="filehinh" value="<?=$img?>" class="form-control" placeholder="Hình ảnh">
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt ">
                                                                <span class="input-group-addon"><i class="fa fa-tag" aria-hidden="true"></i></span>
                                                                <label>Trạng Thái</label>
                                                                <br/>
                                                                <input type="checkbox" name="ckbstt" value="1">Còn hàng
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">
                                                            <?= !empty($_GET['id']) ? "Sửa" : "Thêm";?>
    														</button>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light m-r-10">Nhập Mới
                                                            </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright &copy; 2021 LTL TEAM.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="../js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="../js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="../js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="../js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="../js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="../js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="../js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="../js/metisMenu/metisMenu.min.js"></script>
    <script src="../js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="../js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="../js/calendar/moment.min.js"></script>
    <script src="../js/calendar/fullcalendar.min.js"></script>
    <script src="../js/calendar/fullcalendar-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="../js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="../js/plugins.js"></script>
    <!-- main JS../
		============================================ -->
    <script src="../js/main.js"></script>
</body>

</html>