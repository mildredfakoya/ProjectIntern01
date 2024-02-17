function saveAppointments() {
    let name1 = document.getElementById("name1").value;
    let dob = document.getElementById("dob").value;
    let hospitalrec = document.getElementById("hospitalrec").value;
    let phone = document.getElementById("phone").value;
    let appointment_d = document.getElementById("appointment_d").value;
    let appointment_time = document.getElementById("appointment_time").value;
    let reason = document.getElementById("reason").value;

    // Save appointment to storage
    let appointment = {
        name1: name1,
        dob: dob,
        hospitalrec: hospitalrec,
        phone: phone,
        appointment_d: appointment_d,
        appointment_time: appointment_time,
        reason: reason
    };

    // To get appointments or empty array
    var appointments = JSON.parse(localStorage.getItem("appointments")) || []; 
    appointments.push(appointment);

    // Save updated appointments back to storage
    localStorage.setItem("appointments", JSON.stringify(appointments));

    // Display saved appointments
    displayAppointments();
}

function displayAppointments() {
    var container = document.getElementById("a_appointments-storage");
    container.innerHTML = "";

    // Retrieve saved appointments from storage
    var appointments = JSON.parse(localStorage.getItem("appointments"));

    // Display each appointment
    appointments.forEach(function(appointment, index) {
       var appointmentDate = new Date(appointment.appointmentDate);
       var formattedDate = appointmentDate.toLocaleString();
    
        container.innerHTML += "<div><strong>Appointment #" + (index + 1) + "</strong><br>";
        container.innerHTML += "<strong>Name:</strong> " + appointment.name1 + "<br>";
        container.innerHTML += "<strong>Date of Birth:</strong> " + appointment.dob + "<br>";
        container.innerHTML += "<strong>Hospital ID:</strong> " + appointment.hospitalrec + "<br>";
        container.innerHTML += "<strong>Telephone:</strong> " + appointment.phone + "<br>";
        container.innerHTML += "<strong>Appointment Date:</strong> " + appointment.appointment_d + "<br>";
        container.innerHTML += "<strong>Appointment Time:</strong> " + appointment.appointment_time + "<br>";
        container.innerHTML += "<strong>Reasons For Appointment:</strong> " + appointment.reason + "<br>";
        container.innerHTML += "</div><hr>";
    });
}

// Display saved appointments on page load
displayAppointments();
