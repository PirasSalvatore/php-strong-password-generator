<?php

session_start();

function generateStrongPassword($length, $filter) {
    $characters = '';
    if (isset($filter['include_special']) && $filter['include_special'] === 'true') {
        $characters .= '!@#$%^&*()_+';
    }
    if (isset($filter['include_numbers']) && $filter['include_numbers'] === 'true') {
        $characters .= '0123456789';
    }
    if (isset($filter['include_uppercase']) && $filter['include_uppercase'] === 'true') {
        $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if (isset($filter['include_lowercase']) && $filter['include_lowercase'] === 'true') {
        $characters .= 'abcdefghijklmnopqrstuvwxyz';
    }

    if(strlen($characters) === 0) {
       return 'Error: No character set selected. Please select at least one character type.';
    }

    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $password;
}


?>