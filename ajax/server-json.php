<?php
	header("Content-Type: application/json; charset=utf-8");
	$data=[
			["name"=>"w", "age"=>"20"],
			["name"=>"a", "age"=>"21"],
			["name"=>"n", "age"=>"22"],
			["name"=>"g", "age"=>"23"],
			["name"=>"x", "age"=>"24"],
			["name"=>"u", "age"=>"25"],
		  ];

	echo json_encode($data);

?>