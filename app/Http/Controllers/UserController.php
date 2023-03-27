<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        if (auth()->user()->role_id !== 0) {
            return back();
        }

        return view('user', [
            'title' => 'User'
        ]);
    }
}
