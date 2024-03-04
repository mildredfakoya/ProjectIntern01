<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/registration.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/appointment_vitals.css">
    <link rel="stylesheet" href="css/appointment.css">
    <link rel="stylesheet" href="css/vitalsigns.css">

    

    
    <title>VitalGuard Clinic</title
</head>
<body>
    <header>
        <nav class="navbar">
            <img src="images/logo1.png" alt="image of two hands holding a sprouting plant">

            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="landing.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="registration.php" class="nav-link">Registration</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                <button class="nav-link nlogin" onclick="document.getElementById('lg_id01').style.display='block' " style="width:auto;">Login</button>
                   <!-- <a href="#" class="nav-link nlogin">Login</a>-->
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
           
<div id="lg_id01" class="lg_modal">

<form class="lg_modal-content lg_animate" action="index2.php" method="post">
  <div class="lg_imgcontainer">
    <span onclick="document.getElementById('lg_id01').style.display='none'" class="lg_close" title="Close Modal">&times;</span>
    <img src="images/AVATER.jpg" alt="Avatar" class="lg_avatar">
  </div>

  <div class="lg_container">
    <label for="mail"><b>Email</b></label>
    <input type="text" placeholder="Enter Your Email" name="mail" required>

    <label for="pasw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pasw" required>
    <br>

    <a href="index2.php"><button class="nav-link nlogin" type="">Login</button></a>

    <br>
    <br>

    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>


  <div class="lg_container" style="background-color:#f1f1f1">
  
<span class="lg_pasw">Forgot <a href="#"> password?</a></span>
  </div>

  <div class="lg_container" style="background-color:#f1f1f1">
  
  <span class="lg_create_acc">Don't have an account? <a href="registration.php">Register here</a></span>
  </div>


</form>
</div>

        </nav>
    </header>
    <script src="scripts/nav.js"></script>

    <script>
        // Get the modal
      var lg_modal = document.getElementById('lg_id01');

       // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
      if (event.target == lg_modal) {
        lg_modal.style.display = "none";
    }
}

</script>

</body>
