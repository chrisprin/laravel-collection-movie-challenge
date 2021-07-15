<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::latest()->get();

        return view('categories.index', ['categories' => $categories]);
    }
}
