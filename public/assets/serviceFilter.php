<?php

function ServiceFilter($conn,$cat,$type){
	// cat 1
	// type => tableau
	$cat = mysqli_real_escape_string($conn,$cat);
	if(is_array($type)){
		if(count($type) > 1){
		for($i=0;$i<count($array);$i++){
			$type[$i] = mysqli_real_escape_string($conn,$type[$i]);
			if($i == 0){
				$typeQuery = "AND type = '$type[$i]' ";
			}
			elseif($i == count($type)-1){
				$typeQuery .= "OR type = '$type[$i]'";
			}
			else{
				$typeQuery .= "OR type = '$type[$i]' ";
			}
		}
							}
		else{
			$type = mysqli_real_escape_string($conn,$type);
			$typeQuery = "AND type = '$type'";
		}
						}
	   
	$serviceArray = [];
	$categoryQuery = "SELECT * FROM Services WHERE categorie = '$cat' $typeQuery ORDER BY prix ASC";
	$queryResult = mysqli_fetch_assoc(mysqli_query($conn,$categoryQuery));
	while($service = $queryResult){
		if(!in_array($service["ID_Service"],$serviceArray)){
			array_push($serviceArray,$service);
		}
	}
	return $serviceArray; //type tableau
}
?>