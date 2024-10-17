<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DummyAPI2;

class DummyAPI2 extends Controller
{
    function show(){
        retrun DummyAPI2::all();
      }
}
