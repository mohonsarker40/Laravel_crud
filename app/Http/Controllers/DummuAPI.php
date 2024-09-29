<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummuAPI extends Controller
{
    function index(){
      return   ["name"=>"mohon","address"=> "gaibandha"];
    }
}
