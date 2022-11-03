<?php

include 'config.php';

$input = file_get_contents('php://input');
$decode = json_decode($input, true);


	if($decode['id'] && $decode['status'])
	{
		$id = $decode["id"];
	    $status = $decode["status"];
	

	$sql = "UPDATE employeemaster SET Status = {$status} WHERE Id = {$id}";
	if(mysqli_query($conn,$sql)){
		echo json_encode(array('update' => 'success'));
	}else{
		echo json_encode(array('update' => 'failed'));
	}
		
	
	}




?>