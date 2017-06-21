<?php
	//GoDaddy configurations
	ini_set("include_path", '/home/calderonallan/php:' . ini_get("include_path") );
    require_once 'include/Constants.php';
    // include db handler
    //$file = file_get_contents(URL_ESPMAD, true);
	//var_dump($file);
	header('Content-Type: application/json');
	$file = explode("\n", file_get_contents(URL_ESPMAD));
	$cont=0;
	foreach($file as $line) {
  		$array_line[$count] = $line;
		$count++;
	}
	foreach($array_line as $array_line_explode) {
		$row_explode = explode(",", $array_line_explode);
		$cont = 0;
		$idstation = $row_explode[$cont++].$row_explode[$cont++].$row_explode[$cont++];  //0, 1 and 2
		$idmagnitud = $row_explode[$cont++]; //3
		$idtechnique = $row_explode[$cont++]; //4
		$hour = $row_explode[$cont++]; //5
		$year = $row_explode[$cont++]; //6
		$month = $row_explode[$cont++]; //7
		$day = $row_explode[$cont++]; //8
		$sensor[$idstation]['idsource'] = $idstation;
		$sensor[$idstation][$idmagnitud]['idpollutant'] = $idmagnitud;
		$sensor[$idstation][$idmagnitud]['idtechnique'] = $idtechnique;
		$sensor[$idstation][$idmagnitud]['isHour'] = $hour;
		$sensor[$idstation][$idmagnitud]['year'] = $year;
		$sensor[$idstation][$idmagnitud]['month'] = $month;
		$sensor[$idstation][$idmagnitud]['day'] = $day;
		$sensor[$idstation][$idmagnitud]['hour1'] = $row_explode[$cont++]; //9
		$sensor[$idstation][$idmagnitud]['hour1val'] = $row_explode[$cont++]; //10
		$sensor[$idstation][$idmagnitud]['hour2'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour2val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour3'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour3val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour4'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour4val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour5'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour5val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour6'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour6val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour7'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour7val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour8'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour8val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour9'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour9val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour10'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour10val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour11'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour11val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour12'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour12val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour13'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour13val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour14'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour14val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour15'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour15val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour16'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour16val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour17'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour17val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour18'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour18val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour19'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour19val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour20'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour20val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour21'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour21val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour22'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour22val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour23'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour23val'] = $row_explode[$cont++]; 
		$sensor[$idstation][$idmagnitud]['hour24'] = $row_explode[$cont++];
		$sensor[$idstation][$idmagnitud]['hour24val'] = $row_explode[$cont++]; 
	}
	header("Content-Length: " . strlen(json_encode($sensor)), true);
	echo json_encode($sensor);
?>