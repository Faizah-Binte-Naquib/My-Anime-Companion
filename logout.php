<?php
session_start();
session_destroy();
header("Location: http://localhost/AnimeProject/home.php"); /* Redirect browser */
exit();
?>
