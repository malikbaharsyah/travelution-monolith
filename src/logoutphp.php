<?php
session_destroy();
$redirect_url = "../app/views/landingpage.php";
header("Location: $redirect_url");
?>