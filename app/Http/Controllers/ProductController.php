<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Request $request) {
        $products = Product::orderBy('name');

        if($request->filter) {
            $products->where('name', 'like', "%$request->filter%")
                     ->orWhere('description', 'like', "%$request->filter%");
        }

        $html = "<div class='grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 p-6'>";

        $products = $products->get();
        return view('pages.products', compact('products'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'imageURL' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);

        if($validator->fails()) {
            $products = Product::orderBy('name');
            return view('templates._create-products-error', ['errors'=>$validator->errors(), 'products'=>$products]);
        };

        $products = Product::orderBy('name');

        Product::create($request->all());
        return view('templates._products-list-for-create', ['products'=>$products]);
    }

    // public function show($id)
    // {
    //     $products = Product::findOrFail($id);
    //     return view('pages.show', ['products'=>$products]);
    // }

    public function edit(Product $product){
        $product = Product::find($product->id);

        return view('pages.edit', compact('product'));
    }


    public function destroy(Product $product) {
        $product->delete();

        return redirect('/products')->route('products.index')->with('success', 'Product deleted successfuly');
    }

    // public function update(Request $request, Product $product){
    //     $fields = $request->validate([
    //         'name' => 'required',
    //         'imageURL' => 'required',
    //         'description' => 'required',
    //         'price' => 'required|numeric',
    //         'quantity' => 'required|numeric',

    //     ]);

    //     $product->update($fields);

    //     return view('pages.products');
    // }
    // public function update(Request $request, Product $product) {
    //     try {
    //         $fields = $request->validate([
    //             'name' => 'required',
    //             'imageURL' => 'required',
    //             'description' => 'required',
    //             'price' => 'required|numeric',
    //             'quantity' => 'required|numeric',
    //         ]);
    
    //         $product->update($fields);
    
    //         \Session::flash('success', 'Product updated successfully!');
    
    //         return redirect()->route('pages.products');
    //     } catch (\Exception $e) {
    //         // Log the exception message
    //         \Log::error($e->getMessage());
    
    //         // Optionally, return a custom error message to the frontend
    //         return response()->json(['error' => 'Something went wrong while updating the product'], 500);
    //     }
    // }

    // public function update(Request $request, Product $product) {
    //     try {
    //         // Validate the request data
    //         $fields = $request->validate([
    //             'name' => 'required|string|max:255',
    //             'imageURL' => 'required|url',
    //             'description' => 'required|string|max:1000',
    //             'price' => 'required|numeric|min:0',
    //             'quantity' => 'required|integer|min:0',
    //         ]);
    
    //         // Update the product with validated data
    //         $product->update($fields);
    
    //         // Return a success response
    //         return view('/products');
    //     } catch (\Illuminate\Validation\ValidationException $e) {
    //         // Handle validation errors
    //         return response()->json(['errors' => $e->errors()], 422);
    //     } catch (\Exception $e) {
    //         // Handle general errors
    //         \Log::error('Product update error: '.$e->getMessage());
    //         return response()->json(['error' => 'Something went wrong while updating the product'], 500);
    //     }
    // }
    public function update(Request $request, Product $product) {
        try {
            // Validate the request data
            $fields = $request->validate([
                'name' => 'required|string|max:255',
                'imageURL' => 'required|url',
                'description' => 'required|string|max:1000',
                'price' => 'required|numeric|min:0',
                'quantity' => 'required|integer|min:0',
            ]);
    
            // Update the product with validated data
            $product->update($fields);
    
            // Return a success response
            return response()->json(['message' => 'Product updated successfully'], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Handle validation errors
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Log the exception message for debugging
            \Log::error('Product update error: '.$e->getMessage());
            return response()->json(['error' => 'Something went wrong while updating the product'], 500);
        }
    }
        
    
}
