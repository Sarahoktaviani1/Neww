<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname   = 'db_thecoffeshop';

    $conn = @new mysqli($hostname, $username, $password, $dbname) or die('Gagal terhubung ke database');
?>