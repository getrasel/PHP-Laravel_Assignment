
<?php

    function generatePassword($length){

        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $specialChars = '!@#$%^&*()_+';  

        $allchar = $lowercase . $uppercase . $numbers . $specialChars;

        $passwordlength = '';

        for ($i=0; $i < $length; $i++){
            $randnum = $allchar[rand(0, strlen($allchar) - 1)];
            $passwordlength .= $randnum;
        };

        return $passwordlength;
    }

    $password = generatePassword(12);

    echo $password;


?>