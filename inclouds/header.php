<header class="header_wrap fixed-top header_with_topbar">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-end">
                        <ul class="header_list">
                            <?php
                            if (session_status() == PHP_SESSION_NONE) {
                                session_start();
                            }

                            if (!isset($_SESSION['login']) && !isset($_SESSION['userid'])) { ?>
                                <li>
                                    <a href="login.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0z"/>
                                            <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                                        </svg><span>ورود</span></a>
                                </li>
                            <?php } else { ?>
                                <li>
                                    <a href="my-account.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                                            <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5"/>
                                            <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z"/>
                                        </svg><span>حساب کاربری</span></a>
                                </li>
                            <?php } ?>

                            <?php
                            require_once 'constant.php';
                            if (isset($_SESSION['login'])) {
                                $ID = $_SESSION['userid'];
                                $select = "SELECT * FROM users_db WHERE id = '$ID'";
                                $result = mysqli_query($conn, $select);
                                $user = mysqli_fetch_assoc($result);

                            }
                            ?>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.php">
                    <img
                            class="logo_light"
                            src="assets/images/logo_light.png"
                            alt="logo"/>
                    <img
                            class="logo_dark"
                            src="assets/images/logo_dark.png"
                            alt="logo"/>
                </a>
                <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-expanded="false">
                    <span class="ion-android-menu"></span>
                </button>
                <div
                        class="collapse navbar-collapse justify-content-end"
                        id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="dropdown">
                            <a


                                    class="nav-link"
                                    href="index.php">
                                خانه</a
                            >

                        </li>

                        <li class="dropdown dropdown-mega-menu">
                            <a
                                    class="dropdown-toggle nav-link"
                                    href="#"
                                    data-bs-toggle="dropdown"
                            >محصولات</a
                            >
                            <div class="dropdown-menu">
                                <ul class="mega-menu d-lg-flex">
                                    <?php
                                    $select_cats = "SELECT * FROM cats_db WHERE valed = 0";
                                    $CATS = mysqli_query($conn, $select_cats);
                                    foreach ($CATS as $cat) {
                                        ?>
                                        <li class="mega-menu-col col-lg-3">
                                            <ul>
                                                <li class="dropdown-header"><?php echo $cat['name'] ?></li>
                                                <?php
                                                $valedid = $cat['id'];
                                                $select_child = "SELECT * FROM cats_db WHERE valed = $valedid";
                                                $children = mysqli_query($conn, $select_child);
                                                foreach ($children as $child) {
                                                    ?>
                                                    <li>
                                                        <a
                                                                class="dropdown-item nav-link nav_item"
                                                                href="categury.php?link=<?php echo $child['link'] ?>"
                                                        ><?php echo $child['name'] ?></a
                                                        >
                                                    </li>
                                                <?php } ?>

                                            </ul>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <div class="d-lg-flex menu_banners row g-3 px-3">
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img
                                                    src="assets/images/menu_banner1.jpg"
                                                    alt="menu_banner1"/>
                                            <div class="banne_info">
                                                <h6>10% تخفیف</h6>
                                                <h4>محصول جدید</h4>
                                                <a href="#">اکنون خرید کنید</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img
                                                    src="assets/images/menu_banner2.jpg"
                                                    alt="menu_banner2"/>
                                            <div class="banne_info">
                                                <h6>15% تخفیف</h6>
                                                <h4>مد مردانه</h4>
                                                <a href="#">اکنون خرید کنید</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img
                                                    src="assets/images/menu_banner3.jpg"
                                                    alt="menu_banner3"/>
                                            <div class="banne_info">
                                                <h6>23% تخفیف</h6>
                                                <h4>مد کودکان</h4>
                                                <a href="#">اکنون خرید کنید</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown dropdown-mega-menu">
                            <a
                                    class=" nav-link"
                                    href="shop.php"

                            >فروشگاه</a
                            >

                        </li>
                        <li>
                            <a class="nav-link nav_item" href="contact.html">
                                تماس با ما</a
                            >
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li>
                        <a href="javascript:void(0);" class="nav-link search_trigger"
                        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search-heart-fill" viewBox="0 0 16 16">
                                <path d="M6.5 13a6.47 6.47 0 0 0 3.845-1.258h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1A6.47 6.47 0 0 0 13 6.5 6.5 6.5 0 0 0 6.5 0a6.5 6.5 0 1 0 0 13m0-8.518c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018"/>
                            </svg></i
                            ></a>
                        <div class="search_wrap">
                  <span class="close-search"
                  ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-x-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708"/>
</svg></span>
                            <form method="get" action="search.php">
                                <input
                                        name="search"
                                        type="text"
                                        placeholder="جستجو"
                                        class="form-control"
                                        id="search_input"/>
                                <button type="submit" class="search_icon">
                                    <i class="ion-ios-search-strong"></i>
                                </button>
                            </form>
                        </div>
                        <div class="search_overlay"></div>
                    </li>
                    <?php
                    if (isset($_SESSION['userid'])) {
                        $userid = $_SESSION['userid'];
                        $select_cart = "SELECT * FROM cart_db WHERE user_id='$userid'";
                        $result_cart = mysqli_query($conn, $select_cart);
                        $cont_pr = mysqli_num_rows($result_cart);
                    }

                    ?>
                    <li class="dropdown cart_dropdown">

                        <a
                                class="nav-link cart_trigger"
                                href="#"
                                data-bs-toggle="dropdown"
                        >سبد خرید
                            <span class="cart_count"><?php if (isset($cont_pr)) {
                                    echo $cont_pr;
                                } else {
                                    echo "0";
                                } ?></span></a>

                        <?php if (isset($_SESSION['userid']) && $cont_pr > 0) { ?>
                            <div class="cart_box dropdown-menu dropdown-menu-right">

                                <ul class="cart_list">
                                    <?php
                                    foreach ($result_cart as $cart) {
                                        $prid = $cart['pr_id'];
                                        $select_pr = "SELECT * FROM products_db WHERE id='$prid'";
                                        $result_pr = mysqli_query($conn, $select_pr);
                                        $row_pr = mysqli_fetch_assoc($result_pr);
                                        $fullprice = 0;
                                        ?>

                                        <li>
                                            <a href="#" class="item_remove"
                                            ><i class="ion-close"></i
                                                ></a>
                                            <a href="#"
                                            ><img
                                                        src="uploads/<?php echo $row_pr['photo'] ?>"
                                                        alt="cart_thumb1"/><a><?php echo $row_pr['name'] ?></a
                                                >
                                                <span class="cart_quantity">x
                        <?php echo $cart['tedad'] ?>
                        <span class="cart_amount">
                          </span>
                        <span><?php
                            $jamprice = $row_pr['price'] * $cart['tedad'];
                            echo number_format($jamprice);
                            $fullprice += $jamprice;
                            ?></span>
                                        </li>
                                    <?php } ?>

                                </ul>

                                <div class="cart_footer">
                                    <p class="cart_total">
                                        <strong>جمع کل:</strong>
                                        <span class="cart_price">
                        </span
                        >تومان<?php
                                        echo number_format($fullprice);
                                        ?>
                                    </p>
                                    <p class="cart_buttons">
                                        <a href="shop-cart.php" class="btn btn-fill-line rounded-0 view-cart"
                                        >مشاهده سبد خرید</a
                                        ><a href="checkout.php" class="btn btn-fill-out rounded-0 checkout">
                                            تسویه حساب</a
                                        >
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>