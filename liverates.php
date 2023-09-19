<?php
$url = 'https://www.live-rates.com/rates'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$json = json_decode($data); // decode the JSON feed

foreach($json as $obj){
    if ($obj->currency == 'EUR/USD'){
        echo "Pair: $obj->currency\n";
           echo "Bid: $obj->bid\n";
           echo "Ask: $obj->ask\n";
           echo "Timestamp: $obj->timestamp\n";
    }
}
?>