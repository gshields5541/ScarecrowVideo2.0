<?php
/**
 * Created by PhpStorm.
 * User: GeraldShields
 * Date: 3/10/18
 * Time: 5:31 AM
 */

$servername = "localhost";
$username = "root";
$password = "";
$db = "scarecrowVidDB";

// Create a connection

$con = mysqli_connect($servername, $username, $password,$db);

// Check the connection
if(!$con){
    die("The connection failed: ".mysqli_connect_error());
}