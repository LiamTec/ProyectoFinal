<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreRegistrationController extends Controller
{
    public function index(){
        return view('PreRegistro.index');
    }
}
