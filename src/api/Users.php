<?php
namespace Api;


class Users extends BaseCurl
{
    public function get(string $url): array
    {
        $path = 'src/store/users.json';

        $this->getJson($url,$path);
        return json_decode(file_get_contents($path),true);
    }


}