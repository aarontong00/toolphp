<?php


$files = glob(__DIR__ . '/bg-image/*');


foreach($files as $file) {
	$needPath = 'http://www.themezaa.com/html/leadgen/builder/elements/images/' . str_ireplace(__DIR__, '', $file);
	
	$imageName = str_ireplace(__DIR__ . '/bg-image/', '', $file); 
	
	file_put_contents(__DIR__ . '/temp/'. $imageName, file_get_contents($needPath));

	
	copy(__DIR__ . '/temp/' . $imageName, $file);
	
	
	
}



