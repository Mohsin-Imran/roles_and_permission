<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:create-product|edit-product|delete-product', ['only' => ['index', 'show']]);
        $this->middleware('permission:create-product', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-product', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-product', ['only' => ['destroy']]);
    }
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact("categories"));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required',
        ]);
        $category = new Category();
        $category->user_id = auth()->user()->id;
        $category->name = $request->name;
        $category->save();
        return redirect()->route('categories.index')->withSuccess('New Category is added successfully..');
    }
}