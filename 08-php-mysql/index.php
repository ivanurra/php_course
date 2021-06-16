<?php

// Connection to DB
$conexion = mysqli_connect("localhost","root", "", "phpmysql");

// Test connection
if(mysqli_connect_errno()) {
    echo "Connection to DB failed.".mysqli_connect_error();
} else {
    echo "Connection done.";
}