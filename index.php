<?php

session_start();

if (empty($_SESSION['userLogin'])) {
    header('Location: Resource/Views/Pages/login.php');
}