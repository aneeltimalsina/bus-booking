<?php
session_start();
include 'dbconnation.php';
if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $contact = $_POST['phone'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM `customers` WHERE customer_email='$email' AND customer_password='$password'";


    $duplicate = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($duplicate);
    if ($row) {
        echo '<script>
                    let a= confirm("This E-Mail Already Exist please try different E-Mail.");
                    if (a===true){
                        window.location.replace(`http://${location.host}`)
//                        console.log(`http://${location.host}`)
                    }else {
                         window.location.replace(`http://${location.host}`)
//                        console.log(`http://${location.host}`)

                    }
              </script>';

    } else {


        $sql = "insert into customers(customer_name,customer_phone,customer_email,customer_password) values ('$name','$contact','$email','$password')";
        $result = mysqli_query($db, $sql);
        $autoInc_id = mysqli_insert_id($db);
        echo $autoInc_id;
        if ($autoInc_id) {
            $code = rand(1, 99999);
            // Generates the unique userid
            $customer_id = "CUST-" . $code . $autoInc_id;
            $updateQuery = "update customers set customer_id='$customer_id' where id='$autoInc_id'";
            $updateQueryResult = mysqli_query($db, $updateQuery);
            if ($updateQueryResult) {
                echo '<script> alert("Register Successful.")</script>';
            header("location:/users/passenger-login.php");
            } else {
                echo '<script> alert("Something went to wrong.")</script>';
            header("location:/users/passenger-login.php");
            }
        } else {
            echo '<script> alert("Something went to wrong.")</script>';
            header("location:/users/passenger-login.php");
        }

//        if ($result) {
//            echo '<script> alert("Register Successful.")</script>';
//            header("location:/users/passenger-login.php");
//        } else {
//            echo '<script> alert("Something went to wrong.")</script>';
//            header("location:/users/passenger-login.php");
//        }
    }

}















