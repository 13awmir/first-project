<?php
require_once "../inclouds/constant.php";
require_once "../inclouds/checkadmin.php";
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" href="asset/css/bootstrap.rtl.min.css" />
    <link rel="stylesheet" href="asset/css/headers.css" />
    <link rel="stylesheet" href="asset/css/sidebars.css" />
    <link rel="stylesheet" href="asset/css/Vazirmatn-font-face.css" />
  </head>
  <body style="font-family: vazirmatn;">
  <!-- header -->
  <?php include 'header.php'?>
  <!-- header -->
    <div class="row" style="width: 100%;">
        <div class="col col-2">
            <div
                    class="flex-shrink-0  text-bg-primary"
                    style=" min-height: 100vh">
                <a
                        href="index.php"
                        class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                    <svg class="bi pe-none me-2" width="30" height="24">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <span class="fs-5 fw-semibold">داشبورد</span>
                </a>
                <?php include 'sidebar.php'?>
            </div>
        </div>
        <div class="col col-9">
            <div class="row">
                <div class="alert alert-primary col col-5 mt-5 text-center mx-2"><h4>تعداد کل سفارشات  </h4>
                    <h4>
                        <?php
                        $select_order = "SELECT * FROM `orders_db`";
                        $result_order = mysqli_query($conn, $select_order);
                        $count_order = mysqli_num_rows($result_order);
                        echo number_format($count_order);
                        ?>
                    </h4>

                </div>
                <div class="alert alert-success col col-5 mt-5 text-center mx-2"><h4>تعداد سفارشات ارسال شده  </h4>
                    <h4>
                        <?php
                        $select_ersal = "SELECT * FROM `orders_db` WHERE status = 2";
                        $result_ersal = mysqli_query($conn, $select_ersal);
                        $count_ersal = mysqli_num_rows($result_ersal);
                        echo number_format($count_ersal);
                        ?>
                    </h4>

                </div>
                <div class="alert alert-info col col-5 mt-5 text-center mx-2"><h4>تعداد سفارشات بررسی شده  </h4>
                    <h4>
                        <?php
                        $select_check = "SELECT * FROM `orders_db` WHERE status = 1";
                        $result_check = mysqli_query($conn, $select_check);
                        $count_check = mysqli_num_rows($result_check);
                        echo number_format($count_check);
                        ?>
                    </h4>

                </div>
                <div class="alert alert-danger col col-5 mt-5 text-center mx-2"><h4>تعداد سفارشات درانتظار بررسی   </h4>
                    <h4>
                        <?php
                        $select_tocheck = "SELECT * FROM `orders_db` WHERE status = 0";
                        $result_tocheck = mysqli_query($conn, $select_tocheck);
                        $count_tocheck = mysqli_num_rows($result_tocheck);
                        echo number_format($count_tocheck);
                        ?>
                    </h4>

                </div>
            </div>
        </div>

    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/sidebars.js"></script>
  </body>
</html>
