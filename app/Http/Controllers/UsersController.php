<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        $user = User::findOrFail($id);
        if (request()->hasFile('profile')) {
            $extension = request()->file('profile')->getClientOriginalExtension();
            $path = time() . '.' . $extension;
            request()->file('profile')->storeAs('public/profile', $path);
            $user->path=$path;
        }

        if (request('contact')) {
            $code = str_replace('+', '', substr("+254", 0, 1)) . substr("+254", 1);
            $originalStr = request('contact');
            $prefix = substr($originalStr, 0, 1);
            $user->contact = str_replace('0', $code, $prefix) . substr($originalStr, 1);
        }
        if(request('name')!=null){
            $user->name=request('name');
        }
        if(request('email')!=null){
            $user->email=request('email');
        }
        if(request('role')!=null){
            $user->role=request('role');
        }
        $user->update();
        return back()->with('success','User details updated successfully.');
    }


    public function destroy($id)
    {
        User::destroy($id);
        return back()->with('success','User deleted successfully.');
    }
}
