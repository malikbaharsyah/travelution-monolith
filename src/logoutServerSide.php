<?php
    session_start();
    session_destroy();
    $redirect_url = "/";
    header("Location: $redirect_url");
?>