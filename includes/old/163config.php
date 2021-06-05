<?php

//this helps us avoid PHP date errors:

date_default_timezone_set('America/Los_Angeles');


//Used to store all of our WEB120 configuration information
//prevents data from being sent early
ob_start();
$nav1['indexv3.php'] = "Home";
$nav1['events.php'] = "Events";
$nav1['resourcecs163.php'] = "Resources";
$nav1['contact.php'] = "Contact Us"; 

// // makeLinks function will create our dynamic nav when called.
// // Call like this:

// // echo makeLinks($nav1); #in which $nav1 is an associative array of links
    
// echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'indexv3.php':
        $title = "it163 Final tech4good";
        $PageID = 'Home';
        break;

    case 'events.php':
        $title = "it163 Final tech4good";
        $PageID = "Events";
        break;

    case 'resourcecs163.php':
        $title = "it163 Final tech4good";
        $PageID = "Resources";
        break;

    case 'contact.php':
        $title = "it163 Final tech4good";
        $PageID = "Contact";

        break;


    default:    
    $title = THIS_PAGE;    
    $logo = '';
}

function makeLinks($linkArray)
{
$myReturn = '';

foreach($linkArray as $url => $text)
{
    if($url == THIS_PAGE)
    {//selected page - add class reference
        $myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    }else{
        $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    }    
}

return $myReturn;    
}

?>
