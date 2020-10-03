
<?php
    require("dbh.php");

    if(isset($_POST['saveAbSk'])){
        $about = $_POST['about'];
        $skills = $_POST['skills'];
        $interest = $_POST['Interests'];
        $userOnline = $_POST['me'];
        if(!empty($about) || !empty($skills)){
            if(mysqli_query($conn, "UPDATE users SET about='$about', skills='$skills', interests='$interest' WHERE username='$userOnline'")){
                ?>
                    <script>
                        alert("Details Uploaded");
                    </script>
                <?php
            } else {
                ?>
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Warning!!!</strong> An error occured.
                    </div>
                <?php
            }
        }
    }

    if(isset($_POST['saveOT'])){
        $name = $_POST['name'];
        $phoneNumber = $_POST['phoneNumber'];
        $website = $_POST['website'];
        $gender = $_POST['gender'];
        $address = $_POST['Address'];
        $country = $_POST['country'];
        $userOnline = $_POST['me'];
        if(empty($name)){
            ?>
                <div class="alert alert-danger" style="text-align: left">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Warning!!!</strong> Name cannot be empty.
                </div>
            <?php
        } else {
            if(mysqli_query($conn, "UPDATE users SET phone='$phoneNumber', website='$website', gender='$gender', country='$country', address='$address' WHERE username='$userOnline'")){
                ?>
                    <script>
                        alert("Details Uploaded");
                    </script>
                <?php
            } else {
                ?>
                    <div class="alert alert-danger" class="text-align: left">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Warning!!!</strong> An error occured.
                    </div>
                <?php
            }
        }
    }


?>
