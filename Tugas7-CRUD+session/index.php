<?php
require('function.php');

if (isset($_SESSION['login'])) {
    header('Location: dashboard.php');
} else {
    header('Location: login.php');
}
