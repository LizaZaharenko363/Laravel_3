<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function shop()
    {
        return view('shop');
    }

    public function cart()
    {
        return view('cart');
    }

    public function createProducts()
    {
        $products = [
            [
                'name' => 'Small bean',
                'description' => 'Will eat your flops',
                'price' => 1000.00,
                'image_url' => 'https://i.pinimg.com/736x/26/c4/e5/26c4e5cbf6dfab423be1692ebcfb15cb.jpg',
            ],
            [
                'name' => 'Arson',
                'description' => 'His name describes him well',
                'price' => 1500.00,
                'image_url' => 'https://i.pinimg.com/736x/93/08/3f/93083feb4a0c5d8d8aa51c40e5a790f0.jpg',
            ],
            [
                'name' => 'Princess Tiara',
                'description' => 'You cannot afford her grace',
                'price' => 999999.99,
                'image_url' => 'https://i.pinimg.com/736x/af/37/ae/af37ae918ddceea51bd9e7eac9801e90.jpg',
            ],
        ];
    
        foreach ($products as $productData) {
            Product::firstOrCreate(['name' => $productData['name']], $productData);
        }
    
        return redirect()->route('home');
    }
    public function showProduct($id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404);
        }

        return view('product', compact('product'));
    }
    
}
