<?php
/**
 * Config-file for Amelie. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define Amelie paths.
 *
 */
define('AMELIE_INSTALL_PATH', __DIR__ . '/..');
define('AMELIE_THEME_PATH', AMELIE_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(AMELIE_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


/**
 * Create the Amelie variable.
 *
 */
$amelie = array();


/**
 * Site wide settings.
 *
 */
$amelie['lang']         = 'sv';
$amelie['title_append'] = ' | Amelie en webbtemplate';

$amelie['header'] = <<<EOD
<img class='sitelogo' src='img/anax.png' alt='Anax Logo'/>
<span class='sitetitle'>Anax webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$amelie['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;



/**
 * Theme related settings.
 *
 */
//$amelie['stylesheet'] = 'css/style.css';
$amelie['stylesheets'] = array('css/style.css');
$amelie['favicon']    = 'favicon.ico';



/**
 * Settings for JavaScript.
 *
 */
$amelie['modernizr'] = 'js/modernizr.js';
$amelie['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$amelie['jquery'] = null; // To disable jQuery
$amelie['javascript_include'] = array();
//$amelie['javascript_include'] = array('js/main.js'); // To add extra javascript files



/**
 * Google analytics.
 *
 */
$amelie['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics
