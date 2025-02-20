<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'test1db';
$databaseName = 'test1';
$databaseUsername = 'root';
$databasePassword = 'solopos321';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>