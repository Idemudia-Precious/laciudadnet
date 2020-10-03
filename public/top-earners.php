<?php
    require('dbh.php');

    $checkTop = mysqli_query($conn, "SELECT * FROM wallet ORDER BY balance DESC LIMIT 8");
    if(mysqli_num_rows($checkTop) == 0){
        ?>

        <?php
    } else {
        while($getTop = mysqli_fetch_array($checkTop)){
            $username = $getTop['username'];
            $queryPersonalData = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
            $getPdata = mysqli_fetch_assoc($queryPersonalData);
            $dp = $getPdata['dp'];
            $about = $getPdata['about'];
            ?>
                <div class="d-flex align-items-center side-user">
                    <div class="dropdown-list-image mr-3">
                        <a href="/profile/<?php echo $username; ?>">
                            <img class="rounded-circle sides-img shadow-sm" src="<?php echo $dp; ?>" alt="">
                        </a>
                    </div>
                    <div class="sideuser2 mr-2">
                            <div class="text-truncate truct">
                                <a href="/profile/<?php echo $username; ?>">
                                    <?php echo $username; ?>
                                </a>
                            </div>
                            <div class="truc22"><?php echo $about; ?></div>
                    </div>
                </div>
            <?php
        }
    }

?>


