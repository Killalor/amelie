<?php 
/**
 * This is a Amelie pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anax variable with its defaults.
include(__DIR__.'/config.php'); 



// Do it and store it all in variables in the Amelie container.
$amelie['title'] = "404";
$amelie['header'] = "";
$amelie['main'] = "This is a Amelie 404. Amelie is not in for the moment!";
$amelie['footer'] = "";

// Send the 404 header 
header("HTTP/1.0 404 Not Found");


// Finally, leave it all to the rendering phase of Anax.
include(AMELIE_THEME_PATH);
