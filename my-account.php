<?php
require_once("inclouds/constant.php");
include "modir/jdf.php";
session_start();
if (!isset($_SESSION['login']) && !isset($_SESSION['userid'])) {
    header("Location: login.php");
    exit();
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
              <h1>حساب من</h1>
            </div>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb justify-content-md-end">
              <li class="breadcrumb-item"><a href="#"> خانه</a></li>
              <li class="breadcrumb-item"><a href="#">صفحات</a></li>
              <li class="breadcrumb-item active">حساب من</li>
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
            <?php if(isset($_GET['update']) && $_GET['update'] == 'success') {?>
            <p class="alert alert-success text-center">ویرایش حساب با موفقیت انجام شد</p>
            <?php }?>
            <?php if(isset($_GET['pass']) && $_GET['pass'] == 'incorrect') {?>
                <p class="alert alert-danger text-center">رمز عبور اشتباه است</p>
            <?php }?>
            <?php if(isset($_GET['newpass']) && $_GET['newpass'] == 'incorrect') {?>
                <p class="alert alert-danger text-center">رمز عبور جدید یکسان نیستند</p>
            <?php }?>
          <div class="row">
            <div class="col-lg-3 col-md-4">
              <div class="dashboard_menu">
                <ul class="nav nav-tabs flex-column" role="tablist">
                  <li class="nav-item">
                    <a
                      class="nav-link فعال"
                      id="dashboard-tab"
                      data-bs-toggle="tab"
                      href="#dashboard"
                      role="tab"
                      aria-controls="dashboard"
                      aria-selected="false "
                      ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                            <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2M3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
                            <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.95 11.95 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0"/>
                        </svg>   داشبورد</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="orders-tab"
                      data-bs-toggle="tab"
                      href="#orders"
                      role="tab"
                      aria-controls="orders"
                      aria-selected="false"
                      ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708"/>
                        </svg>   سفارشات</a
                    >
                  </li>

                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="account-detail-tab"
                      data-bs-toggle="tab"
                      href="#account-detail"
                      role="tab"
                      aria-controls="account-detail"
                      aria
                      -selected="true"
                      ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-receipt" viewBox="0 0 16 16">
                            <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z"/>
                            <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5"/>
                        </svg>   جزئیات حساب</a
                    >
                  </li>
                    <?php if($user['status'] == 3){ ?>
                        <li class="nav-item">
                            <a
                                    class="nav-link"
                                    id="account-detail-tab"
                                    
                                    href="modir/index.php"
                                    role="tab"
                                    aria-controls="account-detail"
                                    aria
                                    -selected="true"
                            ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-lock" viewBox="0 0 16 16">
                                    <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1"/>
                                </svg>    پنل مدیریت</a
                            >
                        </li>
                    <?php } ?>

                  <li class="nav-item">
                    <a class="nav-link" href="inclouds/logout.php"
                      ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                        </svg>   خروج</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-9 col-md-8">
              <div class="tab-content dashboard_content">
                <div
                  class="tab-pane fade active show"
                  id="dashboard"
                  role="tabpanel"
                  aria-labelledby="dashboard-tab">
                  <div class="card">
                    <div class="card-header">
                      <h3>داشبورد</h3>
                    </div>
                    <div class="card-body text-center">
                      <div class="row">
                          <div class="col col-6">
                              
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="orders"
                  role="tabpanel"
                  aria-labelledby="orders-tab">
                  <div class="card">
                    <div class="card-header">
                      <h3>سفارشات</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>سفارش</th>
                                <th>نام</th>
                              <th>تاریخ</th>
                              <th>وضعیت</th>
                              <th>مجموع</th>
                                <th>کد پیگیری</th>

                            </tr>
                          </thead>
                          <tbody>
                          <?php
                          $userrid = $_SESSION['userid'];
                          $select_order = "SELECT * FROM `orders_db` WHERE `user_id` = $userrid ORDER BY `id` DESC";
                          $result_order = mysqli_query($conn, $select_order);
                          foreach ($result_order as $order) {
                          ?>
                            <tr>
                              <td><?php echo $order['id'] ?></td>
                                <td>
                                    <?php
                                    $order_array = json_decode($order["order_items"], true);
                                    foreach ($order_array as $item) {
                                        $product_id = $item["pr_id"];
                                    }
                                        $select_product = "SELECT * FROM `products_db` WHERE id = '$product_id'";
                                        $result_product = mysqli_query($conn, $select_product);
                                        $row_product = mysqli_fetch_assoc($result_product);
                                        echo $row_product['name'];

                                    ?>
                                </td>
                              <td>
                                  <?php

                                  $date = explode( ' ',$order['date']);
                                  $time = $date[1];
                                  $date = $date[0];
                                  $date = explode('-',$date);
                                  $year = $date[0];
                                  $month = $date[1];
                                  $day = $date[2];
                                  echo gregorian_to_jalali( $year , $month , $day , '/' );
                                  ?>
                              </td>
                              <td>
                                  <?php if ($order['status'] == 0){
                                      echo "<span class='bg-danger p-1 rounded-3 text-white'>درانتظار بررسی</span>";
                                  } elseif ($order['status'] == 1) {
                                      echo "<span class='bg-info p-1 rounded-3'>بررسی شده</span>";
                                  }elseif ($order['status'] == 2) {
                                      echo "<span class='bg-success p-1 rounded-3 text-white'>ارسال شده</span>";
                                  }
                                  ?>
                              </td>
                              <td><?php echo number_format($order['price']) ?></td>
                                <td><?php echo $order['peygiri'] ?></td>

                            </tr>
                          <?php } ?>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="address"
                  role="tabpanel"
                  aria-labelledby="address-tab">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="card mb-3 mb-lg-0">
                        <div class="card-header">
                          <h3>آدرس صورتحساب</h3>
                        </div>
                        <div class="card-body">
                          <address>
                            خانه شماره 15<br />جاده شماره 1<br />بلوک #C
                            <br />انگالی <br />
                            ودورا <br />1212
                          </address>
                          <p>نیویورک</p>
                          <a href="#" class="btn btn-fill-out">ویرایش</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="card">
                        <div class="card-header">
                          <h3>آدرس حمل و نقل</h3>
                        </div>
                        <div class="card-body">
                          <address>
                            خانه شماره 15<br />جاده شماره 1<br />بلوک #C
                            <br />انگالی <br />
                            ودورا <br />1212
                          </address>
                          <p>نیویورک</p>
                          <a href="#" class="btn btn-fill-out">ویرایش</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="account-detail"
                  role="tabpanel"
                  aria-labelledby="account-detail-tab">
                  <div class="card">
                    <div class="card-header">
                      <h3>ویرایش حساب</h3>
                    </div>
                    <div class="card-body">
                      <p>
                        از قبل حساب کاربری دارید؟
                        <a href="#">به جای آن وارد سیستم شوید!</a>
                      </p>
                        <?php
                        $userid = $_SESSION['userid'];
                        $select_user = "SELECT * FROM users_db WHERE id = '$userid'";
                        $result_user = mysqli_query($conn, $select_user);
                        $user = mysqli_fetch_assoc($result_user);
                        ?>
                      <form method="post" action="inclouds/updateuserproccess.php">
                        <div class="row">
                          <div class="form-group col-md-12 mb-3">
                            <label>نام <span class="required">*</span></label>
                            <input
                              value="<?php echo $user['name'] ?>"
                              class="form-control"
                              name="name"
                              type="text" />
                          </div>
                          <div class="form-group col-md-12 mb-3">
                            <label
                              >آدرس ایمیل <span class="required">*</span></label
                            >
                            <input
                              value="<?php echo $user['email'] ?>"
                              class="form-control"
                              name="email"
                              type="email" />
                          </div>
                          <div class="form-group col-md-12 mb-3">
                            <label
                              >گذرواژه فعلی
                              <span class="required">*</span></label
                            >
                            <input

                              class="form-control"
                              name="password"
                              type="password" />
                          </div>
                          <div class="form-group col-md-12 mb-3">
                            <label
                              >گذرواژه جدید
                              <span class="required">*</span></label
                            >
                            <input

                              class="form-control"
                              name="npassword"
                              type="password" />
                          </div>
                          <div class="form-group col-md-12 mb-3">
                            <label
                              >تأیید رمز عبور
                              <span class="required">*</span></label
                            >
                            <input

                              class="form-control"
                              name="cpassword"
                              type="password" />
                          </div>
                          <div class="col-md-12">
                            <button
                              type="submit"
                              class="btn btn-fill-out"
                              name="submit"
                              value="Submit">
                              ذخیره
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
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
