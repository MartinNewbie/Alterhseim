<?php

// Geolocation detection with JavaScript, HTML5 and PHP
// http://locationdetection.mobi/
// Andy Moore
// http://andymoore.info/
// this is linkware if you use it please link to me:
// <a href="http://web2txt.co.uk/">Mp3 Downloads</a>

$geo = 'http://maps.google.com/maps/api/geocode/xml?latlng='.htmlentities(htmlspecialchars(strip_tags($_GET['latlng']))).'&sensor=true';
$xml = simplexml_load_file($geo);

foreach($xml->result->address_component as $component){
 
	if($component->type=='locality'){
		$geodata['town_city'] = $component->long_name;
	}
 
	if($component->type=='postal_code'){
		$geodata['postcode'] = $component->long_name;
	}
 
}

list($lat,$long) = explode(',',htmlentities(htmlspecialchars(strip_tags($_GET['latlng']))));

$geodata['formatted_address'] = $xml->result->formatted_address;
 
foreach($geodata as $name => $value){
if($name == "postcode"){
	echo $value;}
}

?>