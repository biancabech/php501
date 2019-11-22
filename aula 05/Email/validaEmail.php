<?php

class Email {

    public static function validar(string $email)
    {
        echo filter_var($email, FILTER_VALIDATE_EMAIL);
        if($email_validate){
            return $email;
        } else {
            throw new Exception("Email nao existe", 500);
        }
    }
}

