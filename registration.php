<?php
require_once "nav_loggedin.php"
 ?>
<body class="r-body">
    <div class="r-container">
        <h2>Registration</h2><br/>
        <form id="registrationForm" name="personalinfo" method="post" onsubmit="return validatepersonalinfo();" autocomplete="off">
          
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

            <button type="button"  class="r-button"> Register</button>
        </form>

        <div class="r-output-container" id="outputContainer"></div>
    </div>
    <script src="../scripts/registration.js"></script>
    <script>
        try{
    function validatepersonalinfo() {
    let firstname = document.forms.personalinfo.firstname.value;
    let lastname = document.forms.personalinfo.lastname.value;
    let dob = document.forms.personalinfo.dob.value;
    let sex = document.forms.personalinfo.sex.value;
    let email = document.forms.personalinfo.email.value;
    let password = document.forms.personalinfo.password.value;
    let confirmPassword = document.forms.personalinfo.confirmPassword.value;

    if (!firstname) {
        document.getElementById('firstnameErr').innerHTML = "First name is required";
        document.forms.personalinfo.firstname.focus();
        return false;
    }

    if (!lastname) {
        document.getElementById('lastnameErr').innerHTML = "Last name is required";
        document.forms.personalinfo.lastname.focus();
        return false;
    }

    if (!dob) {
        document.getElementById('dobErr').innerHTML = "Date of Birth is required";
        document.forms.personalinfo.dob.focus();
        return false;
    }
    if (!lastname) {
        document.getElementById('lastnameErr').innerHTML = "Last name is required";
        document.forms.personalinfo.lastname.focus();
        return false;
    }
    if (!sex) {
        document.getElementById('sexErr').innerHTML = "Sex is required";
        document.forms.personalinfo.sex.focus();
        return false;
    }
    if (!email) {
        document.getElementById('emailErr').innerHTML = "email is required";
        document.forms.personalinfo.email.focus();
        return false;
    }
    if (!password) {
        document.getElementById('passwordErr').innerHTML = "Password is required";
        document.forms.personalinfo.password.focus();
        return false;
    }
    if (!lastname) {
        document.getElementById('confirmPasswordErr').innerHTML = "Confirmation of Password is required";
        document.forms.personalinfo.confirmPassword.focus();
        return false;
    }
}

function validatefn() {
    let namepattern = /^[A-Za-z\s]*$/;
    let firstname = document.forms.personalinfo.firstname.value;

    if (firstname) {
        let x = namepattern.test(firstname);
        if (x === false) {
            document.getElementById('firstnameErr').innerHTML = "<br/>First name can only contain letters and white spaces";
            document.forms.personalinfo.firstname.focus();
            return false;
        } else {
            document.getElementById('firstnameErr').innerHTML = "";
            document.forms.personalinfo.firstname.style.borderColor = 'teal';
            return true;
        }
    }
    return false;
}
        }
catch(err){
window.alert(err.message)
}
finally{

}
</script>
<?php
require_once "footer.php"
 ?>    
</body>
</html>

