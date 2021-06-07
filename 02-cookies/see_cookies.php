<?php

if(isset($_COOKIE['mycookie'])) {
    echo "<h1>".$_COOKIE['mycookie']."</h1>";
} else {
    echo "No cookie";
}

if(isset($_COOKIE['unyear'])) {
    echo "<h1>".$_COOKIE['unyear']."</h1>";
} else {
    echo "No cookie";
}

?>

<a href="delete_cookies.php">DELETE COOKIES</a>