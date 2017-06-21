<?php
ini_set("include_path", '/home/calderonallan/php:' . ini_get("include_path") );
class DB_Functions {
    private $conn;
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
    	require_once 'Constants.php';
        // connecting to database
        $db = new DB_Connect();
        // selecting database
        $this->conn = $db->connect();
		//echo $this->conn . '$this->conn ';
    }
 
    // destructor
    function __destruct() {     
    }

	public function getSensorByCity($_id) {
		$_id = mysql_real_escape_string($_id);
		$query = sprintf("SELECT * FROM sensor WHERE idsensor LIKE '%s%%'",$_id);
		$query_result = mysql_query($query, $this->conn);
        return $query_result;
    }
	
    public function getSensorById($_id) {
		$_id = mysql_real_escape_string($_id);
		$query = sprintf("SELECT * FROM sensor WHERE idsensor = '%s'",$_id);
		$query_result = mysql_query($query, $this->conn);
        return $query_result;
    }
    public function getAllSensor() {
		$query = "SELECT * FROM sensor";
		$query_result = mysql_query($query, $this->conn);
        return $query_result;
    }
    public function getPollutantRefSourceList($_idgroup) {
		$query = sprintf("SELECT * FROM pollutantRefSource WHERE idStationRef = '%s'",$_idgroup);
		$query_result = mysql_query($query, $this->conn);
		while($row = mysql_fetch_array($query_result)){
			$id_sensor_ref_list[$row['idStationRef']][intval($row['idPollutantsSource'])] = $row['idPollutantsFK'];
		}
        return $id_sensor_ref_list;
    }
	public function getSensorData($_idsensor,$_complexity){
		$db = new DB_Functions();
		$max_hour = 24;
		$_idsensor_group = substr($_idsensor, 0, 6);
		if($_idsensor == '' || $_idsensor_group == 'ESPMAD'){
			$id_sensor_ref_list = $db->getPollutantRefSourceList($_idsensor_group);
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
				//new
				if(!isset($array[$idstation]))
					$array[$idstation] = array();
				$cont_val = $cont + 2*($max_hour-1);
				$cont_index = ($cont + 1) + 2*($max_hour-1);
				$search = -1;
				for($i = $max_hour-1; $i >= 0 ;$i--){
					$value_hour[$i] = $row_explode[$cont_val];
					$cont_val=$cont_val-2;
					$value_check[$i] = $row_explode[$cont_index];
					$cont_index=$cont_index-2;
					if($value_check[$i] == "V" && $search == -1){
						$search = $i;
					}
				}
				if($search < 0 || $search > 23){
					$search = 99; 
					$value_hour[$search] = "-1";
				}
				if($search != -1){
					if($_complexity == 2){
						$array_tmp = array(
								'idpollutant' =>$idmagnitud,
								'idpollutantglobal' =>$id_sensor_ref_list[$_idsensor_group][intval($idmagnitud)],
								'idtechnique' =>$idtechnique,
								'isHour' =>$hour,
								'year' =>$year,
								'month' =>$month,
								'day' =>$day,
								'hour1' =>$row_explode[$cont++],      // 9
								'hour1val' =>$row_explode[$cont++],    // 10
								'hour2' =>$row_explode[$cont++],
								'hour2val' =>$row_explode[$cont++],
								'hour3' =>$row_explode[$cont++],
								'hour3val' =>$row_explode[$cont++],
								'hour4' =>$row_explode[$cont++],
								'hour4val' =>$row_explode[$cont++],
								'hour5' =>$row_explode[$cont++],
								'hour5val' =>$row_explode[$cont++],
								'hour6' =>$row_explode[$cont++],
								'hour6val' =>$row_explode[$cont++],
								'hour7' =>$row_explode[$cont++],
								'hour7val' =>$row_explode[$cont++],
								'hour8' =>$row_explode[$cont++],
								'hour8val' =>$row_explode[$cont++],
								'hour9' =>$row_explode[$cont++],
								'hour9val' =>$row_explode[$cont++],
								'hour10' =>$row_explode[$cont++],
								'hour10val' =>$row_explode[$cont++],
								'hour11' =>$row_explode[$cont++],
								'hour11val' =>$row_explode[$cont++],
								'hour12' =>$row_explode[$cont++],
								'hour12val' =>$row_explode[$cont++],
								'hour13' =>$row_explode[$cont++],
								'hour13val' =>$row_explode[$cont++],
								'hour14' =>$row_explode[$cont++],
								'hour14val' =>$row_explode[$cont++],
								'hour15' =>$row_explode[$cont++],
								'hour15val' =>$row_explode[$cont++],
								'hour16' =>$row_explode[$cont++],
								'hour16val' =>$row_explode[$cont++],
								'hour17' =>$row_explode[$cont++],
								'hour17val' =>$row_explode[$cont++],
								'hour18' =>$row_explode[$cont++],
								'hour18val' =>$row_explode[$cont++],
								'hour19' =>$row_explode[$cont++],
								'hour19val' =>$row_explode[$cont++],
								'hour20' =>$row_explode[$cont++],
								'hour20val' =>$row_explode[$cont++],
								'hour21' =>$row_explode[$cont++],
								'hour21val' =>$row_explode[$cont++],
								'hour22' =>$row_explode[$cont++],
								'hour22val' =>$row_explode[$cont++],
								'hour23' =>$row_explode[$cont++],
								'hour23val' =>$row_explode[$cont++],
								'hour24' =>$row_explode[$cont++],
								'hour24val' =>$row_explode[$cont++],
								'hour0' =>$value_hour[$search],
								'hour0val' =>($search+1)
								);
					}else if($_complexity == 1){
						$array_tmp = array(
								//'idpollutant' =>$idmagnitud,
								'idpollutantglobal' =>$id_sensor_ref_list[$_idsensor_group][intval($idmagnitud)],
								'idtechnique' =>$idtechnique,
								'isHour' =>$hour,
								'year' =>$year,
								'month' =>$month,
								'day' =>$day,
								'hour0' =>$value_hour[$search],
								'hour0val' =>($search+1));
					} else {
						$array_tmp = array(
								//'idpollutant' =>$idmagnitud,
								'idpollutantglobal' =>$id_sensor_ref_list[$_idsensor_group][intval($idmagnitud)],
								'year' =>$year,
								'month' =>$month,
								'day' =>$day,
								'hour0' =>$value_hour[$search],
								'hour0val' =>($search+1)
							);
					}
					$cont++;
					array_push($array[$idstation],$array_tmp);
					$sensor['ESPMAD'][$idstation] = $array[$idstation];
				}
			}
			return $sensor;
		}
	}
	//function
	public function readSensor($_idsensor,$query_result, $_complexity) {
		$cont = 0;
		$db = new DB_Functions();
		$array = array();
		$isLoadedSensorData = 0;
		while($row = mysql_fetch_array($query_result)){
			if($isLoadedSensorData == 0){
				$sensor_data = $db->getSensorData(substr($row['idsensor'], 0, 6), $_complexity);
				$isLoadedSensorData = 1;
			}
			//verify if are there pollutants
			if(isset($sensor_data[substr($row['idsensor'], 0, 6)][$row['idstationSourceRef']])){
				$tmpArray = $sensor_data[substr($row['idsensor'], 0, 6)][$row['idstationSourceRef']];
			}else{
				$tmpArray = array();//null array
			}
			if($_complexity == 2){
				array_push($array,array(
						'idsensor' =>$row['idsensor'],
						'latitude' =>$row['latitude'],
						'longitude' =>$row['longitude'],
						'lastUpdate' =>$row['lastUpdate'],
						'idstationSourceRef' =>$row['idstationSourceRef'],
						'cityName' =>$row['cityName'],
						'stationName' =>$row['stationName'],
						'altitude' =>$row['altitude'],
						'description' =>$row['description'],
						'measureDescription' =>$row['measureDescription'],
						'source' =>$row['source'],
						//'pollutants' => $sensor_data[substr($row['idsensor'], 0, 6)][$row['idstationSourceRef']]
						'pollutants' => $tmpArray
						));
			} else if($_complexity == 1){
				array_push($array,array(
						'idsensor' =>$row['idsensor'],
						'latitude' =>$row['latitude'],
						'longitude' =>$row['longitude'],
						'cityName' =>$row['cityName'],
						'altitude' =>$row['altitude'],
						//'pollutants' => $sensor_data[substr($row['idsensor'], 0, 6)][$row['idstationSourceRef']]
						'pollutants' => $tmpArray
						));
			} else{
				array_push($array,array(
					'idsensor' =>$row['idsensor'],
					//'pollutants' => $sensor_data[substr($row['idsensor'], 0, 6)][$row['idstationSourceRef']]
					'pollutants' => $tmpArray
					));
				}
			$cont++;
		}
		return array('sensors'=>$array);
    }
}

?>
