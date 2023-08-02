<?php
session_start();
ob_start();
include "action/dbconnation.php";
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col my-4">
                <div class="row">
                    <div class="col h3">
                        Our Services Routes
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Bus No.</th>
                                <th>Route</th>
                                <th>Departure Date</th>
                                <th>Departure Time</th>
                                <th>Cost</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "select * from routes";
                            $result = mysqli_query($db, $sql);
                            $i = 1;
                            while ($data = mysqli_fetch_assoc($result)) {

                                ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $data['bus_no'] ?></td>
                                    <td><?= $data['route_cities'] ?></td>
                                    <td><?= $data['route_dep_date'] ?></td>
                                    <td><?= $data['route_dep_time'] ?></td>
                                    <td>Rs.<?= $data['route_step_cost'] ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$content = ob_get_contents();
ob_clean();
$title = 'Passenger Portals';
include 'layouts/layout.php';
