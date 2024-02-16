function validateAndSave() {
    var firstname = document.getElementById('firstname').value;
    var lastname = document.getElementById('lastname').value;
    var dob = document.getElementById('dob').value;
    var sex = document.querySelector('input[name="sex"]:checked') ? document.querySelector('input[name="sex"]:checked').value : '';
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    // Basic email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Please enter a valid email address.');
        return;
    }

    // Password confirmation
    if (password !== confirmPassword) {
        alert('Passwords do not match.');
        return;
    }

    // Save data to session storage
    var userData = {
        firstname: firstname,
        lastname: lastname,
        dob: dob,
        sex: sex,
        email: email,
        password: password
    };
    sessionStorage.setItem('userData', JSON.stringify(userData));

    // Display data on the page
    displayUserData();

    alert('Registration successful!');
}

function displayUserData() {
    var userData = JSON.parse(sessionStorage.getItem('userData'));
    if (userData) {
        var outputContainer = document.getElementById('output-container');
        outputContainer.innerHTML = '<h2>Registration Successful!</h2>';
        outputContainer.innerHTML += '<p><strong>First Name:</strong> ' + userData.firstname + '</p>';
        outputContainer.innerHTML += '<p><strong>Last Name:</strong> ' + userData.lastname + '</p>';
        outputContainer.innerHTML += '<p><strong>Date of Birth:</strong> ' + userData.dob + '</p>';
        outputContainer.innerHTML += '<p><strong>Sex:</strong> ' + userData.sex + '</p>';
        outputContainer.innerHTML += '<p><strong>Email:</strong> ' + userData.email + '</p>';
    }
}