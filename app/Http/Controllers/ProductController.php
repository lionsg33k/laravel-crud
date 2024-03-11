<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    //* function to show  our main view
    public function index()
    {
        //? variable  that handle all database row
        $products = Product::all();
        //? we pass  the variable to the view using compact method
        return view("home.home", compact("products"));
    }

    //* function to store infos  to database
    public function store(Request $request)
    {
        //! we validate our request  so that we can controle the data in our DB
        request()->validate([
            "name" => "required",
            "price" => "required",
            "color" => "required",
        ]);
        //! We create the row  using the info received from the request
        Product::create([
            "name" => $request->name,
            "price" => $request->price,
            "color" => $request->color,
        ]);

        //! Redirect user to the same page li kan fiha
        return back();
    }

    //* function to show a specefic element 
    public function show(Product $product)
    {
        //& we  pass  the element as a variable  in our function + compact  +  web.php  using the same name
        return view("home.components.home_edit", compact("product"));
    }

    //* function to update a specefic element 
    public function update(Request $request, Product $product)
    {
        //* validate request as usual
        request()->validate([
            "name" => "required",
            "price" => "required",
            "color" => "required",
        ]);
        //* use update method to edit the columns with the request received
        $product->update([
            "name" => $request->name,
            "price" => $request->price,
            "color" => $request->color,
        ]);
        //* redirect user  to  a specefic route 
        return redirect()->route("product.index");
    }
//* delete a row  in database
 public function destroy(Product $product){
    $product->delete();
    return back();
 }
}
