<?php
require_once "nav.php"
 ?>
<body class="r-body">
    <div class="r-container">
        <h2>Registration</h2><br/>
        <form id="registrationForm" name="personalinfo" method="post" onsubmit="return validatepersonalinfo() && validatePasswords();" autocomplete="off">
        
            <label for="firstname">First Name:</label><br/>
            <input name="firstname" onblur="return validatefn()"; type="text" class="r-input" id="firstname"/><span id="firstnameErr"></span> <br/>

            <label for="lastname">Last Name:</label><br/>
            <input id="lastname" name="lastname" type="text" class="r-input"/><span id="lastnameErr"></span> <br/>

            <label for="dob">Date of Birth:</label><br/>
            <input id="dob" name="dob" type="date" class="r-input"/><span id="dobErr"></span> <br/>

            <label>Sex:</label><br/>
            <input type="radio" id="female" name="sex" value="female">
            <label for="female">Female</label><br/>
            <input type="radio" id="male" name="sex" value="male">
            <label for="male">Male</label><br/>
            <input type="radio" id="other" name="sex" value="other">
            <label for="other">Other</label><span id="sexErr"></span><br/><br/> 

            <label for="email">Email:</label><br/>
            <input type="email" id="email" name="email" class="r-input"/><span id="emailErr"></span><br/>

            <label for="password">Password:</label><br/>
            <input type="password" id="password" name="password" class="r-input"/><span id="passwordErr"></span><br/>

            <label for="confirmPassword">Confirm Password:</label><br/>
            <input type="password" id="confirmPassword" name="confirmPassword" class="r-input"/> <span id="confirmPasswordErr"></span><br/>

            <button type="submit" class="r-button"> Register</button>

        </form>

        <div class="r-output-container" id="outputContainer"></div>
    </div>
    <script src="scripts\registration.js"></script> 
   
<?php
require_once "footer.php"
 ?>    
</body>
</html>

