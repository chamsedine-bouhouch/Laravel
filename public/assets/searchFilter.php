<?php

function SearchFilter($conn,$keyowrd){
	//keyword 1
	$serviceArray = [];
	$keyword = mysqli_real_escape_string($conn,$keyword);
	$categoryQuery = "SELECT * FROM Services WHERE titre REGEXP '$keyword' ORDER BY prix ASC";
	$queryResult = mysqli_fetch_assoc(mysqli_query($conn,$categoryQuery));
	while($service = $queryResult){
		if(!in_array($service["ID_Service"],$serviceArray)){
			if(strlen($keyword) > strlen($service["titre"])){
				continue;
			}
			array_push($serviceArray,$service);
		}
	}
	return $serviceArray; //type tableau
}

?>