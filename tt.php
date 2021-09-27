<?php

    function curl_error_test($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 100);
        $response = curl_exec($ch);
        if(curl_errno($ch)){
            echo 'Request Error: ' . curl_error($ch);
        }
        curl_close($ch);
        return $response;
    }

$response = curl_error_test('https://cms.quadbtech.com/article-dashboard/API/mainPageDetails');
print_r($response);
