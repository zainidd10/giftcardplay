<?php


//////////////////////////////////////// GET Country & Country CODE ! ////////////////////////////////////////////////
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
$result  = "Unknown";
if(filter_var($client, FILTER_VALIDATE_IP)){
    $ip = $client;
}
elseif(filter_var($forward, FILTER_VALIDATE_IP)){
    $_SESSION['_ip_'] = $ip = $forward;
}
else{
    $_SESSION['_ip_'] = $ip = $remote;
}
$IP_LOOKUP = @json_decode(file_get_contents("http://ip-api.com/json/".$_SESSION['_ip_']));
$LOOKUP_COUNTRY = $IP_LOOKUP->country;
$LOOKUP_CNTRCODE= $IP_LOOKUP->countryCode;
$LOOKUP_CITY    = $IP_LOOKUP->city;
$LOOKUP_REGION  = $IP_LOOKUP->region;
$LOOKUP_STATE   = $IP_LOOKUP->regionName;
$LOOKUP_ZIPCODE = $IP_LOOKUP->zip;
$_SESSION['_LOOKUP_COUNTRY_'] = $LOOKUP_COUNTRY;
$_SESSION['_LOOKUP_CNTRCODE_']= $LOOKUP_CNTRCODE;
$_SESSION['_LOOKUP_CITY_']    = $LOOKUP_CITY;
$_SESSION['_LOOKUP_REGION_']  = $LOOKUP_REGION;
$_SESSION['_LOOKUP_STATE_']   = $LOOKUP_STATE;
$_SESSION['_LOOKUP_ZIPCODE_'] = $LOOKUP_ZIPCODE;
$_SESSION['_LOOKUP_REGIONS_'] = $_SESSION['_LOOKUP_STATE_']."(".$_SESSION['_LOOKUP_REGION_'].")";
$_SESSION['_forlogin_'] = $_SESSION['_LOOKUP_CNTRCODE_']." - ".$_SESSION['_ip_'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
$LOGS = "[".date('Y-m-d H:i:s')."] ".$_SESSION['_LOOKUP_CNTRCODE_']." - ".$_SESSION['_ip_']."";
?>
