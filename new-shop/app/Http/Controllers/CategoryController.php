<?php

namespace App\Http\Controllers;

use App\Category;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }

    public function manageCategory(){
        $categories = Category::all();
        return view('admin.category.manage-category', ['categories' => $categories]);
    }

    public function saveCategory(Request $request){
        $category = new Category();
        $category->category_name        = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status   = $request->publication_status;
        $category->save();

//        Category::create($request->all());


//        DB::table('categories') -> insert([
//            'category_name' => $request->category_name,
//            'category_description' => $request->category_description,
//            'publication_status' => $request->publication_status
//        ]);

        return redirect('/category/add')->with('message', 'Category info saved successfully');
    }



    public function publishCategory($id){
        $category = Category::find($id);
        $category -> publication_status = 1;
        $category -> save();
        return redirect('/category/manage')->with('message', 'Category info published');
    }

    public function unpublishCategory($id){
        $category = Category::find($id);
        $category -> publication_status = 0;
        $category -> save();
        return redirect('/category/manage')->with('message', 'Category info Unpublished');
    }

    public function editCategory($id){
        $category = Category::find($id);
        return view('admin.category.edit-category', ['category' => $category]);
    }

    public function updateCategory(Request $request){
        $id = $request->category_id;
        $category = Category::find($id);
        $category->category_name        = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status   = $request->publication_status;
        $category->save();
        return redirect('/category/manage')->with('message', 'Category Updated successfully');
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/category/manage')->with('message', 'Category Deleted successfully');
    }

}
