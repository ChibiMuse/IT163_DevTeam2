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
<script src="js/timer.js"></script>
<?php include 'includes/footer163.php'?> 
 </main>
</body>
</html>
