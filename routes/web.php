<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('all_products', function(){

    $products = Product ::all();
    $products= DB::table('products')-> orderBy('name', 'asc')-> get();

    return view('all_products',compact('products'));
});


//---------------------------------------------------


Route::get('create_product', function(){


    return view('create_product',);
});
//------------------------------------------------------


Route::post('store',function(Request $request){



    $product = new Product;
    $product-> name = $request-> product_name;
    $product-> price = $request-> product_price;
    $product-> quantity = $request-> product_qty;
    $product -> save();

    return redirect()-> back();
});
//----------------------------------------------------------


Route::get('/name_form', function(Request $request){

    $name = $request->myname;


    return view('name_form', compact('name'));

});

//-------------------------------------------------------
// this part of code to delete the data from the database

Route::get('delete/{id}',function($id){

    $product = Product::find($id);
    $product->delete();

    return redirect()-> back();

});

//-------------------------------------------------------

Route::get('/edit/{id}',function($id){

    $product = Product::findOrFail($id);
    return view('create_product',compact('product'));
});

//-------------------------------------------------------

Route::post('/update/{id}',function(Request $request , $id){

    $product = new Product();
    $product->name = $request->product_name;
    $product->price = $request->product_price;
    $product->quantity = $request->product_qty;
    $product->save();

    $product = Product::find($id);
    $product->delete();

    return redirect('all_products');
});

