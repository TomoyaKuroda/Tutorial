<?php

$conn = mysqli_connect('localhost', 'root', '', 'ninja_pizza');
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
?>