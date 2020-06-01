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

    public function add(Category $category)
    {
        $category = new Category();
        if ($request->isMethod('post')) {
            $category->fill($request()->all());
            $request->save();
            return redirect()->route('admin.category-management');
        }
        return view('admin.create-category')->with([
            'category' => $category,
            ]);
    }

    public function update(Request $request, Category $category)
    {
        dump($category);
    }

}
