<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="/users/">OBTBS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link text-black" href="/users/booking.php">Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="/users/seat.php">Seat</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-black"  href="/users/feedback.php">Feedback</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="/services.php" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <?= $_SESSION['username']; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-black" href="#"><?= $_SESSION['username']; ?></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-black" href="/users/action/logout.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</nav>