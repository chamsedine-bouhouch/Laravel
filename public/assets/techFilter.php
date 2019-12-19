<?php

function techFilter($conn,$region,$specialite){
	//region 1
	//specialité tableau
	$techTableFinal = [];
	$region = mysqli_real_escape_string($conn,$region);
	if(is_array($specialite)){
		for($i=0;$i<count($specialite);$i++){
			$specialite[$i] = mysqli_real_escape_string($conn,$specialite[$i]);
			if($i==0){
				$specQ = "AND categorie = '$specialite[$i]' ";
			}
			else if($i == count($specialite) -1){
				$specQ .= "OR categorie = '$specialite[$i]'";
			}
			else{
				$specQ .= "OR categorie = '$specialite[$i]' ";
			}
		}
	}
	else{
		$specialite = mysqli_real_escape_string($conn,$specialite);
		$specQ = "AND categorie = '$specialite'";
	}
	//
	$techQuery = "SELECT * FROM personnes WHERE region = '$region'";
	while($techPersonData = mysqli_fetch_assoc(mysqli_query($conn,$techQuery))){
		$recognize = $techPersonData["ID_personne"];
		$recQuery = "SELECT * FROM techniciens WHERE ID_personne = '$recognize' $specQ";
		$dataArray = $techPersonData;
		$techniciensRegion = mysqli_fetch_assoc(mysqli_query($conn,$recQuery));
		if(!in_array($techniciensRegion["ID_technicien"],$techTableFinal)){
			unset($techniciensRegion["ID_personne"]);
			$whole = array_merge($techniciensRegion,$dataArray);
			array_push($techTableFinal,$whole);
		}
	}
	
	return $whole;
	
}

?>