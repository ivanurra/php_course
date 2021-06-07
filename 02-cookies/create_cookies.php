<?php

// Create cookie
// setcookie("name", "value, only text", expiration, route, domain);

// Basic cookie
setcookie("micookie", "value");

// Cookie with expiration
setcookie("unyear", "value cookie", time()+(60*60*24*365));

?>

<a href="see_cookies.php">Go Cookies</a>