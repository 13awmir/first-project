<?php require_once 'inclouds/constant.php';
if (!isset($_GET['factor'])){
    header("Location: shop.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="Anil z" name="author" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods." />
    <meta
      name="keywords"
      content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store" />

    <!-- SITE TITLE -->
    <title>قالب شاپ ویز | قالب فروشگاهی HTML</title>
    <!-- Favicon Icon -->
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/images/favicon.png" />
    <!-- Animation CSS -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <!-- Google Font -->
    <!--<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> -->
    <!-- Icon Font CSS -->
    <link
      href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css"
      rel="stylesheet"
      type="text/css" />
    <style>
      html,
      body {
        font-family: Vazirmatn, sans-serif !important;
      }
    </style>

    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/ionicons.min.css" />
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/linearicons.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/simple-line-icons.css" />
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css" />
    <link
      rel="stylesheet"
      href="assets/owlcarousel/css/owl.theme.default.min.css" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!-- jquery-ui CSS -->
    <link rel="stylesheet" href="assets/css/jquery-ui.css" />
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/slick-theme.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!-- RTL CSS -->
    <link rel="stylesheet" href="assets/css/rtl-style.css" />
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
    <?php include 'inclouds/header.php'?>
    <!-- END HEADER -->

    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
      <div class="container">
        <!-- STRART CONTAINER -->
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="page-title">
              <h1>سفارش تکمیل شد</h1>
            </div>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb justify-content-md-end">
              <li class="breadcrumb-item"><a href="#"> خانه</a></li>
              <li class="breadcrumb-item"><a href="#">صفحات</a></li>
              <li class="breadcrumb-item active">سفارش تکمیل شد</li>
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
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="text-center order_complete">
                  <svg style="height: 120px; width: 120px; color: green" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0m-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
                  </svg>
                <div class="heading_s1 mt-2">
                  <h3>سفارش شما تکمیل شد!</h3>
                    <h4 class="mt-2 text-danger">کد پیگیری : <?php echo $_GET['factor'] ?></h4>
                </div>
                <p>
                  از سفارش شما متشکریم! سفارش شما در حال پردازش است و ظرف 3 تا 6
                  ساعت تکمیل خواهد شد. پس از تکمیل سفارش شما یک ایمیل تاییدیه
                  دریافت خواهید کرد.
                </p>
                <a href="shop.php" class="btn btn-fill-out"
                  >ادامه خرید</a
                >
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
                    placeholder="آدرس ایمیل را وارد کن" />
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
