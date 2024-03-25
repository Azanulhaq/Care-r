<nav class="navbar navbar-expand-lg bg-primary navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0 text-white">Lab Automation</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link text-white active">Home</a>
                <a href="aboutus.php" class="nav-item nav-link text-white">About Us</a>
                <a href="doctor.php" class="nav-item nav-link text-white">Our Products</a>
                <a href="contact.php" class="nav-item nav-link text-white">Contact Us</a>
            </div>
            <?php 
                if(isset($_SESSION['patientsession']))
                {
                    // echo "<a href='appointment.php' class='btn btn-primary py-2 px-4 ms-3 text-white'>Appointment</a>";
                    echo "<a href='logout.php' class='btn btn-white py-2 px-4 ms-3'>Logout</a>";
                }
                else
                {
                    echo "<a href='login.php' class='btn btn-light py-2 px-4 ms-3 text-primary'>Login</a>";
                }
            ?>
        </div>
    </nav>