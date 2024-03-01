<?php
require_once "nav.php"
 ?>

</head>
<body>
<body class="lg_body" style="background-image: url('/img/bodybg.jpg');" alt="bgimage">
<section>

<div class="lg_text">
  <h1>Welcome</h1>
  <h2 >Register or Login</h2>
</div>

<button class="lg_button" onclick="document.getElementById('lg_id01').style.display='block'" style="width:auto;">Login</button>

<div id="lg_id01" class="lg_modal">

  <form class="lg_modal-content lg_animate" action="/action_page.php" method="post">
    <div class="lg_imgcontainer">
      <span onclick="document.getElementById('lg_id01').style.display='none'" class="lg_close" title="Close Modal">&times;</span>
      <img src="/img/AVATER.jpg" alt="Avatar" class="lg_avatar">
    </div>

    <div class="lg_container">
      <label for="mail"><b>Email</b></label>
      <input type="text" placeholder="Enter Your Email" name="mail" required>

      <label for="pasw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pasw" required>

      <button class="lg_button" type="submit">Login</button>
    </br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div> 

    <div class="lg_container" style="background-color:#f1f1f1">
    <!--  <button type="button" onclick="document.getElementById('lg_id01').style.display='none'" class="lg_cancelbtn"><a href="#">Cancel</a></button>-->
      <span class="lg_pasw">Forgot <a href="#"> password?</a></span>
    </div>

    <div class="lg_container" style="background-color:#f1f1f1">
     <!--  <button type="button" onclick="document.getElementById('lg_id01').style.display='none'" class="lg_cancelbtn"><a href="#">Cancel</a></button>-->
      <span class="lg_create_acc">Don't have an account? <a href="registration.php">Register here</a></span>
    </div>


  </form>
</div>

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
</section>

</body>
</html>