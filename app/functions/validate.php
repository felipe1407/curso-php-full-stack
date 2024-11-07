<?php

function validate(array $fields) {
    
    $validate = [];
    foreach($fields as $field => $type) {
        switch ($type) {
            case 's':
                $validate[$field] = filter_var($_POST[$field], FILTER_SANITIZE_SPECIAL_CHARS);
                break;
            case 'i':
                $validate[$field] = filter_var($_POST[$field], FILTER_SANITIZE_NUMBER_INT);
                break;
            case 'e':
                $validate[$field] = filter_var($_POST[$field], FILTER_SANITIZE_EMAIL);
                break;

        }
    }

   

}

function isEmpty() {

    $request = request();

    $empty = false;

    foreach($request as $key => $value) {
        if(empty($request[$key])){
            $empty = true;
        }
    }

    return $empty;
}