<?php
$SERVER = 'http://utyfmedari.us.radiokita.net:8000'; // url to icecast server and port
$STATS_FILE = '/status3.xsl?mount=/utyfmedari'; // path to status3.xsl and mountpoint

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

#$output = "-/utyfmedari,260,12,21,48,Katy Perry - This Is How We Do,";
#print_r (explode(",",$output));

$temp_array = (explode(",",$output));

//sort our temp array into our ral array 
$radio_info['listeners'] = $temp_array[2]; 
$radio_info['url'] = "kupingin.utyfmedari.com"; 
$radio_info['track'] = $temp_array[5]; 
$data['song'] = $radio_info['track'];
$data['complete'] = '#np '. $data['song'] .' on '. $radio_info['url'] ;

echo $data['complete'];
?> 
