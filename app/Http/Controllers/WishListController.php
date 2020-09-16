<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function index(Request $request)
    {
        return view('wish-list');
    }
}
