<?php

include 'config.php';

$sid = $_GET['editId'];

$sql = "SELECT * FROM employeemaster WHERE Id = {$sid}";

$result = mysqli_query($conn, $sql) or die("SQL Failed");
$output = [];

if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    $output['response'][] = $row;
  }
}


mysqli_close($conn);

echo json_encode($output);

?>