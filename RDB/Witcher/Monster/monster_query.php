<?php
$servername = "localhost:3308";
$user = "root";
$pw = "";
$daten = "witcher";

$conn = new mysqli($servername, $user, $pw, $daten);

if($conn->connect_error)
{
	die("Fehler");
}
mysqli_set_charset($conn,"utf8");

$sql1 = "SELECT * FROM schwach WHERE monster = " . '"' . $_POST['name'] . '"';
$result1 = $conn->query($sql1) or die($conn->error);
$data = array();

while($row = $result1->fetch_assoc())
{
  $data[] = $row;
}

$sql2 = "SELECT * FROM monster WHERE monster = " . '"' . $_POST['name'] . '"';
$result2 = $conn->query($sql2) or die($conn->error);
while($row = $result2->fetch_assoc())
{
  $data[] = $row;
}

$sql3 = "SELECT * FROM lokalisierung WHERE monster = " . '"' . $_POST['name'] . '"';
$result3 = $conn->query($sql3) or die($conn->error);
while($row = $result3->fetch_assoc())
{
  $data[] = $row;
}

echo json_encode($data);

 ?>
