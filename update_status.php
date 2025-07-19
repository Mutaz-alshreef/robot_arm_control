<?php
include 'db.php';
$conn->query("UPDATE status SET run_status = 0 WHERE id = 1");
$conn->close();
?>