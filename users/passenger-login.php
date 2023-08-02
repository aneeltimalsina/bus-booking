<?php
ob_start();
// $_SERVER["REQUEST_METHOD"] == "POST")
//$conn = new mysqli('localhost', "root", '', 'sbtbsphp', 3307);
//if ($conn->connect_error) {
//    die("Connection Failed");
//}
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    if (isset($_POST["submit"])) {
//        $email = $_POST["email"];
//        $password = $_POST["password"];
//
//        $sql = "select * from customers where `customer_email`='$email' and `customer_password`='$password'";
//        $result = mysqli_query($conn, $sql);
//        $data = mysqli_fetch_assoc($result);
//        if ($data > 1) {
//            echo 'Success';
//        } else {
//            echo 'Error';
//        }
//    }
//}

?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 p-5">
                <div class="row">
                    <div class="col text-left h4">
                        Passenger Login Portal
                    </div>
                </div>
                <form action="action/login.php" method="POST">
                    <div class="row justify-content-center">
                        <div class="col-10 text-left p-5">
                            <form action="">
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="email" class="form-control" id="staticEmail"
                                               value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="password" class="form-control" id="inputPassword"
                                               placeholder="**********" value="Nepal@123">
                                    </div>
                                    <!--                                    <div class="form-check m-2">-->
                                    <!--                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">-->
                                    <!--                                        <label class="form-check-label" for="flexCheckChecked">-->
                                    <!--                                            Remember Me-->
                                    <!--                                        </label>-->
                                    <!--                                    </div>-->
                                    <div class="text-center  my-3">
                                        <input class="btn btn-primary" type="submit" name="submit" value="Login">
                                    </div>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
$content = ob_get_contents();
ob_clean();
$title = 'Passenger Login Portals';
include 'layouts/authlayout.php';
