<?php
$conn = new mysqli("localhost", "root", "", "robot_arm");

$id = $_POST["id"];
$conn->query("DELETE FROM poses WHERE id = $id");
$conn->close();
?>
