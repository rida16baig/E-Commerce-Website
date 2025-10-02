<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function manageProducts()
    {
        $products = Product::where('vendor_id',auth()->user()->id)->get();
        return view('vendor.products.manage',['products'=>$products]);
    }
    public function addProduct()
    {
        return view('vendor.products.create');
    }
    public function uploadProduct(Request $request)
    {
        $validated =$request->validate([
            'name'=>'required|string|max:255',
            'description'=>'required|string',
            'price'=>'required',
            'color'=>'required|string',
            'quantity'=>'required',
            'discount'=>'nullable',
            'image'=>'required',
        ]);

        $imagePath =$request->file('image')->store('product','public');

        $res = Product::create([
            'vendor_id'=> auth()->user()->id, 
            'name'=> $validated['name'], 
            'discount'=> $validated['discount'] ?? null, 
            'quantity'=> $validated['quantity'], 
            'color'=> $validated['color'], 
            'price'=> $validated['price'], 
            'description'=> $validated['description'], 
            'image'=> $imagePath, 
        ]);

        if($res){
            return redirect()->back()->with('success','Product Uploaded Successfully!');
        }else{
            return redirect()->back()->with('error','Something went wrong!');
        }
    }
}
