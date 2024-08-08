<?php require_once 'inclouds/constant.php';
session_start();
$userid= $_SESSION['userid'];
$select_cart = "SELECT * FROM cart_db WHERE user_id='$userid'";
$result_cart = mysqli_query($conn, $select_cart);
$cont_pr = mysqli_num_rows($result_cart);
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
              <h1>سبد خرید</h1>
            </div>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb justify-content-md-end">
              <li class="breadcrumb-item"><a href="#"> خانه</a></li>
              <li class="breadcrumb-item"><a href="#">صفحات</a></li>
              <li class="breadcrumb-item active">سبد خرید</li>
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
              <?php if (isset($_GET['deleted']) && $_GET['deleted'] == 'true') { ?>
              <div class="col-12 alert alert-warning text-center"><p class="text-black">محصول از سبد خرید حذف شد</p></div>
              <?php } ?>
            <div class="col-12">
              <div class="table-responsive shop_cart_table">
                <table class="table">
                  <thead>
                  <?php
                  $fullprice = 0;
                  foreach ($result_cart as $cart) {
                  $prid = $cart['pr_id'];
                  $select_pr = "SELECT * FROM products_db WHERE id='$prid'";
                  $result_pr = mysqli_query($conn, $select_pr);
                  $row_pr = mysqli_fetch_assoc($result_pr);
                  ?>
                    <tr>
                      <th class="product-thumbnail">&nbsp;</th>
                      <th class="product-name">محصول</th>
                      <th class="product-price">قیمت</th>
                      <th class="product-quantity">تعداد</th>
                      <th class="product-subtotal">مجموع</th>
                      <th class="product-remove">حذف</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td class="product-thumbnail">
                        <a href="#"
                          ><img
                            src="uploads/<?php echo $row_pr['photo'] ?>"
                            alt="product1"
                        /></a>
                      </td>
                      <td class="product-name" data-title="Product">
                        <a href="#"><?php echo $row_pr['name'] ?></a>
                      </td>
                      <td class="product-price" data-title="Price"><?php echo number_format($row_pr['price']) ?></td>
                      <td class="product-quantity" data-title="Quantity">
                          <?php echo $cart['tedad'] ?>
                      </td>
                      <td class="product-subtotal" data-title="Total">
                        <?php
                        $jamkol = $cart['tedad'] * $row_pr['price'];
                        echo number_format($jamkol);
                        ?>
                      </td>
                      <td class="product-remove" data-title="Remove">
                          <a onclick="return confirm('آیا محصول از سبد حذف شود؟')" href="inclouds/delletcart.php?id=<?php echo $cart['id'] ?>">حذف</a>
                      </td>
                    </tr>
                    <?php $fullprice += $jamkol; } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="6" class="px-0">
                        <div class="row g-0 align-items-center">
                          <div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                            <div class="coupon field_form input-group">
                              <input
                                type="text"
                                value=""
                                class="form-control form-control-sm"
                                placeholder="کد کوپن را وارد کنید.." />
                              <div class="input-group-append">
                                <button
                                  class="btn btn-fill-out btn-sm"
                                  type="submit">
                                  اعمال کد تخفیف
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-8 col-md-6 text-start text-md-end">
                            <button
                              class="btn btn-line-fill btn-sm"
                              type="submit">
                              به روز رسانی سبد خرید
                            </button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="medium_divider"></div>
              <div class="divider center_icon">
                <i class="ti-shopping-cart-full"></i>
              </div>
              <div class="medium_divider"></div>
            </div>
          </div>
            <?php if ($cont_pr > 0 ) { ?>
          <div class="row">

            <div class="col-md-12">
              <div class="border p-3 p-md-4">
                <div class="heading_s1 mb-3">
                  <h6>مجموع سبد خرید</h6>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td class="cart_total_label">جمع سبد خرید</td>
                        <td class="cart_total_amount"><?php echo number_format($fullprice) ?> تومان</td>
                      </tr>
                      <tr>
                        <td class="cart_total_label">حمل و نقل</td>
                        <td class="cart_total_amount">ارسال رایگان</td>
                      </tr>
                      <tr>
                        <td class="cart_total_label">مجموع</td>
                        <td class="cart_total_amount">
                          <strong><?php echo number_format($fullprice) ?> تومان</strong>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <a href="checkout.php"  class="btn btn-fill-out"
                  >برای تسویه حساب ادامه دهید</a
                >
              </div>
            </div>
          </div>
            <?php } ?>
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
