<?php

include 'config.php';
$search = $_GET['search'];
$sql = "SELECT Id,FirstName,LastName,Status
FROM employeemaster
WHERE concat(FirstName,LastName) LIKE '%{$search}%'";
$result = mysqli_query($conn, $sql) or die("SQL Failed");
$output = [];

if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    $output[] = $row;
  }
}else{
    $output['empty'] = ['empty'];
}

mysqli_close($conn);

echo json_encode($output);

?>