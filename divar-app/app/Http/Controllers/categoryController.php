<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

use App\Http\Requests\StoreRequest;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests\updateRequest;

class categoryController extends Controller
{

    public function index(Request $request)
    {
        $categories = category::root()->get();
//        return $categories;
        return view('category.index')->with('categories', $categories);

    }



    public function create(Request $request)
    {
        $categories = category::all();
        return view('category.create')->with(['categories' => $categories]);
    }


    public function store(StoreRequest $request)
    {

        $category = new Category;
        $category->name = $request->name;
        $category->name_en = $request->name_en;
        $category->parent_id = $request->parent_id;
        $category->icon = $request->icon;
        $category->user_id = Auth::user()->id;
        if ($category->save()) {
            $categories = category::root()->get();
            return view('category.index')->with(['categories' => $categories]);
        }else {
            return 'not save';
        }
        return; //422

    }


    public function edit(Request $request, $id)
    {
        $name_parent_id = category::find($id)->parent_id;
        if ($name_parent_id == 0) {
            $name_parent_id=category::find($id);
        }else {
            $name_parent_id = category::find($name_parent_id);
        }
        $category = category::find($id);
        $categories=category::all();
        return view('category.edit',compact('categories', 'category','name_parent_id'));
    }


    public function update (Request $request, $id)

    {
        $category = category::find($id);
//        $category = category::where('user_id', Auth::user()->id)->where('id', $id)->first();
//        return $category;
        $request->validate([
            'parent_id' => 'bail|regex:(^[0-9]*$)|nullable|not_in:' . $category->id

        ]);

        if ($category->id != $request->parent_id) {
            $category->name = $request->name;
            $category->parent_id = $request->parent_id;
            $category->icon = $request->icon;
            if ($category->save()) {

                $categories = category::root()->get();
                return view('category.index')->with('categories', $categories);
            }else {
                redirect(view('category.edit')); // 422
            }

        }

        return; // 401
    }

    public function destroy($id)
    {
        $destroy_category = category::where('user_id', Auth::user()->id)->where('id', $id)->first();
        if ($destroy_category) {
            $destroy_category->delete();
            $message_delete='The category was successfully deleted';
            $categories = category::root()->get();
            return view('category.index',compact('categories', 'message_delete'));
        } else {
            return 'Sorry, the category could not be deleted. Please try again';
        }

    }


}

