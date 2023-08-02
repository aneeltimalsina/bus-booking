<?php
session_start();
include 'dbconnation.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $contact = $_POST['phone'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
//    echo "=>" . $name . "=>" . $contact . "=>" . $email . "=>" . $feedback;
    $sql = "insert into feedbacks(name,email,phone,feedback) values ('$name','$email','$contact','$feedback')";
    $result = mysqli_query($db, $sql);
    if ($result) {
        echo "<script> alert('Thank You For Feedback');</script>";
        header("location:/users/feedback.php");
    } else {
        echo "<script> alert('Something went to wrong.');</script>";
        header("location:/users/feedback.php");
    }
}