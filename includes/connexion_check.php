<?php
session_start();

if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    header('location: ../index.php');
    exit;
}