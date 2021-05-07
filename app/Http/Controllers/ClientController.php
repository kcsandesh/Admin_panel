<?php

namespace App\Http\Controllers;
use App\SubmitClientForm;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public  function index(){
        $client=SubmitClientForm::paginate(2);
        
        
        return view('ClientList.index')->with('client2',$client); 
    }
    public function edit($id){
        $find=SubmitClientForm::find($id);
        return view('ClientList.edit')->with('edit',$find);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'email',
            'phone'=>'required|max:10|min:10',
            'address'=>'required|max:20',
        ]);
        $f= SubmitClientForm::find($id);
        $f->update($request->all());
        return redirect()->route('client');
    }

    public function delete($id)
    {
        $delete= SubmitClientForm::find($id);
        $delete->delete();
        return redirect()->back();
    }
}
