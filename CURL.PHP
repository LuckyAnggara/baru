<?php

function http_request($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	// curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows;U; Windows NT 5.1; en-US; rc:1.8.1.13) Gecko/20080311 Fireforx/2.0.0.13');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	$output = curl_exec($ch);
	 
	return $output;
	curl_close($ch);

}

$profile = http_request("http://bniforum.bni.co.id/index.php/tag/featured_news");
$pecah = explode('<a>', $profile);

// var_dump($pecah);
// echo "<pre>";
// print_r ($pecah);
// echo "</pre>"

$pecahlagi = explode('</a>',$pecah[1]);
echo "<span class = 'feed-link'>";
echo $pecahlagi[0];
echo "</span>";

?>
