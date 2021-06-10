<?php include 'includes/config.php'?>

<!DOCTYPE html>
<!-- getting error message because of the Latin, will change when content is added -->
<html lang="en">

<head>

<!--- Required meta tags -->
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8"/>

<!-- StyleSheets -->
<link rel="stylesheet" href="../css/<?=$style?>.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Myriad+Pro&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Fieldwork&display=swap" rel="stylesheet" />


<!-- Bootstrap CSS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


<title><?=$title?></title>

 <!-- Overwrite Bootstrap in this Style section. Make sure to use the same level of specificity as the Bootstrap you are trying to overide-->
 <style>
        
        body {
            background-color: var(--main-background-color);
        }

        /* Overwrites the bootstrap P tag so that the footer text is centered properly */
        footer p {
            margin: 1em;
        }

        /* changes the nav text color*/
        .nav-link{
            color: var(--main-light-color);
        }

        /* changes the active nav background color*/
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
             background-color: var(--main-accent-color);
               }
        
        /* changes the active nav background HOVER color*/
        .nav-pills .nav-link.active:hover {
             background-color: var(--secondary-accent-color);
               }

        .navbar-brand {
            margin-right: 2rem;
        }
        
        /* changes the nav text HOVER color*/
        .nav-link:focus, .nav-link:hover {
          color: var(--secondary-accent-color);
        }
        
        

    </style>

</head>

<body>

<div class="wrapper">

<div class="mobinav" id="mobi">
  <div id="myLinks">
  <!-- Navigation links (hidden by default) -->
    <!-- <a href="indexv4.php">HOME</a>
    <a href="events.php">EVENTS</a>
    <a href="resourcecs163.php">RESOURCES</a>
    <a href="contact.php">CONTACT US</a> -->
    
  </div>
      </div>
  
  <header class="container sticky-top">
        <nav class="navbar-brand  nav-pills nav-justified">

            <ul class="nav navbar-brand align-items-center">
                <li class="navbar-brand">
                    <a href="#"><img class="img-fluid" src="imgs/logo.png"></a>
                </li>
      <?=makeLinks($nav1)?>
            <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">EVENTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">RESOURCES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                </li> -->
      </ul>
</nav>  

</header>
