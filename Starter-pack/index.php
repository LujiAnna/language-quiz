<?php

// Require the correct variable type to be used (no auto-converting)
declare(strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


// We might use session variables so we need to enable sessions
session_start();

// Use this function when you need to need an overview of these variables
function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

whatIsHappening();

// Load your classes
require_once 'classes/Data.php';
require_once 'classes/LanguageGame.php';
// require_once 'classes/Player.php'; // Only needed for extra's
require_once 'classes/Word.php';


echo "<h1>Translate FR to EN</h1>";

// Start the game
$game = new LanguageGame();
$game->run();

require 'view.php';
