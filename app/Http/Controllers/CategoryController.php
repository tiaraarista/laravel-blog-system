<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use League\CommonMark\Extension\Table\Table;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Contracts\Support\ValidatedData;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category.index', [
            'categories' => Category::where('user_id', auth()->user()->id)->paginate(5),
            'title' => 'Category',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create', [
            'title' => 'Create Category',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|unique:categories|max:25',
            'slug' => 'required|unique:categories',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Category::create($validatedData);
        return redirect('/admin/categories')->with('success', 'Category has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return ['category' => $category];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', [
            'title' => 'Update Category',
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules = [];

        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:categories';
        }

        if ($request->category_name != $category->category_name) {
            $rules['category_name'] = 'required|unique:categories|max:25';
        }

        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;

        Category::where('category_id', $category->category_id)
            ->update($validatedData);
        return redirect('categories')->with('success', 'Category has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->category_id);
        return redirect('/admin/categories')->with('success', 'Category has been Deleted!');
    }


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
