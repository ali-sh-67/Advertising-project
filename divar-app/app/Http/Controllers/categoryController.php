<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

use App\Http\Requests\StoreRequest;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests\updateRequest;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = category::root()->get();
        return view('category.index')->with('categories', $categories);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories = category::all();
        return view('category.create')->with(['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        
       

        $category = new Category;
        $category->name = $request->name;
        $category->name_en = $request->name_en;
        $category->parent_id = $request->parent_id;

        $category->icon = $request->icon;

        // $category->icon = $request->icon;

        $category->user_id = Auth::user()->id;
        if ($category->save()) {
            $categories = category::root()->get();
            return view('category.index')->with(['categories' => $categories]);
        }else {
            return 'not save';
        }
        return; //422

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        return 'show_category';
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $category = category::find($id);
        $categories=category::all();
        return view('category.edit',compact('categories', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function update (StoreRequest $request, $id)

    {

        $category = category::where('user_id', Auth::user()->id)->where('id', $id)->first();
        $request->validate([
            'parent_id' => 'bail|regex:(^[0-9]*$)|nullable|not_in:' . $category->id

        ]);

        if ($category->id != $request->parent_id) {
            $category->name = $request->name;
            $category->parent_id = $request->parent_id;
            if ($category->save()) {

                $categories = category::root()->get();
                return view('category.index')->with('categories', $categories);
            }else {
                redirect(view('category.edit')); // 422
            }

        }

        return; // 401
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
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
