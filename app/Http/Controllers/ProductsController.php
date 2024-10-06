<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function store(Request $request){
        $request->validate(
            [
                'name' => 'required|max:255',
                'price' => 'nullable',
                'quantity' =>'nullable',
                'description' => 'nullable',
            ]
        );

        Product::create(
            [
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'description' => $request->description,
            ]
        );

        return redirect()->route('products.index')->with('Tao thanh cong' ,'San pham duocj tao thanh cong');
    }

    public function create(){
        return view('products.create');
    }

    public function index(){
        $products = Product::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    public function show($id){
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('products.edit',compact('product'));
    }

    public function update(Request $request, $id){
        $product = Product::find($id);

        $product->update(
            [
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'quantity' => $request->input('quantity'),
                'description' => $request->input('description'),
            ]
        );

        return redirect()->route('products.index')->with('success', 'Create updated syccessfully');
    }

    public function destroy1($id){
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success','Delete user successfully');
    }
}
