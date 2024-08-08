<?php
require_once "../inclouds/constant.php";
require_once "../inclouds/checkadmin.php";
$select_cats = "SELECT * FROM cats_db WHERE valed = 0";
$result_cats = mysqli_query($conn, $select_cats);
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
    <link rel="stylesheet" href="asset/css/Vazirmatn-font-face.css" />
  </head>
  <body style="font-family: vazirmatn">
  <!-- header -->
  <?php include 'header.php'?>
  <!-- header -->
    <div class="text-bg-light">
      <div class="row" style="width: 100%">
        <div class="col col-2">
          <div class="flex-shrink-0 text-bg-primary" style="min-height: 100vh">
            <a
              href="/"
              class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
              <svg class="bi pe-none me-2" width="30" height="24">
                <use xlink:href="#bootstrap" />
              </svg>
              <span class="fs-5 fw-semibold">دسته بندی ها</span>
            </a>
              <?php include 'sidebar.php'?>
          </div>
        </div>
        <div class="col-9">
          <form action="../inclouds/addcatsproccess.php" method="post">
            <div class="row">
              <div class="col col-6 mt-3">
                <div class="mb-3">
                  <label for="name"  class="form-label">نام دسته</label>
                  <input type="text" name="catname" class="form-control" id="name" />
                </div>
              </div>
              <div class="col col-6 mt-3">
                <div class="mb-3">
                  <label for="link" class="form-label">لینک دسته</label>
                  <input type="text" name="catlink" class="form-control" id="link" />
                </div>
              </div>
              <div class="col col-12 mt-3">
                <div class="mb-3">
                  <label for="status" class="form-label">والد دسته</label>
                  <select
                          name="valed"
                    id="status"
                    class="form-select"
                    aria-label="Default select example">
                    <option value="0">دسته اصلی</option>
                      <?php foreach ($result_cats as $cat) { ?>
                          <option value="<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></option>
                      <?php }?>
                  </select>
                </div>
              </div>
              <div class="col col-12 mt-3 text-center">
                <input
                  type="submit"
                  class="btn btn-outline-primary col col-8"
                  value="ثبت" />
              </div>
            </div>
          </form>
          <div class="col col-12 mt-5">
            <table class="table table-primary table-striped-columns text-center">

              <tr>
                <th>نام</th>

                <th>عملیات</th>
              </tr>
                <?php foreach ($result_cats as $cat) { ?>
                <tr>
                    <td><?php echo $cat['name'] ?></td>

                    <td><a class="btn btn-primary" href="edit_cat.php?id=<?php echo $cat['id']?>">ویرایش</a>
                        <a onclick="return confirm()" class="btn btn-danger" href="../inclouds/deletcats.php?id=<?php echo $cat['id']?>">حذف</a></td>
                </tr>
                    <?php
                    $catid = $cat['id'];
                    $select_child = "SELECT * FROM cats_db WHERE valed = $catid";
                    $result_child = mysqli_query($conn, $select_child);
                    foreach ($result_child as $child) {
                    ?>
                <tr>
                    <td>--<?php echo $child['name'] ?></td>

                    <td> <a class="btn btn-primary" href="edit_cat.php?id=<?php echo $child['id']?>">ویرایش</a>
                        <a onclick="return confirm()" class="btn btn-danger" href="../inclouds/deletcats.php?id=<?php echo $child['id']?>">حذف</a></td>
                </tr>
                    <?php }?>
                <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/sidebars.js"></script>
  </body>
</html>
