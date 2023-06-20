<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal_info;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function postData(Request $postData)
    {
        $postData->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'msg' => 'required'
            ]
        );

        $pI = new Personal_info();
        $pI->name = $postData['name'];
        $pI->email = $postData['email'];
        $pI->address = $postData['msg'];
        $pI->save();
        return redirect('/viewtable');
    }

    public function view()
    {
        $reData = Personal_info::all();
        $data = compact('reData');
        return view('viewtable')->with($data);
    }

    public function delete($id)
    {
        $deletedValue = Personal_info::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $deletedValue = Personal_info::find($id)->delete();
        return redirect()->back();
    }
}
