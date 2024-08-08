<?php
$uzid = intval($_GET['id']);
require_once '../inclouds/constant.php';
require_once "../inclouds/checkadmin.php";

$select = "SELECT * FROM users_db WHERE id = $uzid";
$result = mysqli_query($conn, $select);
$uz = mysqli_fetch_assoc($result);
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
            <span class="fs-5 fw-semibold">ویرایش کاربر</span>
          </a>
              <?php include 'sidebar.php'?>
        </div>
      </div>
       <div class="col-9">
        <form action="updateuserproccess.php" method="post">
          <div class="row">
            <div class="col col-6 mt-3">
              <div class="mb-3">
                <label for="name" class="form-label">نام کاربر</label>
                <input type="text" name="name" value="<?php echo $uz['name'] ?>" class="form-control" id="name" />
              </div>
            </div>
            <div class="col col-6 mt-3">
              <div class="mb-3">
                <label for="email" class="form-label">ایمیل کاربر</label>
                <input type="email" name="email" value="<?php echo $uz['email'] ?>" class="form-control" id="email" />
              </div>
            </div>
            <div class="col col-6 mt-3">
              <div class="mb-3">
                <label for="password" class="form-label">رمز کاربر</label>
                <input type="password" name="ramz" class="form-control" id="password" />
              </div>
            </div>
            <div class="col col-6 mt-3">
              <div class="mb-3">
                <label for="status" class="form-label">عنوان کاربر</label>
                <select id="status" class="form-select" aria-label="Default select example" name="status">
                  <option value="3" <?php if($uz['status'] == 3){echo "selected";} ?>>مدیر</option>
                  <option value="1" <?php if($uz['status'] == 1){echo "selected";} ?>>کاربر عادی</option>
                </select>
              </div>
            </div>
            <div class="col col-12 mt-3 text-center">
                <input type="hidden" name="id" value="<?php echo $uz['id'] ?>" />
              <input type="submit" class="btn btn-outline-success" value="ویرایش" />
            </div>
          </div>
        </form>
       </div>
    </main>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/sidebars.js"></script>
  </body>
</html>
