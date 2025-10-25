<?php
//sessions are destroyed using session_destroy() function

session_start();
session_unset(); // unset all session variables
session_destroy(); // destroy the session
echo "You have been logged out!<br>";


?><a href="login.php">Login Again</a>