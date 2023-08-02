<?php
session_Start();
include 'dbconnation.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM `customers` WHERE customer_email='$email' AND customer_password='$password'";
    echo $query;
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($result);


    if (mysqli_num_rows($result) == 1) {

        $_SESSION['username'] = $row['customer_name'];
        $_SESSION['email'] = $row['customer_email'];
        $_SESSION['customer_user_id'] = $row['customer_id'];
        $_SESSION['customer_user_name'] = $row['customer_name'];
        $_SESSION['customer_user_phone'] = $row['customer_phone'];
//        $_SESSION['islogin'] = True;

        // $_SESSION['success'] = "User Logged In Successfully";
        $msg = 'User Logged In Successfully';
//         echo "index.php?msg=".$msg;die;
        $status = 'success ';
        echo $status;
        header("location:/users/index.php");
    } else {
        echo 'Failed';
//       header("location:/users/passenger-login.php");
    }
}


if (isset($_SESSION['islogin']) && ($_SESSION['islogin'] == true)) { //if login in session is not set

    // header("Location:index.php");
} else {

}


