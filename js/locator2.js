//<p>Click this button if you wish to know your location <button onclick="getLocation()">Try It</button></p>
//<p id="locator2"></p>
//Place the html text above if you want to use this javascript
//This function will allow the user to know their location geographically, so the cordinates rather than an ip address
//<script src="locator2.js"></script>

var x = document.getElementById("locator2");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}