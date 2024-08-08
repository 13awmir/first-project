<?php
require_once '../inclouds/constant.php';
require_once "../inclouds/checkadmin.php";
$select = "SELECT * FROM `nazarat`";
$result = mysqli_query($conn, $select);
include 'jdf.php';


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
            href="index.php"
            class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
            <svg class="bi pe-none me-2" width="30" height="24">
              <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-5 fw-semibold">لیست کاربران</span>
          </a>
              <?php include 'sidebar.php'?>
        </div>
      </div>
       <div class="col-9">
           <?php if(isset($_GET['update']) && $_GET['update'] == 'success') { ?>
               <p class="mx-auto alert alert-success  text-center  w-75 mt-5"> ویرایش انجام شد</p>
           <?php } ?>
           <?php if(isset($_GET['deleted']) && $_GET['deleted'] == 'ok') { ?>
               <p class="mx-auto alert alert-danger  text-center  w-75 mt-5">  حذف شد</p>
           <?php } ?>
        <table class="table table-primary text-center mt-5 table-striped-columns">
          <tr>

            <th>نام</th>
            <th>ایمیل</th>
            <th>وضعیت</th>
              <th>نظر</th>
            <th>تاریخ ثبت</th>
            <th>عملیات</th>
          </tr>
            <?php $x=1; foreach ($result as $nazar ) {?>
            <tr>

                <td><?php echo $nazar['name']?></td>
                <td><?php echo $nazar['email']?></td>
                <td><?php if($nazar['status'] == 1){echo "بررسی نشده";}elseif ($nazar['status'] == 2){echo "ثبت شده";} ?></td>
                <td><?php echo $nazar['nazar'] ?></td>
                <td>
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
                </td>
                <td>
                    <form action="../inclouds/updatenazar.php" method="post" class="mb-2">
                        <select name="vaziat">
                            <option value="1" <?php if ($nazar['status'] == 1){echo "selected";} ?>>بررسی نشده</option>
                            <option value="2" <?php if ($nazar['status'] == 2){echo "selected";} ?>>تایید شده</option>
                        </select>
                        <input type="hidden" name="nazar_id" value="<?php echo $nazar['id'] ?>">
                        <input type="submit" class="btn btn-success" value="ویرایش">

                    </form>


                    <a class="btn btn-danger"
                            href="../inclouds/delet_nazar.php?id=<?php echo $nazar['id']?>"
                            onclick="return confirm('آیا این نظر حدف شود؟')"
                    >حذف</a
                    ></td>
            </tr>
                <?php  } ?>
        </table>
       </div>
    </main>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/sidebars.js"></script>
  </body>
</html>
