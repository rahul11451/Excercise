<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function postData(Request $postData)
    {
        $postData->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'msg' => 'required|alpha'
            ]
        );
        echo '<br>Nensi<br>File: '. __FILE__.'<br>Line: '.__LINE__.'<br><pre>';print_r($postData->all());echo '</pre>'; die();
    }
}
