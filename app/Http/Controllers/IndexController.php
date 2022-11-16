<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Design;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        return view ('index');
    }
}
