<?php

//Lay IP cua User
function getUserIP() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP')) {
        $ipaddress = getenv('HTTP_CLIENT_IP');
    } else if (getenv('HTTP_X_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    } else if (getenv('HTTP_X_FORWARDED')) {
        $ipaddress = getenv('HTTP_X_FORWARDED');
    } else if (getenv('HTTP_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    } else if (getenv('HTTP_FORWARDED')) {
        $ipaddress = getenv('HTTP_FORWARDED');
    } else if (getenv('REMOTE_ADDR')) {
        $ipaddress = getenv('REMOTE_ADDR');
    } else {
        $ipaddress = 'UNKNOWN';
    }
    return $ipaddress;
}

//Lay chuoi Json tu server IP Stack
function sendJsontoServer() {
    $userIP = getUserIP();
    $access_key = "?access_key=f80223657d51811d050fc307f2940afb";
    $array_json = "http://api.ipstack.com/" . $userIP . $access_key;
    $json = file_get_contents($array_json);
    $obj = json_decode($json);
    return $obj;
}

//Lay chuoi JSON thoi tiet hien tai cua Vi tri User
function getCurrentData($region, $country_name, $access_key) {
    $location = $region . "," . $country_name . "&units=metric";
    $array_json = "http://api.openweathermap.org/data/2.5/weather?q=" . $location . $access_key;
    $json = file_get_contents($array_json);
    $obj = json_decode($json);
    return $obj;
}
