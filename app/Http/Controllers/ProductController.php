<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use App\ProductType;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
      if($id == null){
        $products = Product::all();
      } else {
        $products = Product::find($id);
      }
      return $products;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->productType()->associate(
            ProductType::find($request->productTypeId)
        );
        $product->save();
        return $product;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->productType()->associate(
            ProductType::find($request->productTypeId)
        );
        $product->save();
        return $product;    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return 'success';
    }

    public function getSizes($id)
    {
        return Product::find($id)->sizes()->get();
    }

    public function syncSizes(Request $request, $id)
    {
        $product = Product::find($id);
        $product->sizes()->sync($request->sizes);
        return $product->sizes()->get();
    }

    public function getColors($id)
    {
        return Product::find($id)->colors()->get();
    }

    public function syncColors(Request $request, $id)
    {
        $product = Product::find($id);
        $product->colors()->sync($request->colors);
        return $product->colors()->get();
    }    

}
