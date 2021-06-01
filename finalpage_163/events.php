<?php include 'includes/header162v4.php'?>

<h2>EVENTS PAGE</h2>
<div>
<p>You've been here for <span id="minutes">00</span> minutes and <span id="seconds">00</span> seconds!</p>

    <section>
    <h1>Event Title</h1>
    <h2>Description</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <h2>Date & Time</h2>
    <p>MM/DD/YYYY & 11:59 </p>
    <h2>Location</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </section>
    <aside>
  <div>
  <?php 
  $imgUrl = "placeholder.png"; 
  ?> 
  <h2>Calender of Events</h2>
  <img src="imgs/<?= $imgUrl; ?>"/>
  <div>
    </aside>
    
    <main> 
<div>
  <h2>Networking</h2>
  <h2>Collaborating</h2>
  <h2>Geekery</h2>
</div>
<?php
$imgURL="placeholder2.png";
?>
<div id="banner" style="overflow: hidden;justify-content:space-around;">
    <div class="" style="max-width: 100%; max-height: 20%; display: inline-block;">
    <img src="imgs/placeholder2.png">
    </div>

    <div class="" style="max-width: 100%; max-height: 100%; display: inline-block;">
    <img src="imgs/placeholder2.png">

    </div>

    <div class="" style="max-width: 20%; max-height: 20%; display: inline-block;">
    <img src="imgs/placeholder2.png">
    </div>
  </div>

    </main>
<footer>
  <p>TBD<a href="contact.php" target="_blank"> Contact US</a><small>&copy; 2021-<?=date('Y')?><a href="mailto:1306homebase@gmail.com">All Rights Reserved</a></p>

</footer>

  <script>
    function myNavFunction() {
      var x = document.getElementById("myLinks");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
}
</script>
<script>
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
</script>

</body>
</html>
