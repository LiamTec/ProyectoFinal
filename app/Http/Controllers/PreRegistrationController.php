<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreRegistrationController extends Controller
{
    public function index(){
        return view('PreRegistro.index');
    }
    public function Contactanos(){
        return view('PreRegistro.Contactanos');
    }
    public function FAQ(){
        return view('PreRegistro.FAQ');
    }
    public function SobreNosotros(){
        return view('PreRegistro.SobreNosotros');
    }
}
