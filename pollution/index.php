<?php
	//GoDaddy configuration
	ini_set("include_path", '/home/calderonallan/php:' . ini_get("include_path") );
    // include db handler
    require_once 'include/DB_Functions.php';
	header('Content-Type: application/json');
	//Functions
    $db = new DB_Functions();
	/**
	  * Types:
	  * 	[0] - idSensor
	  * 	[1] - citySensors
	  * 	[2] - allSensors
	  */
    $type = $_GET['type'];
	$_type = mysql_real_escape_string($type);
	/**
	  * ID (if types):
	  * 	[0] - <null>
	  * 	[1] - <ESPMAD>
	  * 	[2] - <ESPMAD1>
	  */
    $idsensor = $_GET['id'];
	$_idsensor = mysql_real_escape_string($idsensor);
	/**
	  * Complexity:
	  * 	[0] - "only basic values"
	  * 	[1] - "medium amount of information"
	  * 	[2] - "all information"
	  */
    $complexity = $_GET['complexity'];
	$_complexity = mysql_real_escape_string($complexity);
	
	if(intval($_type) == 0){   //[$_type == 0] - only get 1 sensor (idSensor)
		$query_result = $db->getSensorById($_idsensor);
		$result = $db->readSensor($_idsensor,$query_result,$_complexity);
		if(mysql_num_rows($query_result) == 1){
			$result['error'] = FALSE;
		}
		else{
			$result['error'] = TRUE;
			$result['description'] = "[Code: 001] 'id' parameter in GET method not valid";
		}
	} else if(intval($_type) == 1){   //[$_type == 1] - get all sensors for a certain city
		$query_result = $db->getSensorByCity(substr($_idsensor, 0, 6));
		$result = $db->readSensor($_idsensor,$query_result,$_complexity);
		if(mysql_num_rows($query_result) > 0){
			$result['error'] = FALSE;
		}
		else{
			$result['error'] = TRUE;
			$result['description'] = "[Code: 003] 'id' parameter in GET method not valid";
		}
	} else if(intval($_type) == 2){   //[$_type == 1] - get all sensors for a certain city
		$query_result = $db->getAllSensor();
		$result = $db->readSensor("",$query_result,$_complexity);
		if(mysql_num_rows($query_result) > 0){
			$result['error'] = FALSE;
		}
		else{
			$result['error'] = TRUE;
			$result['description'] = "[Code: 002] Error accessing DB";
		}
	}
	header("Content-Length: " . strlen(json_encode($result)), true);
	echo json_encode($result);
?>
