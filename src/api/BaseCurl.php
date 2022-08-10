<?php

namespace Api;

use mysql_xdevapi\Exception;

class BaseCurl
{
    public function getJson(string $url,string $path ): bool
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        curl_close($curl);

        try {
            file_put_contents($path,$response);
        }catch (Exception $e){
            var_dump($e->getMessage());
        }

        return true;
    }
}