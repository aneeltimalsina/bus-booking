<?php
session_start();
include '../../users/action/dbconnation.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $contact = $_POST['phone'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
//    echo "=>" . $name . "=>" . $contact . "=>" . $email . "=>" . $feedback;
    $sql = "insert into feedbacks(name,email,phone,feedback) values ('$name','$email','$contact','$feedback')";
    $result = mysqli_query($db, $sql);

    if ($result) {
        echo '<script>
                    let a= confirm("Thank You for Feedback Our services.");
                    if (a===true){
                        window.location.replace(`http://${location.host}`)
//                        console.log(`http://${location.host}`)
                    }else {
                         window.location.replace(`http://${location.host}`)
//                        console.log(`http://${location.host}`)

                    }
              </script>';
    } else {
        echo '<script>
                    let a= confirm("Something went wrong. Please Try again.");
                    if (a===true){
                        window.location.replace(`http://${location.host}`)
//                        console.log(`http://${location.host}`)
                    }else {
                         window.location.replace(`http://${location.host}`)
//                        console.log(`http://${location.host}`)

                    }
              </script>';
    }
}