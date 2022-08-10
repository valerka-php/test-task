<?php

namespace Api;

class Transactions extends BaseCurl
{
    public function get(string $url,int $id): array
    {
        $path = $url . $id;
        $filename = 'src/store/transactions/user_'. $id  .'.json';

        $this->getJson($path,$filename);
        return json_decode(file_get_contents($filename),true);
    }
}