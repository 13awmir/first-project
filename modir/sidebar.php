

    <ul class="list-unstyled ps-0">
        <li class="mb-1">
            <button
                    class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#dashboard-collapse"
                    aria-expanded="false">
                کاربران
            </button>
            <div class="collapse" id="dashboard-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li>
                        <a
                                href="user_list.php"
                                class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                        >لیست کاربران</a
                        >
                    </li>
                    <li>
                        <a
                                href="nazarat.php"
                                class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                        >نظرات کاربران</a
                        >
                    </li>

                </ul>
            </div>
        </li>
        <li class="mb-1">
            <button
                    class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#orders-collapse"
                    aria-expanded="false">
                محصولات
            </button>
            <div class="collapse" id="orders-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li>
                        <a
                                href="pr_list.php"
                                class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                        >لیست محصولات</a
                        >
                    </li>
                    <li>
                        <a
                                href="add_cat.php"
                                class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                        >دسته بندی </a
                        >
                    </li>
                    <li>
                        <a
                                href="add_product.php"
                                class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                        >اضافه کردن محصول</a
                        >
                    </li>
                    <li>
                        <a
                                href="order_list.php"
                                class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                        >لیست سفارشات


                            <span class="rounded-5 text-white bg-danger">
                                <?php
                                $select_side = "SELECT * FROM `orders_db` WHERE status = 0";
                                $result_side = mysqli_query($conn, $select_side);
                                $count_side = mysqli_num_rows($result_side);
                                if ($count_side > 0){echo $count_side;}
                                ?>
                            </span></a
                        >
                    </li>

                </ul>
    </ul>
