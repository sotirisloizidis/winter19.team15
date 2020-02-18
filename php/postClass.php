<?php
include 'connectDB.php';

echo "eginike re vlaka";
$positions=($_POST["positions"]);
echo json_encode($positions);
$conn->close();
?>
