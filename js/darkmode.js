let darkMode = localStorage.getItem('darkMode');
const darkModeToggle = document.querySelector('#dark-mode-toggle');

// check if dark mode is enabled
// if enabled, turn it off
// if disabled, turn it on

const enableDarkMode = () => {
    // add the class darkmode to body
    // save darkMode in local storage
    document.body.classList.add('darkmode');
    localStorage.setItem('darkMode','enabled');
}

const disableDarkMode = () => {
    // add the class darkmode to body
    // save darkMode in local storage
    document.body.classList.remove('darkmode');
    localStorage.setItem('darkMode',null);
}

if (darkMode === 'enabled'){
    enableDarkMode();
}

darkModeToggle.addEventListener("click", () => {
    darkMode = localStorage.getItem('darkMode');
    if (darkMode !== 'enabled') {
        enableDarkMode();
    } else {
        disableDarkMode();
    }
})