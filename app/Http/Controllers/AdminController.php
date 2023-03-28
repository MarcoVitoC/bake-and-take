<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function index() {
        if (auth()->user()->role_id !== 1) {
            return back();
        }

        return view('admin', [
            'title' => 'Admin'
        ]);
    }

    public function addCake() {
        if (auth()->user()->role_id !== 1) {
            return back();
        }

        return view('add-cake', [
            'title' => 'Add Cake',
            'categories' => Category::all()
        ]);
    }

    public function createCake(Request $request) {
        $newCake = $request->validate([
            'cake_name' => ['required', 'min:5', 'max:255','unique:products'],
            'cake_price' => ['required', 'numeric'],
            'cake_ingredients' => ['required', 'min:5', 'max:255'],
            'cake_description' => ['required', 'min:5', 'max:255'],
            'category' => ['required'],
            'cake_photo' => ['required', 'mimes:jpeg, png, jpg', 'max:2048']
        ]);
        

    }
}
