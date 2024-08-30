<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }
    public function confirm(Request $request)
    {

        $tel_1 = $request->input('tel_1');
        $tel_2 = $request->input('tel_2');
        $tel_3 = $request->input('tel_3');

        $tel= $tel_1.'-'. $tel_2. '-' .$tel_3;

        $contact = $request->only
        ([
        'first_name',
        'last_name',
        'gender',
        'email',
        'address',
        'building',
        'detail'
    ]);

        $contact['tel'] = $tel;

        return view('confirm',compact('contact'));

    }
}
