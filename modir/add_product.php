<?php
require_once "../inclouds/constant.php";
require_once "../inclouds/checkadmin.php";
$select_cats = "SELECT * FROM cats_db WHERE valed = 0";
$result_cats = mysqli_query($conn, $select_cats);
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Admin page</title>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"/>
    <link rel="stylesheet" href="asset/css/bootstrap.rtl.min.css"/>
    <link rel="stylesheet" href="asset/css/headers.css"/>
    <link rel="stylesheet" href="asset/css/sidebars.css"/>
    <link rel="stylesheet" href="asset/css/Vazirmatn-font-face.css"/>
</head>
<body style="font-family: vazirmatn">
<!-- header -->
<?php include 'header.php' ?>
<!-- header -->
<div class="text-bg-light">
    <div class="row" style="width: 100%">
        <div class="col col-lg-2 col-sm-12">
            <div class="flex-shrink-0 text-bg-primary" style="min-height: 100%">
                <a
                        href="index.php"
                        class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                    <svg class="bi pe-none me-2" width="30" height="24">
                        <use xlink:href="#bootstrap"/>
                    </svg>
                    <span class="fs-5 fw-semibold">اضافه کردن محصول</span>
                </a>
                <?php include 'sidebar.php' ?>

            </div>

        </div>
        <div class="col-lg-9 col-12">
            <form action="../inclouds/addpr_proccess.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col col-md-6 co-l12 mt-3">
                        <label for="name" class="form-label">نام محصول</label>
                        <input type="text" class="form-control" id="name" name="name"/>
                    </div>
                    <div class="col col-md-6 col-12 mt-3">
                        <label for="link" class="form-label">لینک محصول</label>
                        <input type="text" class="form-control" id="link" name="link"/>
                    </div>
                    <div class="col col-md-6 col-12 mt-3">
                        <div class="mb-3">
                            <label for="cat" class="form-label">دسته بندی </label>
                            <select
                                    name="valed"
                                    id="cat"
                                    class="form-select"
                                    aria-label="Default select example"
                            >
                                <option value="0">دسته اصلی</option>
                                <?php foreach ($result_cats as $cat) { ?>
                                    <option value="<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></option>
                                    <?php
                                    $valedid = $cat['id'];
                                    $select_child = "SELECT * FROM cats_db WHERE valed =  $valedid";
                                    $result_child = mysqli_query($conn, $select_child);
                                    foreach ($result_child as $child) {
                                        ?>
                                        <option value="<?php echo $child['id'] ?>">
                                            --<?php echo $child['name'] ?></option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col col-md-6 col-12 mt-3">
                        <label for="code" class="form-label">کد محصول</label>
                        <input type="text" class="form-control" id="code" name="code"/>
                    </div>
                    <div class="col col-md-6 col-12 mt-3">
                        <label for="price" class="form-label">قیمت محصول</label>
                        <input
                                type="text"
                                class="form-control"
                                id="price"
                                name="price"/>
                    </div>
                    <div class="col col-md-6 col-12 mt-3">
                        <label for="takhfif" class="form-label">قیمت با تخفیف</label>
                        <input
                                type="text"
                                class="form-control"
                                id="takhfif"
                                name="takhfif"/>
                    </div>
                    <div class="col col-12 mt-3">
                        <label for="short_desc" class="form-label">توضیح کوتاه</label>
                        <input
                                type="text"
                                class="form-control"
                                id="short_desc"
                                name="short_desc"/>
                    </div>
                    <div class="col col-12 mt-3">
                        <label for="tozihat" class="form-label">توضیح کامل</label>
                        <textarea
                                class="form-control"
                                id="tozihat"
                                name="tozihat"
                                rows="4"></textarea>
                    </div>
                    <div class="col col-md-6 mt-3">
                        <label for="color" class="form-label">رنگ محصول</label>
                        <input
                                type="text"
                                class="form-control"
                                id="color"
                                name="color"/>
                    </div>
                    <div class="col col-md-6 mt-3">
                        <label for="size" class="form-label">سایز محصول</label>
                        <input type="text" class="form-control" id="size" name="size"/>
                    </div>
                    <div class="col col-12 mt-3">
                        <label for="photo" class="form-label">عکس اصلی محصول</label>
                        <input
                                name="photo"
                                class="form-control"
                                type="file"
                                id="photo"
                        />
                    </div>
                    <div class="col col-12 mt-3">
                        <label for="gallery1" class="form-label">عکس گالری محصول</label>
                        <input
                                class="form-control"
                                type="file"
                                id="gallery1"
                                name="gallery[]"/>
                    </div>
                    <div class="col col-12 mt-3">
                        <label for="gallery2" class="form-label">عکس گالری محصول</label>
                        <input
                                class="form-control"
                                type="file"
                                id="gallery2"
                                name="gallery[]"/>
                    </div>
                    <div class="col col-12 mt-3">
                        <label for="gallery3" class="form-label">عکس گالری محصول</label>
                        <input
                                class="form-control"
                                type="file"
                                id="gallery3"
                                name="gallery[]"/>
                    </div>
                    <div class="col col-12 mt-3">
                        <label for="gallery4" class="form-label">عکس گالری محصول</label>
                        <input
                                class="form-control"
                                type="file"
                                id="gallery4"
                                name="gallery[]"/>
                    </div>
                    <div class="col col-12 mt-3">
                        <lable>
                            موجود
                            <input class="inline-block" type="radio" name="status" value="1"/>
                        </lable>
                        <lable>
                            اتمام موجودی
                            <input class="inline-block" type="radio" name="status" value="0"/>
                        </lable>
                    </div>
                </div>
                <div class="col col-12 text-center my-5">
                    <input
                            type="submit"
                            value="ثبت محصول"
                            class="btn btn-outline-primary col col-5"/>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="asset/js/bootstrap.bundle.min.js"></script>
<script src="asset/js/sidebars.js"></script>
</body>
</html>
