<?php
$conn = new mysqli("localhost", "root", "", "robot_arm");

$id = $_POST["id"];
$conn->query("UPDATE poses SET status = 0 WHERE id = $id");
$conn->close();
?>
