<?php

class common {
 
    function curl($url){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $h=array("User-Agent:Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 ''(KHTML, like Gecko) Chrome/75.0.3770.100 Mobile Safari/537.36,
        'Content-Type:application/x-www-form-urlencoded");
        curl_setopt($ch,CURLOPT_HTTPHEADER,$h);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
 
}