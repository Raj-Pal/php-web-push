<?php 
SESSION_START();
unset($_SESSION['username']);
header('Location: login.php');
?>