<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\Catalog;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public  function design(){

        $allcat = Design::all()->all();
        $plants = Catalog::all()->all();

        return view('catalog', compact('allcat','plants'));
    }
    public  function designCat($catID){

        $allcat = Design::all()->all();
        $plants = Design::find($catID)->plant;

        return view('catalog', compact('allcat','plants'));
    }
}
