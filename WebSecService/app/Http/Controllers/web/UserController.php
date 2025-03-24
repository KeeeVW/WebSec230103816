<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Role;

class UserController extends Controller {

    {
        public function assignRole()
        {
            $user = auth()->user();
            $role = Role::findByName('customer'); // Example
            $user->assignRole($role);
        }
    }


    public function profile() {
        return view('users.profile', ['user' => auth()->user()]);
    }

    public function customers() {
        $customers = User::where('role', 'customer')->get();
        return view('users.customers', compact('customers'));
    }

    public function addCredit(Request $request, User $user) {
        $request->validate(['credit' => 'required|numeric|min:1']);
        $user->increment('credit', $request->credit);
        return redirect()->route('customers.index')->with('success', 'Credit added!');
    }
}
