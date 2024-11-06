<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class AdminController extends Controller
{
    public function index()
    {
        // Your logic here, for example:
        return view('admin.index'); // Make sure you have an 'index.blade.php' file in your 'resources/views/admin' directory
    }

    public function view_category()
    {
        $data=category::all();
        return view('admin.category',compact('data'));

    }

    public function add_category(Request $request){
        $category = new Category();
        $category->category_name = $request->Category;
        $category->save();

        return redirect()->back()->with('message','Category Added Successfully');
    }

    public function delete_category($id){
        $cat=category::find($id);
        $cat->delete();
        return redirect()->back();
    }

    public function edit_category($id){
        $data=category::find($id);
        return view('admin.edit_category',compact('data'));
    }

    public function update_category(Request $request,$id){
        $data = category::find($id);
        $data->category_name = $request->category;
        $data->save();
        return redirect('/');
    }

    public function add_product(){
        return view('admin.add_product');
    }
}
