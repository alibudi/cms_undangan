<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $data = Contact::orderBy('id','DESC')->get();
        return view('home.index', compact('data'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'tentang' => 'required',
            'kehadiran' => 'required'
        ];
        $message = [
            'name.required' => 'Name is required',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $role = Contact::create([
            'name' => $request->name,
            'tentang' => $request->tentang,
            'kehadiran' => $request->kehadiran
        ]);

        if($role) {
            return redirect()->route('home')->with('success', 'Success create role');
        } else{
            return redirect()->back()->with('error', 'Failed to create role');
        }
    }


    public function tamu()
    {
        return view('home.tamu');
    }
}
