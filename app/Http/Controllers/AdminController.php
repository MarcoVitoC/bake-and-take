<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cake;
use App\Models\Category;

class AdminController extends Controller
{
    public function index() {
        return view('admin', [
            'title' => 'Admin'
        ]);
    }

    public function addCake() {
        return view('add-cake', [
            'title' => 'Add Cake',
            'categories' => Category::all()
        ]);
    }

    public function addCakeSuccess() {
        return view('add-cake-success', [
            'title' => 'Succeed'
        ]);
    }

    public function createCake(Request $request) {
        $newCake = $request->validate([
            'cake_name' => ['required', 'min:5', 'max:255','unique:cakes'],
            'cake_price' => ['required', 'numeric'],
            'cake_ingredients' => ['required', 'min:5', 'max:255'],
            'cake_description' => ['required', 'min:5', 'max:255'],
            'category_id' => ['required'],
            'cake_photo' => ['required', 'mimes:jpeg, png, jpg', 'file', 'max:1024']
        ]);
        
        $newCake["cake_photo"] = $request->file('cake_photo')->store('uploaded-cake-photo');
        Cake::create($newCake);
        return redirect('/admin/add-cake/add-cake-success');
    }
}