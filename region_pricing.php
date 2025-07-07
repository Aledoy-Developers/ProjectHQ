<?php

$ip = $_SERVER['REMOTE_ADDR'];
$response = file_get_contents("http://ipinfo.io/{$ip}/json");
$data = json_decode($response);

$country = $data->country ?? 'Unknown';

// echo "User country: " . $country;


if($country == 'NG')
{
    $currency = 'N';
    $pricing = array('aws' => '3055880', 'product_owner' => '3055880', 'product_mgt' => '3819850', 'data_analysis' => '4583820', 'business_analysis' => '2291910', 'product_design' => '1833528', 'cyber' => '3055880');
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