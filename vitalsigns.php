<?php
  require_once "nav.php";
 ?>
<body id="appv_body">

<div class="appv_appoint">
        <h1>Vital Signs Data Registery</h1>
            <nav>
                <a class="nav-link" href="#">Patient</a>
                <a class="nav-link" href="#">Services</a>
            </nav>
    </div>
    <p class="appv_p">Please click the toggle button below to logout</p>
   <section class="row">
        <div class="col-2">
                <div class="sidenav" id="mySidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="home.php">Home</a>
                        <a href="#">Logout</a>
                </div>
                <div id="main">
                        <span id="span" onclick="openNav()">&#9776;</span>
                </div>
                </div>

    <form class="col-4" id="vitals_form">

        <div class="form-control label">
                <label for="datetime">Date & Time:</label>
                <input type="datetime-local" id="datetime" name="datetime">
        </div><br>

            <div class="form-control label">
                    <label for="bp">Blood Pressure(mmHg)</label>
                    <input type="fraction" name="blood pressure" id="bp" placeholder="exp. 120/80">
            </div><br>
            <div class="form-control label" >
                    <label for="pulse">Pulse(bpm)</label>
                    <input type="numder" name="pulse" id="pulse" placeholder="exp. 72">
            </div><br>
            <div class="form-control label">
                    <label for="respiration">Respiration(breaths/minute)</label>
                    <input type="number" name="respiration" id="respiration" placeholder="exp. 20">
            </div><br>

            <div class="form-control label">
                    <label for="weight">Weight(lbs)</label>
                    <input type="number" name="weight" id="weight" placeholder="exp. 200">
            </div><br>

            <div class="form-control label">
                    <label for="height">Height(cm)</label>
                    <input type="number" name="height" id="height" placeholder="exp. 150">
            </div><br>

            <div class="form-control label">
                    <label for="bodyMassIndex">Body Mass Index(BMI)</label>
                    <input type="number" name="bodyMassIndex" id="bodyMassIndex" placeholder="exp. 24.9">
            </div><br>
            <div class="form-control label">
                    <label for="temperature">Temperature(&deg;F)</label>
                    <input type="number" name="temperature" id="temperature" placeholder="exp. 100">
            </div><br>

            <div>
                <button class="v_button" name="" type="submit" onclick="collectAndDisplayValues();">Save</button>
               
            </div>
    </form>
    <div class="col-4" id="display-container"></div>
    </section>

<script src="scripts/vitalsigns_display.js"></script>
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