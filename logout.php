<?php
session_start();
session_destroy();
// Redirects to the login page:
header('Location: index.html');
?>