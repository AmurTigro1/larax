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

        foreach($products->get() as $prod) {
            $html .= "
                <div class='p-6 rounded-lg shadow-lg bg-green-200 transform transition-transform hover:scale-105'>
                    <h3 class='text-2xl mb-3'>$prod->name</h3>

                    <img src='$prod->imageURL' class='h-[10em] w-[100%] rounded'>
                    <div class='italic text-gray-700'>
                        $prod->description
                    </div>
                    <div class='mt-4 text-green-600 text-lg font-bold'>$$prod->price</div>
                    <div class='mt-2 text-gray-600'>Qty: $prod->quantity</div>
                </div>
            ";
        }
        return $html;
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
            return view('templates._create-products-error', ['errors'=>$validator->errors()->all(), 'products'=>$products]);
        };

        $products = Product::orderBy('name');

        Product::create($request->all());

        return view('templates._products-list-for-create', ['products'=>$products]);
    }
}
