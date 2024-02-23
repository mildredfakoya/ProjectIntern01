window.onload= function(){
if(localStorage)
{
    populate();
    const form=document.getElementById('registrationForm');
    form.addEventListener('submit',store);
}
else{
    window.alert('localstorage is not supported');
}
}
function store() {
    let firstname = document.forms.personalinfo.firstname.value;
    let lastname = document.forms.personalinfo.lastname.value;
    let dob = document.forms.personalinfo.dob.value;
    let sex = document.forms.personalinfo.sex.value;
    let email = document.forms.personalinfo.email.value;
    let password = document.forms.personalinfo.password.value;
    let confirmPassword = document.forms.personalinfo.confirmPassword.value;
    localStorage.setItem('firstname', firstname);
    localStorage.setItem('lastname', lastname);
    localStorage.setItem('dob', dob);
    localStorage.setItem('sex', sex);
    localStorage.setItem('email', email);
    localStorage.setItem('password', password);
    localStorage.setItem('confirmPassword', confirmPassword);

}

function populate() {
    let firstname = document.forms.personalinfo.firstname;
    let lastname = document.forms.personalinfo.lastname;
    let dob = document.forms.personalinfo.dob;
    let sex = document.forms.personalinfo.sex;
    let email = document.forms.personalinfo.email;
    let password = document.forms.personalinfo.password;
    let confirmPassword = document.forms.personalinfo.confirmPassword;

    if (localStorage.getItem('firstname') != null) {
        firstname.value = localStorage.getItem('firstname');
    }

    if (localStorage.getItem('lastname') != null) {
        lastname.value = localStorage.getItem('lastname');
    }

    if (localStorage.getItem('dob') != null) {
        dob.value = localStorage.getItem('dob');
    }

    if (localStorage.getItem('sex') != null) {
        sex.value = localStorage.getItem('sex');
    }

    if (localStorage.getItem('email') != null) {
        email.value = localStorage.getItem('email');
    }

    if (localStorage.getItem('password') != null) {
        password.value = localStorage.getItem('password');
    }

    if (localStorage.getItem('confirmPassword') != null) {
        confirmPassword.value = localStorage.getItem('confirmPassword');
    }
}