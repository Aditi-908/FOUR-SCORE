<?php
try{
 //$ip=$_GET['ip'];

$cityName='';
 $countryName='';
 $regionName='';
;

 $apikey='f6db4f609a8af151aa2602cf33f4fa6ccc456126392b3868c2a918c6882454d6';
 $url = 'http://api.ipinfodb.com/v3/ip-city/?key='.$apikey.'&format=json&ip='.$ip;
 $response = file_get_contents($url);
  $json_array=json_decode($response,true);
  
  
	function insert_into_database($countryName,$regionName,$cityName){
		require_once('db_config.php');
		if($statusCode=='OK'){
			$sql="INSERT INTO ip.loc(country,state,city) value (?,?,?)";
			$stm=mysqli_prepare($con,$sql);
			mysqli_stmt_bind_param($stm,"sss",$countryName,$regionName,$cityName);
			mysqli_stmt_execute($stm);
		}
	} 

	 
 function display_array_recursive($json_rec){
		if($json_rec){
			foreach($json_rec as $key=> $value){
				if(is_array($value)){
					display_array_recursive($value);
				}else{
					//echo $key.'--'.$value.'<br>';
					
					if($key=='countryName'){
						$countryName=$value;
					}
					if($key=='regionName'){
						$regionName=$value;
					}
					if($key=='cityName'){
						$cityName=$value;
						insert_into_database($countryName,$regionName,$cityName);
					}
				}	
			}	
		}	
	}
  	display_array_recursive($json_array);
}catch(Exception $e){
    echo $e->getMessage();
}
?>