<?php
//header('Content-Type: text/plain');
//header('Content-Transfer-Encoding: base64');
//Obligatory put Content-Encoding for GoDaddy
//header('Content-Encoding: deflate');
//header('Content-Encoding: gzip'); // it do not work with 
//header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
//header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header('Content-Type: application/json');
	/**
	 * File to handle all API requests
	 * Accepts GET and POST
	 * 
	 * Each request will be identified by TAG
	 * Response will be JSON data
	
	  /**
	 * check for POST request 
	 
	// user stored successfully
    // get tag
    $idsensor = $_POST['idsensor'];
	$tag = $_POST['tag'];
    // include db handler
    require_once '/include/DB_Functions.php';
    $db = new DB_Functions();
    // response Array	
	*/
		$response['error'] = FALSE;
		$response['exercise'][0]['idExercises'] = 1;
		$response['exercise'][0]['group'] = 1;
		$response['exercise'][0]['subGroup'] = 1;
		$response['exercise'][0]['title'] = "Activity Title";
		$response['exercise'][0]['urlVideo'] = "xUdFhdOnrMc";
		$response['exercise'][0]['description'] = "Description exercises";
		$response['exercise'][0]['favorite'] = "";
		$response['exercise'][0]['ratio'] = 4.5;
		$response['exercise'][0]['listCommentary'][0]['idComment'] = 1;
		$response['exercise'][0]['listCommentary'][0]['idUserFK'] = 1;
		$response['exercise'][0]['listCommentary'][0]['name'] = "Name user";
		$response['exercise'][0]['listCommentary'][0]['description'] = "Description Comment";
		$response['exercise'][0]['listCommentary'][0]['DateTime'] = "2016/01/01 15:00:01";
		$response['exercise'][0]['listCommentary'][0]['ratio'] = 5.0;
		$response['exercise'][0]['listCommentary'][1]['idComment'] = 2;
		$response['exercise'][0]['listCommentary'][1]['idUserFK'] = 2;
		$response['exercise'][0]['listCommentary'][1]['name'] = "Name user 02";
		$response['exercise'][0]['listCommentary'][1]['description'] = "Description Comment 02";
		$response['exercise'][0]['listCommentary'][1]['DateTime'] = "2015/12/02 13:10:23";
		$response['exercise'][0]['listCommentary'][1]['ratio'] = 4.0;
		
		header("Content-Length: " . strlen(json_encode($response)), true);
		echo json_encode($response);
	/**	
	if($tag == "sensorbyid"){
		$sensor = $db->getSensorById($idsensor);
		$response['error'] = FALSE;
		$response['idsensor'] = $sensor['idsensor'];
		$response['cityName'] = $sensor['cityName'];
		$response['stationName'] = $sensor['stationName'];
		$response['latitude'] = $sensor['latitude'];
		$response['longitude'] = $sensor['longitude'];
		/**
		$response['user']['name'] = $user['name'];
		$response['user']['email'] = $user['email'];
		$response['user']['created_at'] = $user['created_at'];
		$response['user']['updated_at'] = $user['updated_at'];
		*//**
		//header("Content-Length: " . strlen(json_encode($response)), true);
		echo json_encode($response);
	} else{
		echo "no content <br>"
	}
	*/	
?>
