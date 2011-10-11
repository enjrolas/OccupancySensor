<?php
$threshhold=200;  //occupancy threshhold, in watts
// set url for pachube data feed
$url ="http://api.pachube.com/v2/feeds/34432/datastreams/0.json";
$key="1uSky2fDqfMfbR0LETrHEuHRicLWCJ0JiYcND5dD6zc";  //my user key, because pachube asks for it.  
// get data using curl coz "get_file_contents" throws error on some servers !
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-PachubeApiKey: $key"));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$feed = curl_exec($ch);
curl_close($ch);

$json_object=json_decode($feed);

$power=$json_object->current_value;

echo "<html>";
if($power>$threshhold)
  echo "<body bgcolor='#55CC55'><center><h1>Somebody's home!  Come on down to the HKspace party!</h1></center>";
else
  echo "<body bgcolor='#5555CC'><center><h1>Come play with me!  I'm all alone at HKspace!</h1></center>";
echo "<br/><br/>power usage=$power Watts</body></html>";
?>