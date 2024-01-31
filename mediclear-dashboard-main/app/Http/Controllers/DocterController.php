<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocterController extends Controller
{
    //show docters

    public function showDocter(){

        return view('dashboard.add-doctor');
    }

}
