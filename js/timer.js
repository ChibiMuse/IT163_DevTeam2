//You'll need this code to display it: <p>You've been here for <span id="minutes">00</span> minutes and <span id="seconds">00</span> seconds!</p>
//<script src="js/timer.js"></script>
//This function will count up the amount of time a user spends on a specific webpage.
var minutesLabel = document.getElementById("minutes");
        var secondsLabel = document.getElementById("seconds");
        var totalSeconds = 0;
        setInterval(setTime, 1000);

        function setTime()
        {
            ++totalSeconds;
            secondsLabel.innerHTML = pad(totalSeconds%60);
            minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
        }

        function pad(val)
        {
            var valString = val + "";
            if(valString.length < 2)
            {
                return "0" + valString;
            }
            else
            {
                return valString;
            }
        }
