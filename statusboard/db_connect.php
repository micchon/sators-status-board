<?php
// **********************************
// *     Code by Matt Satorius      *
// *        www.sators.com          *
// **********************************

// Database Connection User/Pass. Enter your MySQL info here
mysql_connect("server", "username", "password") or die(mysql_error()); 
// Database Selection
mysql_select_db("database") or die(mysql_error()); 
?>
