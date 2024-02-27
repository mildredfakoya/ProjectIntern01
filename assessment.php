<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/registration.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/appointment.css">
    <link rel="stylesheet" href="css/vitalsigns.css">
    <link rel="stylesheet" href="css/nav_loggedin.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/eval_assessment.css">
    
    <title>VitalGuard Clinic</title>
</head>
<body>
<header>
        <nav class="navbar">
            <!--<img src="images/logo1.png" alt="image of two hands holding a sprouting plant">-->

            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index2.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="appoint_register.php" class="nav-link">Appointment</a>
                </li>
                <li class="nav-item">
                    <a href="registration.php" class="nav-link">Registration</a>
                </li>
                <li class="nav-item">
                    <a href="eval_assessment.php" class="nav-link">Evaluation Assessment</a>
                </li>
                <li class="nav-item">
                    <a href="vitalsigns.php" class="nav-link">Vital Signs</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Sign out</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

        </nav>
    </header>




    <script src="scripts/nav.js"></script>
</body>
</html>

<?php
require_once "footer.php";
 ?>