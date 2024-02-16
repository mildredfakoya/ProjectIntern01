<?php
require_once "nav.php"
 ?>
<body class="r-body">
    <div class="r-container">
        <h2>Registration</h2><br/>
        <form id="registrationForm">
            <label for="firstname"><b>First Name:</b></label><br/>
            <input id="firstname" name="firstname" type="text" class="r-input" required/><br/>

            <label for="lastname"><b>Last Name:</b></label><br/>
            <input id="lastname" name="lastname" type="text" class="r-input" required/><br/>

            <label for="dob"><b>Date of Birth:</b></label><br/>
            <input id="dob" name="dob" type="date" class="r-input" required/><br/>

            <label for="sex"><b>Sex:</b></label><br/>
            <input type="radio" id="female" name="sex" value="female">
            <label for="female">Female</label><br/>
            <input type="radio" id="male" name="sex" value="male">
            <label for="male">Male</label><br/>
            <input type="radio" id="other" name="sex" value="other">
            <label for="other">Other</label><br/><br/> 

            <label for="email"><b>Email:</b></label><br/>
            <input type="email" id="email" name="email" class="r-input" required><br/>

            <label for="password"><b>Password:</b></label><br/>
            <input type="password" id="password" name="password" class="r-input" required><br/>

            <label for="confirmPassword"><b>Confirm Password:</b></label><br/>
            <input type="password" id="confirmPassword" name="confirmPassword" class="r-input" required><br/>

            <button type="button" onclick="validateForm()" class="r-button">Register</button>
        </form>

        <div class="r-output-container" id="outputContainer"></div>
    </div>
</body>
<?php
 ?>
</html>
