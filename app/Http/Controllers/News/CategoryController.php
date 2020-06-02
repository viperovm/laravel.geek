<?php

namespace App\Http\Controllers\News;

use App\Category;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function all()
    {
        $category = Category::query()
            ->orderBy('id')
            ->get();
        return view('admin.category-management')->with('category', $category);
    }

}
