<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;

class PaymentController extends Controller
{

    public function doCharge(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        Stripe::setApiKey(config('services.stripe.secret'));
        try {
            $charge = Charge::create([
                'amount' => $product->price * 100,
                'currency' => 'inr',
                'source' => $request->stripeToken,
                'description' => 'Purchase of ' . $product->name,
            ]);

            return redirect()->back()->with('success', 'Payment successful');
        } catch (ApiErrorException $e) {
            return redirect()->back()->with('error', 'Payment failed: ' . $e->getMessage());
        }
    }
}
