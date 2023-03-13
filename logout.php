<?php
session_start(); // start session

// unset all session variables
$_SESSION = array();

// delete session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// destroy session
session_destroy();

// redirect to login page
header("Location: index.html");
exit;
?>
