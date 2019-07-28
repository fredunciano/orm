
<?php

// function sendjob(){
// 	$endpoint = "https://sandbox.zamzar.com/v1/jobs";
// 	$apiKey = "d8d838692fceb7124eb9062ea4cbcdb6c13a3344";
// 	$sourceFilePath = "sample.ppt";
// 	$targetFormat = "jpeg";

// 	// Since PHP 5.5+ CURLFile is the preferred method for uploading files
// 	if(function_exists('curl_file_create')) {
// 	  $sourceFile = curl_file_create($sourceFilePath);
// 	} else {
// 	  $sourceFile = '@' . realpath($sourceFilePath);
// 	}

// 	$postData = array(
// 	  "source_file" => $sourceFile,
// 	  "target_format" => $targetFormat
// 	);

// 	$ch = curl_init(); // Init curl
// 	curl_setopt($ch, CURLOPT_URL, $endpoint); // API endpoint
// 	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
// 	curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
// 	curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false); // Enable the @ prefix for uploading files
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return response as a string
// 	curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ":"); // Set the API key as the basic auth username
// 	$body = curl_exec($ch);
// 	curl_close($ch);

// 	$response = json_decode($body, true);
// 	print_r($response);
// 	return  $response['id'];
// }



// $jobID = sendjob();
// die();
// $endpoint = "https://sandbox.zamzar.com/v1/jobs/$jobID";
// $apiKey = "d8d838692fceb7124eb9062ea4cbcdb6c13a3344";

// $ch = curl_init(); // Init curl
// curl_setopt($ch, CURLOPT_URL, $endpoint); // API endpoint
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return response as a string 
// curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ":"); // Set the API key as the basic auth username
// $body = curl_exec($ch);
// curl_close($ch);

// $job = json_decode($body, true);

// $target_files = $job['target_files'];

// $cc= 0;
// foreach ($target_files as $key => $value) {

// 	$fileID = $value['id'];
// 	$localFilename = "portrait".$cc.".jpeg";
// 	$endpoint = "https://sandbox.zamzar.com/v1/files/$fileID/content";
// 	$apiKey = "d8d838692fceb7124eb9062ea4cbcdb6c13a3344";

// 	$ch = curl_init(); // Init curl
// 	curl_setopt($ch, CURLOPT_URL, $endpoint); // API endpoint
// 	curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ":"); // Set the API key as the basic auth username
// 	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

// 	$fh = fopen($localFilename, "wb");
// 	curl_setopt($ch, CURLOPT_FILE, $fh);

// 	$body = curl_exec($ch);
// 	curl_close($ch);

// 	echo "File downloaded\n";
// 	$cc++;
		
// }

$endpoint = "https://api.zamzar.com/v1/jobs";
$apiKey = "e71957575fc586431cfa9c439522014271a4edb6";
$sourceFile = "sample.ppt";
$targetFormat = "png";

$postData = array(
  "source_file" => $sourceFile,
  "target_format" => $targetFormat
);

$ch = curl_init(); // Init curl
curl_setopt($ch, CURLOPT_URL, $endpoint); // API endpoint
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return response as a string
curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ":"); // Set the API key as the basic auth username
$body = curl_exec($ch);
curl_close($ch);

$response = json_decode($body, true);

echo "Response:\n---------\n";
print_r($response);