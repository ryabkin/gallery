<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function form(){

        return view('form');
        }
        public function formsend(Request $request)
        {


            $form = new Form();
            $form->title_form = $request->input('title_form');
            $form->name_form = $request->input('name_form');
            $form->mail_form = $request->input('mail_form');
            $form->text_form = $request->input('text_form');
            $form->link_form = $request->input('link_form');

            $form->save();

            return redirect()->route('form')->with('success', 'Заявка отправлена');
    }
}
