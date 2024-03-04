<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DropdownController extends Controller
{
    function index() {
        return view('dropdown_select_multiple');
    }
}
