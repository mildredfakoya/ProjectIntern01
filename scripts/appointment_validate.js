try{
    function validateAppointment(){
      let name1 = document.forms.appointments.name1.value;
      let dob = document.forms.appointments.dob.value;
      let hospitalrec = document.forms.appointments.hospitalrec.value;
      let phone = document.forms.appointments.phone.value;
      let appointment_d= document.forms.appointments.appointment_d.value;
      let appointment_time= document.forms.appointments.appointment_time.value;
      let reason= document.forms.appointments.reason.value;
      let name1Pattern = /^[A-Za-z\s]*$/;
      let phonePattern = /^\d{3}-\d{3}-\d{4}$/;
      let currentTime = new Date();
      let selectedDateTime = new Date(appointment_d + ' ' + appointment_time);


      if(!name1){
        document.getElementById('name1Err').innerHTML = "<br>Enter your fullname!";
        document.forms.appointments.name1.focus();
        return false;
      }
      else{
        document.getElementById('name1Err').innerHTML = "";
      }

      if(!dob){
        document.getElementById('dobErr').innerHTML = "<br>Your Date of birth is required!";
        document.forms.appointments.dob.focus();
        return false;
      }
      else{
        document.getElementById('dobErr').innerHTML = "";
      }

      if(!hospitalrec){
        document.getElementById('hospitalrecErr').innerHTML = "<br>Hospital Record ID is required!";
        document.forms.appointments.hospitalrec.focus();
        return false;
      }
      else{
        document.getElementById('hospitalrecErr').innerHTML = "";
      }

      if(!phone){
        document.getElementById('phoneErr').innerHTML = "<br>Your Phone Number  is required!";
        document.forms.appointments.phone.focus();
        return false;
      }
      else{
        document.getElementById('phoneErr').innerHTML = "";
      }

      if(!appointment_d){
        document.getElementById('appointmentErr').innerHTML = "<br>Date of appointment is required!";
        document.forms.appointments.appointment_d.focus();
        return false;
      }
      else{
        document.getElementById('appointmentErr').innerHTML = "";
      }

      if(!appointment_time){
        document.getElementById('appointmenttimeErr').innerHTML = "<br>Time of appointment is required!";
        document.forms.appointments.appointment_time.focus();
        return false;
      }
      else{
        document.getElementById('appointmenttimeErr').innerHTML = "";
      }

      if(!reason){
        document.getElementById('reasonErr').innerHTML = "<br>Please state reasons for appointment";
        document.forms.appointments.reason.focus();
        return false;
      }
      else{
        document.getElementById('reasonErr').innerHTML = "";
      }

      if (!name1.match(name1Pattern)) {
        alert('Please name should contain letters only');
        return false;
      }

      if (!phone.match(phonePattern)) {
      alert('Please enter a valid phone number (e.g., 123-456-7890)');
      return false;
      } 

      if (selectedDateTime < currentTime) {
      alert('Appointment date and time cannot be in the past');
      return false;
      }
  
      // return true;

      }
      }
      catch(err){
        window.alert(err.message);
      }
    

    