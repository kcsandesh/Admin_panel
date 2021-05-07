<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubmitClientForm;

class SubmitClientController extends Controller
{
    public function store(Request $request)
    {
       
        $this->validate($request,[
            'name'=>'required',
            'email'=>'email',
            'phone'=>'required|max:10|min:10',
            'address'=>'required|max:20',
        ]);

        $submit= new SubmitClientForm();
      $submit->name= $request->name;
      $submit->email= $request->email;
      $submit->number=$request->phone;
      $submit->address=$request->address;
      $submit->save();
      return redirect()->route('client');

       
    }
}
