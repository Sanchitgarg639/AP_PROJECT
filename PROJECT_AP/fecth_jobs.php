<?php
$apiUrl = "https://jobicy.com/api/v2/remote-jobs";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// If API key is needed, include this:
// curl_setopt($ch, CURLOPT_HTTPHEADER, [
//     "Authorization: Bearer YOUR_API_KEY"
// ]);

$response = curl_exec($ch);

if ($response === false) {
    echo "Curl Error: " . curl_error($ch);
    exit;
}

curl_close($ch);

// Save data to jobs.json
file_put_contents("jobs.json", $response);

echo "Jobs data successfully fetched and saved to jobs.json!";
?>
