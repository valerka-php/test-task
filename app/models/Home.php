<?php

namespace App\models;

use Api\Transactions;
use Api\Users;

class Home
{
    public function getUsers($url): array
    {
        $obj = new Users();
        return $obj->get($url);
    }

    public function getTransactions(string $url,int $id) : array
    {
        $obj = new Transactions();
        return $obj->get($url,$id);
    }

    public function createList(array $arr) : void
    {
        foreach ($arr as $key ){
            if ($key['status'] === 'active'){
                $products = $this->getTransactions('https://user-transaction-fetch-api.herokuapp.com/transaction/user/',$key['id']);
                if (!empty($products)){
                    echo "<div class='div'><p> User: {$key['name']} <button type='button' class='btn-user btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal{$key['id']}'> > </button></div>";
                    Modal::createModal($key['id'],$key['name'],$products);
                }
            }
        }
    }


}