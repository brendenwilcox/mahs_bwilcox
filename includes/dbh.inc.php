<?php

$serverName = "localhost:3306";
$dBUserName = "mahs_bwilcox";
$dBPassword = "mustangs";
$dBName = "mahs_bwilcox";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}