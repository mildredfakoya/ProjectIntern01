<?php
require_once "assessment.php";
 ?>
<body id="appv_body">

<div class="appv_appoint">
        <h1>Vital Signs Data Registery</h1>
            <nav>
            <div class="dropdown">
                <button class="news1_button">Patient</button>
                <div class="dropdown-content">
    <a href="Patient">Patient A</a>
    <a href="Patient">Patient B</a>
    <a href="Patient">Patient C</a>
    <a href="Patient">Patient D</a>
    <a href="Patient">Patient E</a>
    <a href="Patient">Patient F</a>
    <a href="Patient">Patient G</a>
    <a href="Patient">Patient B</a>
    <a href="Patient">Patient H</a>
    <a href="Patient">Patient I</a>
    <a href="Patient">Patient J</a>
    <a href="Patient">Patient K</a>
  </div>
                </div>
                <button class="news1_button" onclick="document.getElementById('news1').style.display='block'" style="width:auto;">NEWS Score</button>
                <button class="news1_button" onclick="document.getElementById('news2').style.display='block'" style="width:auto;">Vitals Range</button>
                <div class="dropdown">
                <button class="news1_button">Services</button>
                <div class="dropdown-content">
    <a href="sevices">Service 1</a>
    <a href="sevices">Service 2</a>
    <a href="sevices">Service 3</a>
    <a href="sevices">Service 4</a>
    <a href="sevices">Service 5</a>
    <a href="sevices">Service 6</a>
    <a href="sevices">Service 7</a>
    <a href="sevices">Service 8</a>
    <a href="sevices">Service 9</a>
    <a href="sevices">Service 10</a>
    <a href="sevices">Service 11</a>
    <a href="sevices">Service 12</a>
  </div>
                </div>
            </nav>
    </div>
    <p class="app_p">Click the below button to the assessment forms </p>
   <section class="row">
        <div class="col-2">
                <div class="sidenav" id="mySidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="assessment.php">Assessment</a>
                        <a href="index2.php">Home</a>
                       
                </div>
                <div id="main">
                        <span id="app_span" onclick="openNav()">&#9776;</span>
                </div>
                </div>

    <form class="col-4" id="vitals_form">

        <div class="form-control label">
            <h4><strong>VitalGuard</strong></h4><br>
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
    <div class="col-4">
        <div id="display-container2"></div>
        <div id="vg">
                VitalGuard<br>&nbsp&nbsp&nbsp&nbspClinic
        </div>
        <div  id="vg3">
        <p style="text-align: center;">Securing Your Health, One Vital at a Time</p>
        </div>
    </div>
   
    </section>

    <div id="news1" style="overflow-x: auto;" class="news1_modal">
        <table class="news1_modal-content news1_animate">
        
                      <caption>VitalGuard NEWS (National Early Warning Score)</caption>
                <thead>
                        <tr>
                                <th id="hmain" rowspan="2">Physiological Parameters</th>
                                <th id="hmin">3</th>
                                <th id="hmin">2</th>
                                <th id="hmin">1</th>
                                <th id="hmin">0</th>
                                <th id="hmin">1</th>
                                <th id="hmin">2</th>
                                <th id="hmin">3</th>
                                
                        </tr>
                </thead>
                <tbody style="background-color: rgb(194, 232, 232); font-style: italic; text-align: right;">
                        <colgroup>
                                <col span="3" style="background-color: rgb(237, 240, 235);">
                            </colgroup> 
                        <tr>
                                <td id="hsub">Respiratory Rate(breaths/minute)</td>
                                <td id="emergent">&nbsp; &#8804; 8</td>
                                <td id="urgent"></td>
                                <td id="elective">9-11</td>
                                <td >12-20</td>
                                <td id="elective"></td>
                                <td id="urgent">21-24</td>
                                <td id="emergent">&nbsp;&#8805; 25</td>
                            </tr>
                            <tr>
                                <td id="hsub">Oxygen Saturation(SPO<sub>2</sub>%)</td>
                                <td id="emergent">&nbsp; &#8804; 91</td>
                                <td id="urgent">92-93</td>
                                <td id="elective">94-95</td>
                                <td >&nbsp;&#8805; 96</td>
                                <td id="elective"></td>
                                <td id="urgent"></td>
                                <td id="emergent"></td>
                            </tr>
                            <tr>
                                <td id="hsub">Any Supplimental Oxygen</td>
                                <td id="emergent"></td>
                                <td id="urgent">Yes</td>
                                <td id="elective"></td>
                                <td >No</td>
                                <td id="elective"></td>
                                <td id="urgent"></td>
                                <td id="emergent"></td>
                            </tr>
                           <tr>
                                <td id="hsub">Temperature(&deg;C)</td>
                                <td id="emergent">&nbsp; &#8804; 35</td>
                                <td id="urgent"></td>
                                <td id="elective">35.1-36.0</td>
                                <td >36.1-38.0</td>
                                <td id="elective">38.1-39.0</td>
                                <td id="urgent">&nbsp;&#8805; 39.1</td>
                                <td id="emergent"></td>
                
                            </tr>
                            <tr>
                                <td id="hsub">Systolic Blood Pressure(mmHg)</td>
                                <td id="emergent">&nbsp; &#8804; 90</td>
                                <td id="urgent">91-100</td>
                                <td id="elective">101-110</td>
                                <td >111-219</td>
                                <td id="elective"></td>
                                <td id="urgent"></td>
                                <td id="emergent">&nbsp;&#8805; 220</td>
                              
                            </tr>
                            <tr>
                                <td id="hsub">Hearth Rate(bpm)</td>
                                <td id="emergent">&nbsp; &#8804; 40</td>
                                <td id="urgent"></td>
                                <td id="elective">41-50</td>
                                <td >51-90</td>
                                <td id="elective">91-110</td>
                                <td id="urgent">111-130</td>
                                <td id="emergent">&nbsp;&#8805; 131</td>
                                
                            </tr>
                            <tr>
                                <td id="hsub">Level of Consciousness(AVPU)</td>
                                <td id="emergent"></td>
                                <td id="urgent"></td>
                                <td id="elective"></td>
                                <td >A</td>
                                <td id="elective"></td>
                                <td id="urgent"></td>
                                <td id="emergent">V,P or U</td>
                              
                            </tr>
                            <tr>
                                <td colspan="10">
                                        <p>Score ≥3: discuss with duty nurse or senior colleague; score ≥6: immediate discussion with ACT advanced practitioner or ACT doctor.
                                        Concern about patient or difficulty obtaining any single parameter should lead to escalation regardless of score.
                                        Complete a sepsis screen on all patients with NEWS ≥3 with signs of infection.<br><br>
                                        ACT = acute clinical team; &nbsp&nbspAVPU = Alert, Voice, Pain, Unresponsive;<br> SPO₂ = peripheral capillary oxygen saturation.</p>
                                </td>

                            </tr>
                            <tr >
                                <td id="hmain" colspan="10"  >
                                 <p style="text-align: center;">NEWS thresholds and triggers</p>
                                </td>
                            </tr >
                            <tr style="text-align: center;">
                                <th colspan="2">NEWS</th>
                                <th colspan="3">Clinical Risk</th>
                                <th colspan="5">Response</th>
                            </tr>
                            <tr id="elective">
                                <td colspan="2">Aggregate Score 0-4</td>
                                <td colspan="3">Low</td>
                                <td colspan="5">Ward-baesd response</td>
                            </tr>
                            <tr id="urgent">
                                <td colspan="2">Aggregate Score 5-6</td>
                                <td colspan="3">Medium</td>
                                <td colspan="5">Key threshold for Urgent response</td>
                            </tr>
                            <tr id="emergent">
                                <td colspan="2">Aggregate Score 7 or more</td>
                                <td colspan="3">High</td>
                                <td colspan="5">Urgent or Emergent Response</td>
                            </tr>
                         
                            
                </tbody>
        </table>
    </div>

    <div id="news2" style="overflow-x: auto;" class="news2_modal">
        <table class="news2_modal-content news2_animate">
                
                      <caption>VitalGuard Normal Vital Signs Range</caption>
                <thead>
                        <tr>
                                <th id="hmain" rowspan="2">Vital Signs</th>
                                <th id="hmin"  rowspan="2">Infants (0-3yrs)</th>
                                <th id="hmin"  rowspan="2">Children (4-12yrs)</th>
                                <th id="hmin"  rowspan="2">Adult (13yrs and above)</th>
                                
                        </tr>
                </thead>  
                <tbody style="background-color:rgb(180, 204, 204); font-style: italic; text-align: right;">
                        <colgroup>
                                <col span="3" style="background-color: rgb(237, 240, 235);">
                            </colgroup> 
                        <tr>
                                <td >Respiratory Rate(breaths/minute)</td>
                                <td >20-50</td>
                                <td >20-30</td>
                                <td >12-20</td>
                                
                            </tr>
                            <tr>
                                <td >Oxygen Saturation(%)</td>
                                <td >95-100</td>
                                <td >95-100</td>
                                <td >95-100</td>
                               
                                
                            </tr>
                            <tr>
                                <td >Hearth Rate(bpm)</td>
                                <td >80-160</td>
                                <td >70-120</td>
                                <td >55-105</td>
                               
                                
                            </tr>
                            <tr>
                                <td >Blood Pressure (Systolic/mmHg)</td>
                                <td >50-100</td>
                                <td >80-110</td>
                                <td >100-120</td>
                               
                            </tr>
                           <tr>
                                <td >Temperature(&deg;C)</td>
                                <td >35.1-37.3</td>
                                <td >35.1-37.3</td>
                                <td >35.1-36.3</td>
                                
                
                            </tr>
                            <tr>
                                <td >Weight(kg)</td>
                                <td>2-14</td>
                                <td >14-42</td>
                                <td >&#8805; 50</td>
                            </tr>
                            <tr>
                                <td >Body Mass Index</td>
                                <td  colspan="3">18.5-24.9</td>
                            </tr>
                            </tbody>
                            </table>
</div> 

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
<script>
        // Get the modal elements
        var news1_modal = document.getElementById('news1');
        var news2_modal = document.getElementById('news2');
        
        // Close the modal when a user clicks anywhere outside of it
        window.onclick = function(event) {
            if (event.target == news1_modal) {
                news1_modal.style.display = "none";
            }
            if (event.target == news2_modal) {
                news2_modal.style.display = "none";
            }
        }
    </script>
   <script src="scripts/vitalsigns_display.js"></script> 
</body>
 </html>
<?php
require_once "footer.php";
 ?>

