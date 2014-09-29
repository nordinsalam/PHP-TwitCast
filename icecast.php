<?php
$SERVER = 'http://icecast.server:port'; // url to icecast server and port
$STATS_FILE = '/icecast-status.xsl?mount=/mountpoint'; // path to icecast-status.xsl and mountpoint
$STREAM_PAGE = 'http://streampage'; // url to streaming web page or homepage

// END CONFIGURATION

//create a new curl resource 
$ch = curl_init(); 

//set url 
curl_setopt($ch,CURLOPT_URL,$SERVER.$STATS_FILE); 

//return as a string 
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); 

//$output = our stauts.xsl file 
$output = curl_exec($ch); 

//close curl resource to free up system resources 
curl_close($ch); 

#$output = "90.7 UTYFM Medari,1,Armada - Katakan Sejujurnya";
#print_r (explode(",",$output));

$temp_array = (explode(",",$output));

//sort our temp array into our ral array 
$radio_info['station_name'] = $temp_array[1];
$radio_info['listener'] = $temp_array[2];
$radio_info['url'] = $STREAM_PAGE; 
$radio_info['track'] = $temp_array[3]; 
$data['song'] = $radio_info['track'];
$data['complete'] = '#np '. $data['song'] .' on '. $radio_info['url'] ;

echo $data['complete'];
?> 
