<?php
    require("dbh.php");
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    // Validating the request
    if(isset($_POST['business_account'])){
        $email = strtolower($_POST['email']);
        $pwd = $_POST['password'];
        $cpwd = $_POST['password_confirmation'];
        $name = strtolower($_POST['name']);
        $type = $_POST['type'];
        $username = $_POST['username'];
        $referral = strtolower($_POST['ref']);
        if(empty($email) || empty($pwd) || empty($cpwd) || empty($name) || empty($username)) {
            ?>
                <div class="text-danger">
                    A required field is empty
                </div>
            <?php
        } else if($pwd != $cpwd){
            ?>
                <div class="text-danger">
                    Password Mismatch
                </div>
            <?php
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                ?>
                    <div class="text-danger">Invalid email format</div>
                <?php
            } else {
                $go = "0";
                $checkEmail = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
                if(mysqli_num_rows($checkEmail) == 0){
                    $checkUsername = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
                    if(mysqli_num_rows($checkUsername) == 0){
                        $dp = '/images/dp.jpeg';
                        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                        $time = date_default_timezone_set("Africa/Lagos");
                        $time = date('H:i:s');
                        $date = date_default_timezone_set("Africa/Lagos");
                        $date = date('Y-m-d');
                        $created = date('Y-m-dH:i:s');
                        $updated = date('Y-m-dH:i:s');
                        $token = rand();
                        if(!empty($referral)){
                            $checkUN = mysqli_query($conn, "SELECT * FROM users WHERE username='$referral'");
                            if(mysqli_num_rows($checkUN) == 0 ){
                                ?>
                                    <div class="text-danger">Invalid Referrer</div>
                                <?php
                                $go .= "0";
                            } else {
                                $go .= "1";
                            }
                        } else {
                            $ref = 'admin';
                            $go .= "1";
                        }
                        if($go == '1'){
                            if(mysqli_query($conn, "INSERT INTO users(`username`, `name`, `email`, `ref`, `password`, `dp`, `verified`, `status`,`joinedT`,`joinedD`,`token`,`reset`, `account_type`, `created_at`, `updated_at` ) VALUES('$username','$name','$email','$referral','$hashedPwd','$dp', '0','active','$time','$date','$token','_', '$type', '$created', '$updated') ")){
                                mysqli_query($conn, "INSERT INTO wallet(`username`, `balance`) VALUES('$username','0') ");
                                mysqli_query($conn, "INSERT INTO shipping(`username`) VALUES('$username') ");
                                $mail = new PHPMailer(true); //Argument true in constructor enables exceptions

                                //From Enter Confirmation Code and name
                                $mail->From = "mailer@laciudad.com";
                                $mail->FromName = "Laciudad";

                                //To address and name
                                $mail->addAddress($email, $name);
                                //$mail->addAddress("recepient1@example.com"); //Recipient name is optional

                                //Address to which recipient will reply
                                //$mail->addReplyTo("contact@whatnext.ng", "Reply");

                                //CC and BCC
                                //$mail->addCC("contact@whatnext.ng");
                                //$mail->addBCC("bcc@example.com");

                                //Send HTML or Plain Text email
                                $mail->isHTML(true);

                                $mail->Subject = "Account Verification";
                                $mail->Body = '<html>
                                                    <head>
                                                        <title>Account Verification</title>
                                                    </head>
                                                    <body>
                                                        <div style="background:#ecf0f1; height: 100%;">
                                                            <div style="width:100%;height:50px;background:#1286c6;" ></div>
                                                            <div style="width:80%; margin: auto;padding: 25px;">
                                                                <div>
                                                                    <div style="width:100%">Hello '. $name .'! </div>
                                                                    <br>
                                                                    <br><br>
                                                                    <a href="/verify_email/'.$email.'/'.$token.'" style="margin:auto;width:80px;padding:7px 12px;background:#1286c6;color:white;text-decoration:none;">Verify</a>

                                                                    <p>If you didn&#39;t create an account, please ignore this message</p>
                                                                </div>
                                                            </div>
                                                            <div style="width:100%;height:50px;background:#1286c6;" ><br>
                                                                <div style="text-align: center;">© Laciudad ' . date('Y') . '. All rights reserved</div>
                                                            </div>
                                                        </div>
                                                    </body>
                                                </html>
                                                <style>
                                                    body, html{
                                                        width: 100%;
                                                        background: #ecf0f1;
                                                        font-family: "Helvetica";
                                                    }
                                                </style>';
                                try {
                                    $mail->send();
                                }catch (Exception $e) {
                                    echo 'Verification email not sent, visit verify page to request another';
                                }
                                ?>
                                    <div class="text-success">Sign Up successful</div>
                                    <div class="flash-message">
                                        <p class="success">Account created successfully <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                    </div>
                                    <script>
                                        $(".overlayPage").fadeIn(700);
                                    </script>
                                <?php
                            } else {
                                //echo mysqli_error($conn);
                                ?>
                                    <div class="text-danger">An error occured</div>
                                <?php
                            }
                        }

                    }  else {
                        ?>
                            <div class="text-danger">
                                Username already exists
                            </div>
                        <?php
                    }
                }  else {
                    ?>
                        <div class="text-danger">
                            Email already exists
                        </div>
                    <?php
                }

            }
        }
    } else if(isset($_GET['checkRef1'])){
        $ref = $_GET['ref'];
        $checkUsername = mysqli_query($conn, "SELECT * FROM users WHERE username='$ref'");
        if(!mysqli_num_rows($checkUsername) > 0){
            ?>
                <div class="alert-danger" role="alert">
                    <strong>Error!</strong> Username doesn't exist
                </div>
            <?php
        } else {
            ?>
                <div class="alert-success" role="alert">
                    <strong>Okay!</strong>
                </div>
            <?php
        }
    } else if(isset($_GET['checkUname1'])){
        $uname = strtolower($_GET['uname']);
        $checkUsername = mysqli_query($conn, "SELECT * FROM users WHERE username='$uname'");
        if(mysqli_num_rows($checkUsername) > 0){
            ?>
                <div class="alert-danger" role="alert">
                    <strong>Error!</strong> Username exists
                </div>
            <?php
        } else {
            ?>
                <div class="alert-success" role="alert">
                    <strong>Okay!</strong>
                </div>
            <?php
        }
    }else if(isset($_GET['checkEmail1'])){
        $email = strtolower($_GET['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            ?>
                <div class="text-danger">
                    Invalid Email Format
                </div>
            <?php
        } else {
            $checkEmail = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
            if(mysqli_num_rows($checkEmail) > 0){
                ?>
                    <div class="alert-danger" role="alert">
                        <strong>Error!</strong> Email exists
                    </div>
                <?php
            } else {
                ?>
                    <div class="alert-success" role="alert">
                        <strong>Okay!</strong>
                    </div>
                <?php
            }
        }
    } else if(isset($_POST['verify'])){
        $email = $_POST['email'];
        if(empty($email)){
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Error!</strong> Email required
                </div>
            <?php
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Error!</strong> Invalid Email Format
                </div>
            <?php
        } else {
            $checkEmail = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
            if(mysqli_num_rows($checkEmail) > 0){
                ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Error!</strong> Email doesn't exist in our database
                    </div>
                <?php
            } else {
                ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Error!</strong> Email doesn't exist in our database
                    </div>
                <?php
            }
        }
    }
?>

