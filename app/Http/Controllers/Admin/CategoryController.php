<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    // create
    public function create()
    {
        return view('admin.category.create');
    }

    // store
    public function store(CategoryFormRequest $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3'
        ]);

        $data['slug'] = Str::slug($data['name']);
        Category::create($data);
        return back()->with('message', 'Category Has Added');

    }

    // edit
    public function edit(Category $category)
    {        
        // return view('admin.category.edit', compact('category'));
    }

    // update
    public function update(Request $request, string $id): RedirectResponse
{
    $category = Category::find($id);

    if (!$category) {
        // Handle the case where the category is not found (e.g., redirect or show an error)
        return back()->with('error', 'Category not found');
    }

    $data = $request->validate([
        'name' => 'required|min:3'
    ]);

    // Add slug to data
    $data['slug'] = Str::slug($data['name']);

    // Update category
    $category->update($data);

    // Redirect back with a success message
    return back()->with('message', 'Category updated successfully');
}

    // hapus
    public function destroy(int $category_id){
    $category   = Category::findOrFail($category_id);
    $category->delete();

    return redirect()->to('/admin/categories')->with('message', 'Category delete successfuly');
}
}