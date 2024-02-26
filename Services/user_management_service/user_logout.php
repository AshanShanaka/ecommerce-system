<?php

include 'C:\xampp\htdocs\PFA\components\connect.php';

session_start();
session_unset();
session_destroy();

header('location:../pfa/home.php');

?>