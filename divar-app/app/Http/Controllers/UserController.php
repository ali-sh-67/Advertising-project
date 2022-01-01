<?php

namespace App\Http\Controllers;
use App\Models\ad;
use App\Models\User;
use App\Models\category;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function edit(User $user)
    {
      
        return view('User.edit',compact('user'));
    }

    public function update(Request $request, $user)
    {       
        $todo = User::where('id', $user)->first();

        $todo->name=$request->get('name');
        $todo->email=$request->get('email');
        $todo->status=$request->get('status');        
        $todo->save();
        return redirect(route('home'));
    }
}
