<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Name' => 'Kevin Jonson',
            'NIS' => 696969,
            'Phone' => '08130420069',
            'Class' => 'XII RPL 4'
        ];
    }
}
