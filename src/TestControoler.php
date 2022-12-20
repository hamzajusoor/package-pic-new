<?php

namespace Alzughbieh\HamzaPic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class TestControoler extends Controller
{



    public function show(){

        return view('hamza::welcome');
    }

}
