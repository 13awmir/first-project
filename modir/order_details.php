<?php
require_once "../inclouds/constant.php";
require_once "../inclouds/checkadmin.php";
include "jdf.php";
$order_id = $_GET["id"];
$select_order = "SELECT * FROM `orders_db` WHERE id = '$order_id'";
$result_order = mysqli_query($conn, $select_order);
$row_order = mysqli_fetch_array($result_order);
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin page</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />
    <link rel="stylesheet" href="asset/css/bootstrap.rtl.min.css" />
    <link rel="stylesheet" href="asset/css/headers.css" />
    <link rel="stylesheet" href="asset/css/sidebars.css" />
    <link rel="stylesheet" href="asset/css/Vazirmatn-font-face.css">
  </head>
  <body style="font-family: vazirmatn;">
    <?php include 'header.php'?>
    <main class="text-bg-light">
      <div class="row" style="width: 100%;">
        <div class="col col-2">
          <div
          class="flex-shrink-0  text-bg-primary"
          style=" min-height: 100vh">
          <a
            href="/"
            class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
            <svg class="bi pe-none me-2" width="30" height="24">
              <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-5 fw-semibold">جزعیات سفارش</span>
          </a>
          <?php include 'sidebar.php'?>
        </div>
      </div>
       <div class="col-9">
        <table
          class="table table-primary text-center mt-5 table-striped-columns">
          <tr>
              <th>نام کاربر : </th>
              <td>
                  <?php
                  $user_id = $row_order["user_id"];
                  $select_user = "SELECT * FROM `users_db` WHERE id = '$user_id'";
                  $result_user = mysqli_query($conn, $select_user);
                  $row_user = mysqli_fetch_array($result_user);
                  echo $row_user['name'];
                  ?>
              </td>
          </tr>
            <tr>
                <th>وضعیت سفارش : </th>
                <td>
                    <?php
                    if ($row_order["status"] == 0) {
                        echo "<span class='bg-danger p-1 rounded-3 text-white'>درانتظار بررسی</span>";
                    }elseif ($row_order["status"] == 1) {
                        echo "<span class='bg-info text-white p-1 rounded-3'>بررسی شده</span>";
                    }elseif ($row_order["status"] == 2) {
                        echo "<span class='bg-success text-white p-1 rounded-3'>ارسال شده</span>";
                    }
                    echo "<br/>";
                    ?>
                </td>
            </tr>
            <tr>
                <th>تعین وضعیت سفارش : </th>
                <td>
                    <form action="../inclouds/statusedit.php" method="post">
                        <select name="vaziat">
                            <option <?php if($row_order['status']  == 0){echo "selected";} ?> value="0">درانتظار بررسی</option>
                            <option <?php if($row_order['status']  == 1){echo "selected";} ?> value="1">برسی شده</option>
                            <option <?php if($row_order['status']  == 2){echo "selected";} ?> value="2">ارسال شده</option>
                        </select>
                        <input type="hidden" name="orderid" value="<?php echo $row_order["id"] ?>">
                        <button type="submit" class="btn btn-primary">ویرایش</button>
                    </form>
                </td>
            </tr>
            <tr>
                <th>تاریخ ثبت سفارش : </th>
                <td class="text-center">

                            <?php

                            $date = explode( ' ',$row_order['date']);
                            $time = $date[1];
                            $date = $date[0];
                            $date = explode('-',$date);
                            $year = $date[0];
                            $month = $date[1];
                            $day = $date[2];
                            echo gregorian_to_jalali( $year , $month , $day , '/' );
                            ?>

                </td>
            </tr>
            <tr>
                <th>جزعیات سفارش : </th>
                <td>
                    <?php
                    $order_array = json_decode($row_order["order_items"], true);
                    foreach ($order_array as $item) {
                        $product_id = $item["pr_id"];
                        $select_product = "SELECT * FROM `products_db` WHERE id = '$product_id'";
                        $result_product = mysqli_query($conn, $select_product);
                        $row_product = mysqli_fetch_assoc($result_product);
                        echo $row_product["name"];
                        echo "<br/>";
                        echo "تعداد :";
                        echo $item["tedad"];
                        echo "<br/>";
                        echo "رنگ : ";
                        echo $item["color"];
                        echo "<br/>";
                        echo "سایز : ";
                        echo $item["size"];
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th>آدرس برای ارسال : </th>
                <td>
                    <?php
                    $address_array = json_decode($row_order["order_details"], true);
                    echo "استان : ";
                    echo $address_array["state"];
                    echo "<br/>";
                    echo "شهر : ";
                    echo $address_array["city"];
                    echo "<br/>";
                    echo "آدرس دقیق : ";
                    echo $address_array["address"];
                    echo "<br/>";
                    echo "کدپستی : ";
                    echo $address_array['zipcode'];
                    echo "<br/>";
                    echo "تلفن : ";
                    echo $address_array['phone'];

                    ?>
                </td>
            </tr>
        </table>
       </div>
    </main>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/sidebars.js"></script>
  </body>
</html>
