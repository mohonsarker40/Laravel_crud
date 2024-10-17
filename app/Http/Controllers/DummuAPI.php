<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DummyAPI;

class DummuAPI extends Controller
{
    function index(){
      return   ["name"=>"mohon","address"=> "gaibandha"];
    }
}
