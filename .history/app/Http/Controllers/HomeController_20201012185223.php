<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function page($page = 1)
{
    return "Page $page";
}
}
