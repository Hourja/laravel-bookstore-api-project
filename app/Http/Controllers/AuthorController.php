<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class AuthorController extends Controller
{
    public function index()
    {

        $authors = Author::orderBy('name')->get();

        return view('authors.index')->with('authors', $authors);
    }


    public function create()
    {

        return view('authors.create');
    }


    // HANDLE DATA AFTER SUBMISSION

    public function store(Request $request)
    {
        //Prepare empty object
        $author = new Author;

        //fill object with request data
        $author->name = $request->input('name');
        $author->bio = $request->input('bio');
        $author->slug = Str::slug($author->name);

        //save the object
        $author->save();

        //flash success message
        session()->flash('success_message', 'Author Saved Successfuly');


        //redirect to  next page (edit)

        return redirect()->action('AuthorController@edit', [$author->id]);
    }



    // displays the form to edit an existing author

    public function edit($id)
    {
        //find the existing object

        $author = Author::findOrFail($id);


        return view('authors.edit')->with('author', $author);
    }


    // handles the submission of the EDIT form
    public function update(Request $request, $id)
    {

        //find the existing object
        $author = Author::findOrFail($id);

        //fill object with request data
        $author->name = $request->input('name');
        $author->bio = $request->input('bio');
        $author->slug = Str::slug($author->name);

        //save the object
        $author->save();

        //flash success message
        session()->flash('success_message', 'Author updated Successfuly');


        //redirect to  next page (edit)

        return redirect()->action('AuthorController@edit', [$author->id]);
    }
}
