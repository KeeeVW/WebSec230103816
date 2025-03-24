<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Role;

class PurchaseController extends Controller {
    public function index() {
        return view('purchases.index', ['purchases' => auth()->user()->purchases]);
    }
}

use Illuminate\Support\Facades\DB;


public function store(Request $request, Product $product) {
    $user = auth()->user();

    if (!$user) {
        return redirect()->route('login')->with('error', 'Please log in first.');
    }

    if ($user->credit < $product->price) {
        return back()->with('error', 'Insufficient credit');
    }
    if ($product->stock < 1) {
        return back()->with('error', 'Out of stock');
    }

    DB::transaction(function () use ($product, $user) {
        $product->update(['stock' => DB::raw('stock - 1')]);
        $user->update(['credit' => DB::raw('credit - ' . $product->price)]);

        Purchase::create([
            'user_id' => $user->id,
            'product_id' => $product->id,
            'quantity' => 1,
            'total_price' => $product->price
        ]);
    });

    return back()->with('success', 'Purchase successful!');
}
