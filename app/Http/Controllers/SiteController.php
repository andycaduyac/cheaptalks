<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $categories = Category::get()->sortBy('category');
        return view('pages.app', compact('categories'));
    }
}
