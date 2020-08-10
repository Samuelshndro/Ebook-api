<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return "NIS : 3103118121,
        Name : Samuel Suhendro,
        Gender : Male,
        Phone : 0896 6916 5420,
        Class : XII RPL 4";
    }
}