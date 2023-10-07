<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Stripe\Stripe;

class ShopController extends Controller
{
    public function index()
    {
        // shop index
    }

    public function products()
    {
        $products = Product::paginate(10);

        return view('products.index', ['products' => $products]);
    }

    public function show($handle)
    {
        $product = Product::where('handle', $handle)->firstOrFail();
        //Stripe::setApiKey(config('services.stripe.secret'));

        return view('products.show', [
            'product' => $product,
            'stripeKey' => config('services.stripe.key'),
        ]);
    }

    public function doCharge()
    {
        echo "Hi";
        exit;
    }
}
