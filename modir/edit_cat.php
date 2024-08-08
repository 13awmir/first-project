<?php
require_once "../inclouds/constant.php";
require_once "../inclouds/checkadmin.php";
$select_cats = "SELECT * FROM cats_db WHERE valed = 0";
$result_cats = mysqli_query($conn, $select_cats);
$idcat = $_GET["id"];
$select_categuri = "SELECT * FROM cats_db WHERE id = $idcat";
$result_categuri = mysqli_query($conn, $select_categuri);
$categuri = mysqli_fetch_assoc($result_categuri);
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
              href="index.php"
              class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
              <svg class="bi pe-none me-2" width="30" height="24">
                <use xlink:href="#bootstrap" />
              </svg>
              <span class="fs-5 fw-semibold">ویرایش دسته بندی</span>
            </a>
              <?php include 'sidebar.php'?>
          </div>
        </div>
        <div class="col-9">
          <form action="">
            <div class="row">
              <div class="col col-6 mt-3">
                <div class="mb-3">
                  <label for="name" class="form-label"></label>
                  <input type="text" name="catname" value="<?php echo $categuri['name'] ?>" class="form-control" id="name" />
                </div>
              </div>
              <div class="col col-6 mt-3">
                <div class="mb-3">
                  <label for="link" class="form-label"></label>
                  <input type="text" name="catlink" value="<?php echo $categuri['link'] ?>" class="form-control" id="link" />
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
                          <option value="<?php echo $cat['id'] ?>" <?php if($categuri['valed'] == $cat['id']){echo "selected";} ?>><?php echo $cat['name'] ?></option>
                      <?php }?>
                  </select>
                </div>
              </div>
              <div class="col col-12 mt-3 text-center">
                  <input type="hidden" name="catid" value="<?php echo $idcat ?>">
                <input
                  type="submit"
                  class="btn btn-outline-primary col col-8"
                  value="ویرایش" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/sidebars.js"></script>
  </body>
</html>
