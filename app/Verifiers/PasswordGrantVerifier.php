<?php

namespace App\Verifiers ;
use Illuminate\Support\Facades\Auth;
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17-09-2016
 * Time: 23:16
 */
class PasswordGrantVerifier
{
    public function verify($username, $password)
    {
        $credentials = [
            'email'    => $username,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }
}