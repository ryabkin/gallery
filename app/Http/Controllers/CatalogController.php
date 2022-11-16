<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\Catalog;
use App\Models\c_d_contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function catalog(){
        $catalog = Catalog::all()->all();
        $design = Design::all()->all();
        $c_d_contact = c_d_contact::all()->all();


        return view ('catalog', compact('catalog','design','c_d_contact')
        );
    }

    public function category($designID){
//        $design = Design::all()->all();
//        $c_d_contact = c_d_contact::all()->all();
//
//        $res = c_d_contact::all()->where('design_id',$designID);
//
//        $catalog = Catalog::all()->find('id',$res);
//        $catalog = Catalog::find($catalog)->catalog;
        $design  = Design::all()->all();
        $catalog = Design::find($designID)->catalog;
        foreach ($catalog as $r) {
            $catalog = Catalog::find($r);
        }



        return view ('catalog', compact('catalog','design')

        );
    }


}
