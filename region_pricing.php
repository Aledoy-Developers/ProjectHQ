<?php

ini_set("display_errors", 0);
$ip = $_SERVER['REMOTE_ADDR'];
$response = file_get_contents("http://ipinfo.io/{$ip}/json");
$data = json_decode($response);

$country = $data->country ?? 'Unknown';

// echo "User country: " . $country;


if($country == 'NG')
{
    $currency = 'N';
    $pricing = array('aws' => '1800000', 'product_owner' => '2800000', 'product_mgt' => '3000000', 'data_analysis' => '3500000', 'business_analysis' => '1500000', 'product_design' => '1200000', 'cyber' => '2000000');
} elseif($country == 'US' || $country == 'CA')
{
    $currency = '$';
    $pricing = array('aws' => '2000', 'product_owner' => '2000', 'product_mgt' => '2500', 'data_analysis' => '3000', 'business_analysis' => '1500', 'product_design' => '1200', 'cyber' => '2000');
}
else
{
    $currency = '$';
    $pricing = array('aws' => '2000', 'product_owner' => '2000', 'product_mgt' => '2500', 'data_analysis' => '3000', 'business_analysis' => '1500', 'product_design' => '1200', 'cyber' => '2000');
}
?>