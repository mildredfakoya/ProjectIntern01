<?php
  require_once "nav.php";
 ?>
 
<body>
<div class="a_appoint">
   <h1>Appointment Registration Form</h1>
       <nav>
           <a class="nav-link" href="#">Record ID</a>
           <a class="nav-link" href="#">210775</a>
       </nav>
</div>

<section class="row">
	<div class="col-3">
	<div class="sidenav" id="mySidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="#">Home</a>
		<a href="#">View Appointment</a>
	</div>
	<div id="main">
		<span id="span" onclick="openNav()">&#9776;</span>
	</div>
	</div>
	
 <form class="col-5" method="" action="" id="appointments" name="appointments"
   onsubmit="return validateAppointment();" autocomplete="off" >
   <label for="name1">Fullname:</label>
   <input type="text" id="name1" name="name1" placeholder="enter name" autocomplete="on">
   <span id="name1Err"></span>
 
   <label for="hospitalrec">Hospital Record ID:</label>
   <input type="text" id="hospitalrec" name="hospitalrec">
   <span id="hospitalrecErr"></span>

   <label for="phone">Phone Number:</label>
   <input type="text" id="phone" name="phone">
   <span id="phoneErr"></span>

   <label for="appointment_d">Date of Appointment:</label>
   <input type="date" id="appointment_d" name="appointment_d">
   <span id="appointmentErr"></span>

   <label for="appointment_time">Time of Appointment:</label>
   <input type="time" id="appointment_time" name="appointment_time">
   <span id="appointmenttimeErr"></span>

   <label for="reason">Please state reasons for appointment:</label>
   <textarea id="reason" name="reason"></textarea>
   <span id="reasonErr"></span>

       <button class="appointment_button" id="submit" onclick="saveAppointments()">Save</button>
       </form>

   <div id="a_appointments-storage"></div>
</section>


<script src="appointmentvalidate.js"></script>
<script src="appointmentstorscript.js"></script>
<script>
	function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
	document.getElementById("mySidenav").style.height = "200px";
    document.getElementById("main").style.marginLeft = "0px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>

 </body>
 <?php
  require_once "footer.php";
 ?>
