<?php

# Replace these values with your key and secret
// $api_key = "yr6vp4qc6s36t998e8yz688b";
// $api_secret = "AdjiLpVq4jJonriLeHui";

$api_key = "8dd9dwxs5wpsud2n7jgwbyyh";
$api_secret = "7zeqpjymt94rtVgCe4EK";

$phrase =  $_GET['search'];

$return_arr = array();



$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.gettyimages.com/oauth2/token",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "grant_type=client_credentials&client_id=" . $api_key . "&client_secret=". $api_secret,
    CURLOPT_HTTPHEADER => array(
        "Cache-Control: no-cache",
        "Content-Type: application/x-www-form-urlencoded"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
    exit;
}

$token_response = json_decode($response, true);
$access_token = $token_response["access_token"];


$curl = curl_init();
curl_setopt_array($curl, array(
    // CURLOPT_URL => "https://api.gettyimages.com/v3/search/images?phrase=" . urlencode($phrase) . "&page=1&page_size=99",
    CURLOPT_URL => "https://api.gettyimages.com/v3/search/images/creative?fields=display_set&phrase=" . urlencode($phrase) . "&page=1&page_size=99",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Api-Key: " . $api_key,
        "Authorization: Bearer " . $access_token
    )
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
    exit;
}

$search_response = json_decode($response, true);
$images = $search_response["images"];

echo json_encode($images);
//echo "Found " . $search_response["result_count"] . " images.\n";
//for ($i = 0; $i < count($images); $i++) {
//    echo json_encode($images[$i]["display_sizes"][0]["uri"]);
//    echo "Image " . $i . " title: " . $images[$i]["title"] . "\n\t" . $images[$i]["display_sizes"][0]["uri"] . "\n\n";
//}