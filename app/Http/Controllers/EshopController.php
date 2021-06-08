<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Book;
use \App\Models\Category;
use \App\Models\Subcategory;

///              ----  VARIABLES ---
// $all_the_books        -> select all available items of Books table
// $all_the_categories   -> select all available items of Categories table
// $all_the_subcat       -> select all available items of Subcategories table
//




class EshopController extends Controller
{



    // INDEX

    public function index()
    {

        $all_the_categories = Category::get();


        $all_the_books = Book::get();


        return view('index')
            ->with([
                'categories' => $all_the_categories,
                'all_books' => $all_the_books
            ]);
    }


    // ITEM SHOW

    public function show($id)
    {

        $selected_book = Book::where('id', '=', $id)->first();

        return view('eshop-item')->with('selected_book', $selected_book);
    }




    // CATEGORY

    public function category($category_name_from_index)
    {

        $all_the_subcat = Subcategory::get();
        $category = Category::where('name', '=', "$category_name_from_index")->first();

        $matching_category_id_books = Book::where('category_id', '=', $category->id)->get();  // Index page provided us with the name of category and here we are searching DB to match all the books with this type of category

        
        return view('category')
            ->with([
                'subcategories' => $all_the_subcat,
                'matching_books' => $matching_category_id_books,
                'category_name' => $category->name

            ]);
    }


    // SUBCATEGORY

    public function subcategory($subcategory_name_from_category)
    {

        $all_the_subcat = Subcategory::get();

        $subcategory = Subcategory::where('name', '=', "$subcategory_name_from_category")->first();

        $matching_subcategory_id_books = Book::where('subcategory_id', '=', $subcategory->id)->get(); // Category page provided us with the name of subcategory and here we are searching DB to match all the books with this type of subcategory


        return view('subcategory')
            ->with([
                'subcategories' => $all_the_subcat,
                'matching_books' => $matching_subcategory_id_books,
                'subcategory_name' => $subcategory->name

            ]);
    }
}
