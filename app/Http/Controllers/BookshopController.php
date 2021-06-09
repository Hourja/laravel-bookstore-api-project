<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Bookshop;

class BookshopController extends Controller
{
    // show the form to create a new bookshop
    public function create()
    {

        return view('create-form');
    }

    //handle the submission of the form shown in create


    public function store(Request $request)
    {

        $name = $request->input('name');
        $city = $request->input('city');

        $bookshop = new Bookshop;
        $bookshop->name = $name;
        $bookshop->city = $city;
        $bookshop->save();

        return redirect()->action('BookshopController@create');
    }
}
