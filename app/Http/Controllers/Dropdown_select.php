<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dropdown_select extends Controller
{
    function index()  {
        return view('dropdown_select_multiple.blade');
    }
}
