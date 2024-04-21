<?php
require_once("../config/config.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lot=$_POST['lot'];
        $code=$_POST['code'];
        $sql1="select done from reservations where lot_number='$lot' and code='$code' and done='1'";
        $sql1=mysqli_query( $mysqli,$sql1);
        if(mysqli_num_rows($sql1) == 1){
            echo "<script>alert('Already verified');</script>";
            header("refresh:1; url=verify.php");;
            
        }else{
    //prevent posting blank value for first name
    $error = 0;
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
    } else {
        $error = 1;
        $err = "Enter Your Email";
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $err = 'Invalid Email';
    }
    $checkEmail = mysqli_query($mysqli, "SELECT `email` FROM `clients` WHERE `email` = '" . $_POST['email'] . "'") or exit(mysqli_error($mysqli));
    $checknum = mysqli_query($mysqli, "SELECT `client_phone` FROM `reservations` WHERE `client_phone` = '" . $_POST['phone'] . "'") or exit(mysqli_error($mysqli));
    if (mysqli_num_rows($checkEmail) > 0  and mysqli_num_rows($checknum) > 0) {
          
        $stmt =  mysqli_query($mysqli, "SELECT `code` FROM `reservations` WHERE `lot_number` = '" . $_POST['lot'] . "'") or exit(mysqli_error($mysqli));
        $stmt2 =  mysqli_query($mysqli, "SELECT `code` FROM `reservations` WHERE `code` = '" . $_POST['code'] . "'") or exit(mysqli_error($mysqli));

        if (mysqli_num_rows($stmt) > 0  and mysqli_num_rows($stmt2) > 0 ) {
            /* Alert */
        //     $sql="UPDATE reservations SET done=? WHERE lot_number=? AND code=?";
        //     $stmt = $mysqli->prepare($sql);
        // //bind paramaters
        // $rc = $stmt->bind_param("is","0",$_POST['lot'], $_POST['code']);
        // $stmt->execute();
        $no = 0;
        
        $sql="UPDATE reservations SET done='$no' WHERE lot_number='$lot' AND code='$code'";
        mysqli_query( $mysqli,$sql);
            $success = "Successfully Verified" && header("refresh:1; url=verify.php");;
        } else {
            $err = "Password reset failed";
        }
    } else  // user does not exist
    {
        $err = "Email or mobile no Does Not Exist";
    }
}}

require_once('../partials/head.php');
?>

<body>

    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">

        <div class="account-bg">
            <div class="card-box mb-0">
                <div class="text-center m-t-20">
                    <a href="" class="logo">
                        <span class="text-dark">Sloat Verification</span>
                    </a>
                </div>
                <div class="m-t-10 p-20">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h6 class="text-muted text-uppercase m-b-0 m-t-0">Please Provide Sloat Details
                        </div>
                    </div>
                    <form method="POST" class="m-t-20" >

                        <div class="form-group row">
                            <div class="col-12 my-1">
                                <input class="form-control" type="email" name="email" required="required" placeholder="Email">
                            </div>
                            <div class="col-12 my-1">
                                <input class="form-control" type="tel" name="phone" required="required" placeholder="Mobile Number">
                            </div>
                            <div class="col-12 my-1">
                                <input class="form-control" type="text" name="lot" required="required" placeholder="Sloat Id">
                            </div>
                            <div class="col-12 my-1">
                                <input class="form-control" type="text" name="code" required="required" placeholder="Verification Code">
                            </div>
                        </div>

                        <div class="form-group text-center row m-t-10">
                            <div class="col-12">
                                <button class="btn btn-dark btn-block waves-effect waves-light" name="verify" type="submit">Verify</button>
                            </div>
                        </div>

                        <div class="form-group row m-t-30 mb-0">
                            <div class="col-12">
                                <a href="index.php" class="text-muted"></i> Please Give Your Feedback here?</a>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end card-box-->

    </div>
    <!-- end wrapper page -->


    <?php require_once('../partials/scripts.php'); ?>
</body>

</html>