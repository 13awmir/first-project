<?php
require_once 'inclouds/constant.php';
session_start();
$userid = $_SESSION['userid'];
$select_cart = "SELECT * FROM cart_db WHERE user_id='$userid'";
$result_cart = mysqli_query($conn, $select_cart);
$cont_pr = mysqli_num_rows($result_cart);
if ($cont_pr == 0) {
    header("Location: shop.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fa">
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
                    <h1>تسویه حساب</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#"> خانه</a></li>
                    <li class="breadcrumb-item"><a href="#">صفحات</a></li>
                    <li class="breadcrumb-item active">تسویه حساب</li>
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
                <div class="col-12">
                    <div class="medium_divider"></div>
                    <div class="divider center_icon">
                        <i class="linearicons-credit-card"></i>
                    </div>
                    <div class="medium_divider"></div>
                </div>
            </div>


            <form method="post" action="inclouds/checkout_proccess.php">
                <div class="row">
                    <div class="col-md-6">
                        <div class="heading_s1">
                            <h4>جزئیات صورتحساب</h4>
                        </div>
                        <?php
                        $select_orders = "SELECT * FROM `orders_db` WHERE user_id = $userid ORDER BY id desc";
                        $result_orders = mysqli_query($conn, $select_orders);
                        $res_count = mysqli_num_rows($result_orders);
                        $last_order = mysqli_fetch_assoc($result_orders);
                        if($last_order != ''){
                            $last_details = json_decode($last_order['order_details'], true);
                        }

                        ?>

                        <div class="form-group mb-3">
                            <input
                                    type="text"
                                    value="<?php if ($res_count >0 && isset($last_details['address'])){echo $last_details['address'];} ?>"
                                    class="form-control"
                                    name="billing_address"
                                    required=""
                                    placeholder="آدرس *"/>
                        </div>

                        <div class="form-group mb-3">
                            <input
                                    class="form-control"
                                    value="<?php if (isset($last_details['city'])){echo $last_details['city'];} ?>"
                                    required
                                    type="text"
                                    name="city"
                                    placeholder="شهر / شهرک *"/>
                        </div>
                        <div class="form-group mb-3">
                            <input
                                    class="form-control"
                                    value="<?php if (isset($last_details['state'])){echo $last_details['state'];} ?>"
                                    required
                                    type="text"
                                    name="state"
                                    placeholder="ایالت / شهرستان *"/>
                        </div>
                        <div class="form-group mb-3">
                            <input
                                    class="form-control"
                                    value="<?php if (isset($last_details['zipcode'])){echo $last_details['zipcode'];} ?>"
                                    required
                                    type="text"
                                    name="zipcode"
                                    placeholder="کد پستی / ZIP *"/>
                        </div>
                        <div class="form-group mb-3">
                            <input
                                    class="form-control"
                                    value="<?php if (isset($last_details['phone'])){echo $last_details['phone'];} ?>"
                                    required
                                    type="text"
                                    name="phone"
                                    placeholder="تلفن *"
                            />
                        </div>


                        <div class="heading_s1">
                            <h4>اطلاعات تکمیلی</h4>
                        </div>

                        <div class="form-group mb-0">
                  <textarea
                          rows="5"
                          class="form-control"
                          placeholder="یادداشت های سفارش"></textarea>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="order_review">
                            <div class="heading_s1">
                                <h4>سفارش شما</h4>
                            </div>
                            <div class="table-responsive order_table">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>محصول</th>
                                        <th>قیمت</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $fullprice = 0;
                                    foreach ($result_cart as $item) {
                                        $prid = $item['pr_id'];
                                        $select_pr = "SELECT * FROM products_db WHERE id='$prid'";
                                        $result_pr = mysqli_query($conn, $select_pr);
                                        $row_pr = mysqli_fetch_assoc($result_pr);
                                        $jamkol = $item['tedad'] * $row_pr['price'];
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $row_pr['name'] ?>
                                            <span class="product-qty">x <?php echo $item['tedad'] ?></span>
                                        </td>
                                        <td><?php if ($row_pr['takhfif'] != ''){echo number_format($row_pr['takhfif']);}else{echo number_format($row_pr['price']);} ?></td>
                                    </tr>

                                    <?php $fullprice += $jamkol; } ?>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>مجموع فرعی</th>
                                        <td class="product-subtotal"><?php echo number_format($jamkol) ?></td>
                                    </tr>
                                    <tr>
                                        <th>حمل و نقل</th>
                                        <td>ارسال رایگان</td>
                                    </tr>
                                    <tr>
                                        <th>مجموع</th>
                                        <td class="product-subtotal"><?php echo number_format($fullprice) ?></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="payment_method">
                                <div class="heading_s1">
                                    <h4>پرداخت</h4>
                                </div>
                                <div class="payment_option">
                                    <div class="custome-radio">
                                        <input
                                                class="form-check-input"
                                                require=""
                                                type="radio"
                                                name="payment_option"
                                                id="exampleRadios3"
                                                value="option3"
                                                checked=""/>
                                        <label class="form-check-label" for="exampleRadios3"
                                        >حواله بانکی مستقیم</label
                                        >
                                        <p data-method="option3" class="payment-text">
                                            تنوع‌های زیادی از معابرلورم ایپسومدر دسترس است، اما اکثر
                                            آنها دچار تغییر شده‌اند.
                                        </p>
                                    </div>
                                    <div class="custome-radio">
                                        <input
                                                class="form-check-input"
                                                type="radio"
                                                name="payment_option"
                                                id="exampleRadios4"
                                                value="option4"/>
                                        <label class="form-check-label" for="exampleRadios4"
                                        >بررسی پرداخت</label
                                        >
                                        <p data-method="option4" class="payment-text">
                                            لطفاً چک خود را به نام فروشگاه، خیابان فروشگاه، شهر
                                            فروشگاه، ایالت/شهرستان فروشگاه، کدپستی فروشگاه ارسال
                                            کنید.
                                        </p>
                                    </div>
                                    <div class="custome-radio">
                                        <input
                                                class="form-check-input"
                                                type="radio"
                                                name="payment_option"
                                                id="exampleRadios5"
                                                value="option5"/>
                                        <label class="form-check-label" for="exampleRadios5"
                                        >پی پال</label
                                        >
                                        <p data-method="option5" class="payment-text">
                                            پرداخت از طریق PayPal. اگر حساب PayPal ندارید، می توانید
                                            با کارت اعتباری خود پرداخت کنید.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-fill-out btn-block" type="submit">ثبت سفارش</button>
                        </div>
                    </div>

                </div>
            </form>

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
