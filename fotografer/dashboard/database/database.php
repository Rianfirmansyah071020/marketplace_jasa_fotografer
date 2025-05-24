<?php

error_reporting(0);

$conn = mysqli_connect("localhost", "root", "", "marketplace_fotografer");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
