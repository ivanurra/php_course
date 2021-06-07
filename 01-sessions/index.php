<?php

session_start();

// Variable normal
$variable_normal = "String";

// Variable de sesión
$_SESSION['variable_persistente'] = "Session active!";

echo $variable_normal."<br/>";
echo $_SESSION['variable_persistente'];