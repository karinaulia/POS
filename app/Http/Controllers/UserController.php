<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users() {
        return view('user')
        ->with('id', '123')
        ->with('name', 'Karina');
    }
}
