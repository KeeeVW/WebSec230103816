<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/multable', function () {
   return view('multable'); //multable.blade.php
});

Route::get('/even', function () {
   return view('even'); //even.blade.php
});

Route::get('/prime', function () {
   return view('prime'); //prime.blade.php
});
Route::get('/test', function () {
   return view('test'); //test.blade.php
});


Route::get('/transcript', function () {
    return view('transcript');
});

Route::get('/bill', function () {
   return view('bill'); // Updated from 'minitest' to 'bill'
});
Route::get('/calculator', function () {
   return view('calculator');
});

Route::get('/gpa-calculator', function () {
    $courses = [
        ['code' => 'Web and Security Technologies ', 'title' => '', 'credit' => 3],
        ['code' => 'Linux and Shell Programming ', 'title' => ' ', 'credit' => 3],
        ['code' => 'Network Operation and Managment', 'title' => ' ', 'credit' => 3],
        ['code' => 'Digital Forensics Fundamental ', 'title' => ' ', 'credit' => 3],

        

    ];
    
    return view('gpa-calculator', compact('courses'));
});

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\ProductsController; // Import only once

// Define the route
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\PurchaseController;
use App\Http\Controllers\Web\UserController;

// Middleware to ensure authentication
Route::middleware(['auth'])->group(function () {
    // Customers
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/purchases', [PurchaseController::class, 'index'])->name('purchases.index');
    Route::post('/purchase/{product}', [PurchaseController::class, 'store'])->name('purchases.store');

    // Employees
    Route::middleware(['role:employee'])->group(function () {
        Route::resource('products', ProductController::class);
        Route::get('/customers', [UserController::class, 'customers'])->name('customers.index');
        Route::post('/add-credit/{user}', [UserController::class, 'addCredit'])->name('users.addCredit');
    });
});




use App\Http\Controllers\Controller;
use App\Models\Purchase;
use App\Models\Product;
use Illuminate\Http\Request;

class PurchaseControler extends Controller {
    public function index() {
        return view('purchases.index', ['purchases' => auth()->user()->purchases]);
    }

    public function store(Request $request, Product $product) {
        $user = auth()->user();

        if ($user->credit < $product->price) return back()->with('error', 'Insufficient credit');
        if ($product->stock < 1) return back()->with('error', 'Out of stock');

        $product->decrement('stock');
        $user->update(['credit' => $user->credit - $product->price]);
        Purchase::create(['user_id' => $user->id, 'product_id' => $product->id, 'quantity' => 1, 'total_price' => $product->price]);

        return back()->with('success', 'Purchase successful!');
    }
}
use Illuminate\Support\Facades\Auth;

Auth::routes(); // This will register login, register, logout routes
Route::get('/login', function () {
   return view('auth.login');
})->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
