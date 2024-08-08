<?php
if (!isset($_GET['link'])) {
    header("location:shop.php");
    exit();
}
require_once 'inclouds/constant.php';
$link = $_GET['link'];
$select_pr = "SELECT * FROM products_db WHERE link = '$link'";
$result_pr = mysqli_query($conn, $select_pr);
$product = mysqli_fetch_assoc($result_pr);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta content="Anil z" name="author"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta
            name="description"
            content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods."/>
    <meta
            name="keywords"
            content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store"/>

    <!-- SITE TITLE -->
    <title>قالب شاپ ویز | قالب فروشگاهی HTML</title>
    <!-- Favicon Icon -->
    <link
            rel="shortcut icon"
            type="image/x-icon"
            href="assets/images/favicon.png"/>
    <!-- Animation CSS -->
    <link rel="stylesheet" href="assets/css/animate.css"/>
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
    <!-- Google Font -->
    <!--<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> -->
    <!-- Icon Font CSS -->
    <link
            href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css"
            rel="stylesheet"
            type="text/css"/>
    <style>
        html,
        body {
            font-family: Vazirmatn, sans-serif !important;
        }
    </style>

    <link rel="stylesheet" href="assets/css/all.min.css"/>
    <link rel="stylesheet" href="assets/css/ionicons.min.css"/>
    <link rel="stylesheet" href="assets/css/themify-icons.css"/>
    <link rel="stylesheet" href="assets/css/linearicons.css"/>
    <link rel="stylesheet" href="assets/css/flaticon.css"/>
    <link rel="stylesheet" href="assets/css/simple-line-icons.css"/>
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css"/>
    <link
            rel="stylesheet"
            href="assets/owlcarousel/css/owl.theme.default.min.css"/>
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css"/>
    <!-- jquery-ui CSS -->
    <link rel="stylesheet" href="assets/css/jquery-ui.css"/>
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/slick.css"/>
    <link rel="stylesheet" href="assets/css/slick-theme.css"/>
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/responsive.css"/>
    <!-- RTL CSS -->
    <link rel="stylesheet" href="assets/css/rtl-style.css"/>
</head>

<body dir="rtl">
<!-- LOADER -->
<div class="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- END LOADER -->

<!-- Home Popup Section -->

<!-- End Screen Load Popup Section -->

<!-- START HEADER -->
<?php include 'inclouds/header.php' ?>
<!-- END HEADER -->

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container">
        <!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1>جزئیات محصول</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#"> خانه</a></li>
                    <li class="breadcrumb-item"><a href="#">صفحات</a></li>
                    <li class="breadcrumb-item active">جزئیات محصول</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">
    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                    <div class="product-image">
                        <div class="product_img_box">
                            <img
                                    id="product_img"
                                    src="uploads/<?php echo $product['photo'] ?>"
                                    data-zoom-image="uploads/<?php echo $product['photo'] ?>"
                                    alt="product_img1"/>

                        </div>
                        <div
                                id="pr_item_gallery"
                                class="product_gallery_item slick_slider"
                                data-slides-to-show="4"
                                data-slides-to-scroll="1"
                                data-infinite="false">
                            <?php
                            $gallery = json_decode($product['gallery']);
                            foreach ($gallery as $img) {
                                ?>
                                <div class="item">
                                    <a
                                            href="#"
                                            class="uploads/<?php echo $img ?>"
                                            data-image="uploads/<?php echo $img ?>"
                                            data-zoom-image="uploads/<?php echo $img ?>">
                                        <img
                                                style="height: 120px"
                                                src="uploads/<?php echo $img ?>"
                                                alt="<?php echo $product['link'] ?>"/>
                                    </a>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="pr_detail">
                        <div class="product_description">
                            <h4 class="product_title">
                                <a href="#"><?php echo $product['name'] ?></a>
                            </h4>
                            <div class="product_price">
                                <?php if ($product['takhfif'] != '') { ?>
                                    <span class="price"><?php echo number_format($product['takhfif']) ?> تومان</span>
                                    <del><?php echo $product['price'] ?></del>
                                <?php } else { ?>
                                    <span class="price"><?php echo number_format($product['price']) ?> تومان</span>
                                <?php } ?>
                            </div>

                            <div class="pr_desc">
                                <p>
                                    <?php echo $product['short_desc'] ?>
                                </p>
                            </div>
                            <div class="product_sort_info">
                                <ul>
                                    <li>
                                        <i class="linearicons-shield-check"></i> 1 سال گارانتی
                                        برند AL Jazeera
                                    </li>
                                    <li>
                                        <i class="linearicons-sync"></i> سیاست بازگشت 30 روزه
                                    </li>
                                    <li>
                                        <i class="linearicons-bag-dollar"></i> نقدی هنگام تحویل
                                        موجود است
                                    </li>
                                </ul>
                            </div>
                            <div class="pr_switch_wrap">
                                <span class="switch_lable">رنگ</span>
                                <div class="product_size_switch colorbox">
                                    <?php
                                    $colors = explode("|", $product['color']);
                                    foreach ($colors as $color) {
                                        ?>
                                        <span><?php echo $color ?></span>

                                    <?php } ?>

                                </div>
                            </div>
                            <div class="pr_switch_wrap">
                                <span class="switch_lable">سایز</span>
                                <div class="product_size_switch sizebox">
                                    <?php
                                    $sizes = explode("|", $product['size']);
                                    foreach ($sizes as $size) {
                                        ?>
                                        <span><?php echo $size ?></span>

                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="cart_extra">
                            <div class="cart-product-quantity">
                                <form action="inclouds/addtocart.php" method="post">
                                    <div class="quantity">
                                        <input type="button" value="-" class="minus"/>
                                        <input
                                                type="text"
                                                name="quantity"
                                                value="1"
                                                title="Qty"
                                                class="qty"
                                                size="4"/>
                                        <input type="button" value="+" class="plus"/>
                                    </div>
                                    </div>
                                    <div class="cart_btn">
                                    <button
                                            class="btn btn-fill-out btn-addtocart"
                                            type="submit">
                                        <i class="icon-basket-loaded"></i> افزودن به سبد خرید
                                    </button>
                                    <input type="hidden" id="sizeval" name="sizeval">
                                    <input type="hidden" id="colorval" name="colorval">
                                    <input type="hidden" name="prid" value="<?php echo $product['id'] ?>">
                                </form>
                                <a class="add_compare" href="#"
                                ><i class="icon-shuffle"></i
                                    ></a>
                                <a class="add_wishlist" href="#"
                                ><i class="icon-heart"></i
                                    ></a>
                            </div>
                        </div>
                        <hr/>
                        <ul class="product-meta">
                            <li>کد: <a href="#"><?php echo $product['cod'] ?></a></li>
                            <?php
                            $catID = $product['cat'];
                            $select_cat = "SELECT * FROM cats_db WHERE id = $catID";
                            $catResult = mysqli_query($conn, $select_cat);
                            $catRow = mysqli_fetch_assoc($catResult);
                            ?>
                            <li>دسته بندی: <a href="#"><?php echo $catRow['name'] ?></a></li>

                            <li>
                                برچسب ها: <a href="#" rel="tag">پارچه</a>,
                                <a href="#" rel="tag">چاپ شده</a>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="large_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-style3">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a
                                        class="nav-link active"
                                        id="Description-tab"
                                        data-bs-toggle="tab"
                                        href="#Description"
                                        role="tab"
                                        aria-controls="Description"
                                        aria-selected="true"
                                >توضیح</a
                                >
                            </li>

                            <li class="nav-item">
                                <a
                                        class="nav-link"
                                        id="Reviews-tab"
                                        data-bs-toggle="tab"
                                        href="#Reviews"
                                        role="tab"
                                        aria-controls="Reviews"
                                        aria-selected="false"
                                >نظرات </a
                                >
                            </li>
                        </ul>
                        <div class="tab-content shop_info_tab">
                            <div
                                    class="tab-pane fade show active"
                                    id="Description"
                                    role="tabpanel"
                                    aria-labelledby="Description-tab">
                                <p>
                                    <?php echo nl2br($product['tozihat']) ?>
                                </p>

                            </div>
                            
                            <div
                                    class="tab-pane fade"
                                    id="Reviews"
                                    role="tabpanel"
                                    aria-labelledby="Reviews-tab">
                                <div class="comments">
                                    <h5 class="product_tab_title">
                                         نظرات برای <span><?php echo $product['name']  ?></span>
                                    </h5>
                                    <?php
                                    include 'modir/jdf.php';
                                    $idmahsol = $product['id'];
                                    $select_nazar = "SELECT * FROM nazarat WHERE pr_id = $idmahsol AND status = 2";
                                    $nazarResult = mysqli_query($conn, $select_nazar);
                                    ?>
                                    <ul class="list_none comment_list mt-4">
                                        <?php foreach ($nazarResult as $nazar) { ?>
                                        <li>

                                            <div class="comment_block">

                                                <p class="customer_meta">
                                                    <span class="review_author"><?php echo $nazar['name']  ?></span>
                                                    <span class="comment-date">
                                                        <?php

                                                        $date = explode( ' ',$nazar['date']);
                                                        $time = $date[1];
                                                        $date = $date[0];
                                                        $date = explode('-',$date);
                                                        $year = $date[0];
                                                        $month = $date[1];
                                                        $day = $date[2];
                                                        echo gregorian_to_jalali( $year , $month , $day , '/' );
                                                        ?>
                                                    </span>
                                                </p>
                                                <div class="description">
                                                    <p>
                                                        <?php echo $nazar['nazar']  ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <?php } ?>

                                    </ul>
                                </div>
                                <div class="review_form field_form">
                                    <h5>یک بررسی اضافه کنید</h5>
                                    <form class="row mt-3" method="post" action="inclouds/nazaratproccess.php">
                                        <div class="form-group col-12 mb-3">

                                        </div>
                                        <div class="form-group col-12 mb-3">
                          <textarea
                                  required="required"
                                  placeholder="نظر شما *"
                                  class="form-control"
                                  name="message"
                                  rows="4"></textarea>
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <input
                                                    required="required"
                                                    placeholder="نام را وارد کنید *"
                                                    class="form-control"
                                                    name="name_karbar"
                                                    type="text"/>
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <input

                                                    placeholder="ایمیل را وارد کنید "
                                                    class="form-control"
                                                    name="email_karbar"
                                                    type="email"/>
                                        </div>

                                        <div class="form-group col-12 mb-3">
                                            <input type="hidden" name="pr_id" value="<?php echo $product['id'] ?>">
                                            <button
                                                    type="submit"
                                                    class="btn btn-fill-out"
                                                    name="submit"
                                                    value="Submit">
                                                ارسال بررسی
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="small_divider"></div>
                    <div class="divider"></div>
                    <div class="medium_divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="heading_s1">
                        <h3>محصولات مرتبط</h3>
                    </div>
                    <div
                            class="releted_product_slider carousel_slider owl-carousel owl-theme"
                            data-margin="20"
                            data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                        <?php
                        $select_simiular = "SELECT * FROM products_db WHERE cat = $catID AND status = 1 ORDER BY RAND() LIMIT 4";
                        $result_simiular = mysqli_query($conn, $select_simiular);
                        foreach ($result_simiular as $row_simiular) {
                            ?>
                            <div class="item">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="shop.php">
                                            <img
                                                    src="uploads/<?php echo $row_simiular['photo'] ?>"
                                                    alt="product_img1"/>
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart">
                                                    <a href="#"
                                                    ><i class="icon-basket-loaded"></i> افزودن به سبد
                                                        خرید</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="shop-compare.html"
                                                    ><i class="icon-shuffle"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a href="shop-quick-view.html" class="popup-ajax"
                                                    ><i class="icon-magnifier-add"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title">
                                            <a href="shop-product.php?link=<?php echo $row_simiular['link'] ?>"
                                            ><?php echo $row_simiular['name'] ?> </a>
                                        </h6>
                                        <div class="product_price">
                                            <?php if($row_simiular['takhfif'] != ''){ ?>
                                            <span class="price"><?php echo $row_simiular['takhfif'] ?></span>
                                            <del><?php echo $row_simiular['price'] ?></del>
                                            <?php }else{ ?>
                                                <span class="price"><?php echo number_format($row_simiular['price']) ?></span>
                                            <?php } ?>

                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width: 80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>
                                                مشتری بسیار مهم است، مشتری توسط مشتری دنبال خواهد شد.
                                                برای قایق چاپلوس جرم. اکنون آن کازینو کازینویی وجود
                                                ندارد.
                                            </p>
                                        </div>
                                        <div class="pr_switch_wrap">
                                            <div class="product_color_switch">
                                                <span class="active" data-color="#87554B"></span>
                                                <span data-color="#333333"></span>
                                                <span data-color="#DA323F"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->

    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
    <div class="section bg_default small_pt small_pb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="heading_s1 mb-md-0 heading_light">
                        <h3>مشترک خبرنامه ما شوید</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="newsletter_form">
                        <form>
                            <input
                                    type="text"
                                    required=""
                                    class="form-control rounded-0"
                                    placeholder="آدرس ایمیل را وارد کن"/>
                            <button
                                    type="submit"
                                    class="btn btn-dark rounded-0"
                                    name="submit"
                                    value="Submit">
                                اشتراک
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
</div>
<!-- END MAIN CONTENT -->

<!-- START FOOTER -->
<footer class="footer_dark">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="footer_logo">
                            <a href="#"
                            ><img src="assets/images/logo_light.png" alt="logo"
                                /></a>
                        </div>
                        <p>
                            اگر می خواهید از لورم استفاده کنید، باید مطمئن شوید که متن
                            پنهانی وجود ندارد
                        </p>
                    </div>
                    <div class="widget">
                        <ul class="social_icons social_white">
                            <li>
                                <a href="#"><i class="ion-social-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-googleplus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-youtube-outline"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-instagram-outline"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">لینک های مفید</h6>
                        <ul class="widget_links">
                            <li><a href="#">درباره ما</a></li>
                            <li><a href="#">سوالات متداول</a></li>
                            <li><a href="#">مکان</a></li>
                            <li><a href="#">افلیت</a></li>
                            <li><a href="#">تماس</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">دسته</h6>
                        <ul class="widget_links">
                            <li><a href="#">مردان</a></li>
                            <li><a href="#">زن</a></li>
                            <li><a href="#">کودکان</a></li>
                            <li><a href="#">بهترین فروشنده</a></li>
                            <li><a href="#">موارد جدید</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">حساب من</h6>
                        <ul class="widget_links">
                            <li><a href="#">حساب من</a></li>
                            <li><a href="#">تخفیف</a></li>
                            <li><a href="#">برمی‌گرداند</a></li>
                            <li><a href="#">سابقه سفارشات</a></li>
                            <li><a href="#">ردیابی سفارش</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">اطلاعات تماس</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>تهران، میدان ونک، پردیس ایرانیان پلاک 202</p>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:info@sitename.com">info@sitename.com</a>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>+ 457 789 789 65</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-start">
                        © 2020 کلیه حقوق این سایت متعلق به ژاکت می باشد
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="footer_payment text-center text-lg-end">
                        <li>
                            <a href="#"
                            ><img src="assets/images/visa.png" alt="visa"
                                /></a>
                        </li>
                        <li>
                            <a href="#"
                            ><img src="assets/images/discover.png" alt="discover"
                                /></a>
                        </li>
                        <li>
                            <a href="#"
                            ><img src="assets/images/master_card.png" alt="master_card"
                                /></a>
                        </li>
                        <li>
                            <a href="#"
                            ><img src="assets/images/paypal.png" alt="paypal"
                                /></a>
                        </li>
                        <li>
                            <a href="#"
                            ><img
                                        src="assets/images/amarican_express.png"
                                        alt="amarican_express"
                                /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<a href="#" class="scrollup" style="display: none"
><i class="ion-ios-arrow-up"></i
    ></a>

<!-- Latest jQuery -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function (){
        $('.sizebox span').click(function () {
            var size = $(this).html();
            $('input#sizeval').val(size);
        });
        $('.colorbox span').click(function () {
            var color = $(this).html();
            $('input#colorval').val(color);
        });
    })
</script>
<!-- jquery-ui -->
<script src="assets/js/jquery-ui.js"></script>
<!-- popper min js -->
<script src="assets/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- owl-carousel min js  -->
<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- magnific-popup min js  -->
<script src="assets/js/magnific-popup.min.js"></script>
<!-- waypoints min js  -->
<script src="assets/js/waypoints.min.js"></script>
<!-- parallax js  -->
<script src="assets/js/parallax.js"></script>
<!-- countdown js  -->
<script src="assets/js/jquery.countdown.min.js"></script>
<!-- imagesloaded js -->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js -->
<script src="assets/js/isotope.min.js"></script>
<!-- jquery.dd.min js -->
<script src="assets/js/jquery.dd.min.js"></script>
<!-- slick js -->
<script src="assets/js/slick.min.js"></script>
<!-- elevatezoom js -->
<script src="assets/js/jquery.elevatezoom.js"></script>
<!-- scripts js -->
<script src="assets/js/scripts.js"></script>

</body>
</html>
