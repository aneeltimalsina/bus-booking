<?php
ob_start()
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 p-5">
                <div class="row">
                    <div class="col text-left h4">
                        Passenger Register Portal
                    </div>
                </div>
                <form action="action/register.php" method="post">
                    <div class="row justify-content-center">
                        <div class="col text-left p-5">
                            <form action="">
                                <div class="mb-3 row">
                                    <label for="staticName" class="col-sm-3 col-form-label">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control" id="staticName"
                                               placeholder="Enter Your Full Name.">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="staticContact" class="col-sm-3 col-form-label">Contact No.</label>
                                    <div class="col-sm-9">
                                        <input type="Number" class="form-control" id="staticContact"
                                               placeholder="Enter Your Full Name." name="phone">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" required class="form-control" id="staticEmail"
                                               placeholder="Enter Your Email" name="email">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="inputPassword"
                                               placeholder="**********" name="password">
                                    </div>
                                    <div class="text-center my-2 ">
                                        <input class="btn btn-primary" type="submit" name="login" value="Login">
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
$title = 'Passenger Register Portals';
include 'layouts/authlayout.php';
