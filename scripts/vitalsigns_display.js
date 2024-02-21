
function collectAndDisplayValues() {
    let dateTime = document.getElementById("datetime").value;
    let bloodPressure = document.getElementById("bp").value;
    let pulse = document.getElementById("pulse").value;
    let respiration = document.getElementById("respiration").value;
    let weight = document.getElementById("weight").value;
    let height = document.getElementById("height").value;
    var bodyMassIndex = document.getElementById("bodyMassIndex").value;
    let temperature = document.getElementById("temperature").value;

    // For unit conversions
    let weightInKg = parseFloat(weight) * 0.453592;
    let heightInM = parseFloat(height) * 0.01;
    var bodyMassIndex = parseFloat((weightInKg/(heightInM) **2));
    let temperatureInC = (parseFloat(temperature) - 32) * 0.556;

    // To save vital signs
    localStorage.setItem("dateTime", dateTime);
    localStorage.setItem("bloodPressure", bloodPressure);
    localStorage.setItem("pulse", pulse);
    localStorage.setItem("respiration", respiration);
    localStorage.setItem("weight", weightInKg.toFixed(1));
    localStorage.setItem("height", heightInM.toFixed(1));
    localStorage.setItem("bodyMassIndex", bodyMassIndex.toFixed(1));
    localStorage.setItem("temperature", temperatureInC.toFixed(1));

    // Display saved vital signs
    displayVitalSigns();
}

function displayVitalSigns(){
    let container = document.getElementById("display-container");
    container.innerHTML = "";

    let dateTime = localStorage.getItem("dateTime");
    let bloodPressure = localStorage.getItem("bloodPressure");
    let pulse = localStorage.getItem("pulse");
    let respiration = localStorage.getItem("respiration");
    let weight = localStorage.getItem("weight");
    let height = localStorage.getItem("height");
    let bodyMassIndex = localStorage.getItem("bodyMassIndex");
    let temperature = localStorage.getItem("temperature");

    container.innerHTML += "Date/Time: " + dateTime + "<br></br>";
    container.innerHTML += "Blood Pressure: " + bloodPressure + " mmHg<br></br>";
    container.innerHTML += "Pulse: " + pulse + " bpm<br></br>";
    container.innerHTML += "Respiration: " + respiration + " cpm<br></br>";
    container.innerHTML += "Weight: " + weight + " kg</br></br>";
    container.innerHTML += "Height: " + height + " meters<br></br>";
    container.innerHTML += "Body Mass Index: " + bodyMassIndex + " kg/m<sup>2</sup><br></br>";
    container.innerHTML += "Temperature: " + temperature + " &deg;C";
    container.innerHTML += "<hr>";

}

// Display saved vital signs on page load
displayVitalSigns();