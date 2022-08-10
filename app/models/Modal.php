<?php

namespace App\models;

class Modal
{
    public static function createModal(int $id,string $name , array $data) : void
    {
        $modalBody = "";

        foreach ($data as $key){
            $modalBody .= "<div><p> [id] :{$key['identifier']} | [item] :{$key['line']['product_name']} | [price] :{$key['line']['price']} </p></div>";
        }

        echo "
        <div class='modal fade' id='exampleModal{$id}' tabindex='-1' aria-labelledby='exampleModalLabel{$id}' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel{$id}'>Order history - {$name}</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>" .
                    $modalBody
               . " </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                    <button type='button' class='btn btn-primary'>Save changes</button>
                </div>
            </div>
        </div>
    </div>
        ";
    }
}