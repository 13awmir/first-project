<header class="pt-3 border-bottom text-bg-dark" style="direction: ltr">
    <div
        class="container-fluid d-grid gap-3 align-items-center"
        style="grid-template-columns: 1fr 2fr">
        <div class="dropdown col-1">
            <div class="flex-shrink-0 dropdown">
                <a
                    href="#"
                    class="d-block link-body-emphasis text-decoration-none dropdown-toggle text-white"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <?php

                    $userid = $_SESSION['userid'];
                    $select_useradmin = "SELECT * FROM `users_db` WHERE id = '$userid'";
                    $result_useradmin = mysqli_query($conn, $select_useradmin);
                    $row_useradmin = mysqli_fetch_assoc($result_useradmin);
                    echo $row_useradmin['name'];
                    ?>
                </a>
                <ul class="dropdown-menu text-small shadow">

                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="../my-account.php">خروج</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>