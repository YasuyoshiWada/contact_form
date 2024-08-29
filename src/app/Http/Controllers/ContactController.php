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
        $contacts = Contact::all();
        return view('confirm',compact('contacts'));

    }
}
