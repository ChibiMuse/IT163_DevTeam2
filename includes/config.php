<?php
//portal-config.php

//this helps us avoid PHP date errors:

date_default_timezone_set('America/Los_Angeles');


//Used to store all of our WEB120 configuration information
//prevents data from being sent early
ob_start();
$nav1['index.php'] = "HOME";
$nav1['events.php'] = "EVENTS";
$nav1['resources.php'] = "RESOURCES";
$nav1['contact.php'] = "CONTACT US";

// // makeLinks function will create our dynamic nav when called.
// // Call like this:

// // echo makeLinks($nav1); #in which $nav1 is an associative array of links
    
// echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "HOME TECH4GOOD: Spr 2021 IT163 Final";
        $PageID = 'HOME';
        $style = "index"
        break;

    case 'events.php':
        $title = "EVENTS TECH4GOOD: Spr 2021 IT163 Final";
        // $logo = "fa fa-compass-americas";
        // $logo_color = ' style= "color: #5d707f"';
        $PageID = "EVENTS";
        $style = "events"
        break;

    case 'resources.php':
        $title = "RESOURCES TECH4GOOD: Spr 2021 IT163 Final";
        $PageID = "RESOURCES";
        $style = "resources"
        break;

    case 'contact.php':
        $title = "CONTACT TECH4GOOD: Spr 2021 IT163 Final";
        // $logo = "fa fa-compass";
        //  $logo_color = ' style="color: #84828f';
        $PageID = "CONTACT US";
        $style = "contact"
        break;

    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default 
}


function makeLinks($linkArray)
{
$myReturn = '';

foreach($linkArray as $url => $text)
{
    if($url == THIS_PAGE)
    {//selected page - add class reference
        $myReturn .= '<li class="nav-item"><a class="nav-link active" aria-current="page" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    }else{
        $myReturn .= '<li class="nav-item"><a class="nav-link" href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    }    
}

return $myReturn;    
}

?>
