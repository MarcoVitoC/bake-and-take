<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        // if (auth()->user()->email !== 'admin@gmail.com' && auth()->user()->password !== 'admin')

        return view('admin', [
            'title' => 'Admin'
        ]);
    }

    
}
