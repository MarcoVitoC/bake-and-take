<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        if (auth()->user()->role_id !== 1) {
            return back();
        }

        return view('admin-home', [
            'title' => 'Admin'
        ]);
    }


}
