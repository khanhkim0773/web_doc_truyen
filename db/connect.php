<?php
$host = "localhost";
$username = "root";
$pasword = "";
$dbname = "webtruyendb";

// tạo kết nối
$conn = new mysqli($host, $username, $pasword, $dbname);

// kiểm tra kết nối thành công?
if ($conn->connect_error)
    die("Connection failed!" . $conn->connect_error);
//echo "Connection successful!";
