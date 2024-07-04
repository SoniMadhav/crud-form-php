<?php

$conn = new mysqli('localhost', 'root', '', 'form_crud');

if (!$conn) {
    die(mysqli_error($conn));
}
?>