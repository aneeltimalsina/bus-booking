<?php
session_start();
ob_start()
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 p-5">
                <div class="row">
                    <div class="col text-left h4">
                        Get In Touch
                    </div>
                </div>
                <form action="action/feedback.php" method="POST">
                    <div class="row justify-content-center">
                        <div class="col text-left p-5">
                            <form action="">
                                <div class="mb-3 row">
                                    <label for="staticName" class="col-sm-3 col-form-label">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="staticName"
                                               placeholder="Enter Your Full Name." name="name"
                                               value="<?= $_SESSION['customer_user_name'] ?>" disabled readonly>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="staticContact" class="col-sm-3 col-form-label">Contact No.</label>
                                    <div class="col-sm-9">
                                        <input type="Number" class="form-control" id="staticContact"
                                               placeholder="Enter Your Contact No." name="phone"
                                               value="<?= $_SESSION['customer_user_phone'] ?>" disabled readonly>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="staticEmail"
                                               placeholder="Enter Your Email" name="email"
                                               value="<?= $_SESSION['email'] ?>" disabled readonly>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputFeedback" class="col-sm-3 col-form-label">Message</label>
                                    <div class="col-sm-9">
                                    <textarea name="feedback" id="inputFeedback" cols="30" class="form-control"
                                              rows="5"></textarea>
                                    </div>
                                    <div class="text-center my-2 ">
                                        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
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
$title = 'Get in touch';
include 'layouts/layout.php';
