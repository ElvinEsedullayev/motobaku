<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('back.products.index',compact('products'));
    }

    public function store()
    {
        return view('back.products.create');
    }

    public function create(ProductRequest $request)
    {
        $product = new Product;
        $product->title = $request->title;
        $product->small_description = $request->small_description;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->selling_price = $request->selling_price;
        //$product->qty = $request->qty;
        $product->sku = $request->sku;
        $product->status	 = $request->status	;
        //$product->trending = $request->trending;
        $product->meta_title = $request->meta_title;
        $product->meta_keyword = $request->meta_keyword;
        $product->meta_description = $request->meta_description;
        if($request->hasFile('image')){
            $imagename = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/products'),$imagename);
            $product->image='uploads/products/'.$imagename;
        }
        $product->save();
        return redirect()->route('admin.product.index')->with('success','Product uğurlu şəkildə yaradıldı !');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('back.products.update',compact('product'));
    }

    public function update(ProductRequest $request,$id)
    {
        $product = Product::find($id);
        $product->title = $request->title;
        $product->small_description = $request->small_description;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->selling_price = $request->selling_price;
        //$product->qty = $request->qty;
        $product->sku = $request->sku;
        $product->status	 = $request->status	;
        //$product->trending = $request->trending;
        $product->meta_title = $request->meta_title;
        $product->meta_keyword = $request->meta_keyword;
        $product->meta_description = $request->meta_description;
        if($request->hasFile('image')){
            $imagename = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/products'),$imagename);
            $product->image='uploads/products/'.$imagename;
        }
        $product->save();
        return redirect()->back()->with('success','Product uğurlu şəkildə güncəlləndi !');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.product.index')->with('success','Product uğurlu şəkildə silindi !');
    }
}
