<?php
session_start();
unset($_SESSION['user_logged_in']);
unset($_SESSION['logged_in_user_id']);
header('Location: index.php');
