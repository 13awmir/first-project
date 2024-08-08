<?php
require_once '../inclouds/constant.php';
require_once "../inclouds/checkadmin.php";
$select = "SELECT * FROM `orders_db` ORDER BY `id` DESC";
$result_order = mysqli_query($conn, $select);

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
  <!-- header -->
   <?php include 'header.php'?>
  <!-- header -->
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
            <span class="fs-5 fw-semibold">لیست سفارشات</span>
          </a>
              <?php include 'sidebar.php'?>
        </div>
      </div>
       <div class="col-9">
        <table
          class="table table-primary text-center mt-5 table-striped-columns col-sm-12">
          <tr>
              <th>نام کاربر</th>
              <th>وضعیت سفارش</th>
              <th>تعداد سفارش</th>
              <th>نحوه پرداخت</th>
              <th>قیمت</th>
              <th>جزعیات</th>
          </tr>
            <?php
            foreach ($result_order as $order) {
            $user_id = $order['user_id'];
            $select = "SELECT * FROM `users_db` WHERE id='$user_id'";
            $result = mysqli_query($conn, $select);
            $row = mysqli_fetch_assoc($result);

            $select_cont = "SELECT * FROM `orders_db` WHERE user_id='$user_id'";
            $result_cont = mysqli_query($conn, $select_cont);
            $row_cont = mysqli_fetch_assoc($result_cont);
            $count = json_decode($row_cont['order_items'],true)

            ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
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
                <td><?php
                    foreach ($count as $item) {
                        echo $item['tedad'];
                    }
                    ?></td>
                <td>
                    <?php if ($order['payment_method'] == "option3") {
                        echo "مستقیم";
                    } elseif ($order['payment_method'] == "option4") {
                        echo "پرداخت در محل";
                    } elseif ($order['payment_method'] == "option5") {
                        echo "پی پال";
                    }
                    ?>
                </td>
                <td><?php echo number_format($order['price']) ?></td>
                <td><a class="btn btn-outline-primary" href="order_details.php?id=<?php echo $order['id']?>">جزعیات سفارش</a></td>
            </tr>
            <?php }?>
        </table>
       </div>
    </main>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/sidebars.js"></script>
  </body>
</html>
