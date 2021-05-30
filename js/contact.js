

// CAN US MOST CODE FOR LOGIN PAGE 
// vars for Elements to use as event listeners later
var elN = document.getElementById('name');
var elE = document.getElementById('email');
var elF = document.getElementById('feedback');

// want to blur input feilds
elN.addEventListener('blur', checkName);

// want to blur button field
elE.addEventListener('blur', checkEmail);

// elF.addEventLister('blur');

// want to check Name is input or error message
function checkName() {
  var name = elN.value;
  let elMsg = document.getElementById('name-msg');
  console.log("Var name " + name);
  if (name.length < 1) {
    document.className = 'warning';
    elMsg.textContent = 'Need your name....';
  } else {elMsg.textContent = '';}

  } 
  // end of check name

  //check email

  function checkEmail() {
    var email = elE.value;
    let elMsg = document.getElementById('email-msg');
    console.log("Var email " + email);
    if (email.length < 4 || !email.includes("@")) {
      document.className = 'warning';
      elMsg.textContent = '...and your email.';
    } else {elMsg.textContent = '';}
  } 

