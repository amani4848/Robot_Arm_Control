<?php
$conn = new mysqli("localhost", "root", "", "robot_arm");

$result = $conn->query("SELECT * FROM poses WHERE status = 1 ORDER BY id DESC");
$data = [];
while($row = $result->fetch_assoc()) {
  $data[] = $row;
}
echo json_encode($data);
$conn->close();
?>
