// Script that controls the main page toasts/alert message
// Set to a 1 in 10 chance to appear


//Gets session storage value. Have they been selection to win?
let randomWinVar = sessionStorage.getItem('randomWin');

//Finds the toast close button and assigns it to a variable
const toastWindow = document.querySelector('#toast-win-close');

//Options for toast that show and have animation
var option = 
{
    animation : true,
    autohide : false,

};

//Options for toast so that it goes away
var option2 = 
{
    animation : false,
    autohide : true,

};


// toast funciton creates the toast to show with the first option
function Toast(){
    var toastEl = document.getElementById("toast-win");
    var toastElement = new bootstrap.Toast(toastEl, option);

    toastElement.show();
    
}

//ToastHide function makes sure the toast is hidden and has options from option2
function ToastHide(){
    var toastEl = document.getElementById("toast-win");
    var toastElement = new bootstrap.Toast(toastEl, option2);

    toastElement.hide();
}

//function to get a random number. max is the "out of", so if you do max = 3, it will pick numbers 0, 1, or 2
function getRandomInt(max) {
    return Math.floor(Math.random()* max);
}


//sets the session storage randomWin to a random number between 0 & 9 and then if that nubmer is 0 (1 in 10 chance), it shows the toast. If not, then no toast.
function setRandomWin(){
    var randomInt = getRandomInt(10);
    sessionStorage.setItem("randomWin", randomInt);
   
    if (randomInt === 0) {
        Toast();
    } else {
        ToastHide();
    }

}

//Calls the setRandomWin Function on page load.
window.addEventListener("load", setRandomWin);

//Hides the toast if they click the close button.
toastWindow.addEventListener("click", ToastHide);