<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function alluser()
    {
        $users = User::all();
        $title = "All Users";
        return view('admin.alluserlist', compact('title','users'));
    }

    public function newuser()
    {
        $users = User::whereType(0)->get();
        $title = "All Users";
        return view('admin.alluserlist', compact('title','users'));
    }

    public function activeuser()
    {
        $users = User::whereType(2)->get();
        $title = "All Users";
        return view('admin.alluserlist', compact('title','users'));
    }

    public function blockeduser()
    {
        $users = User::whereType(-2)->get();
        $title = "All Users";
        return view('admin.alluserlist', compact('title','users'));
    }

    public  function userupdate(Request $request)
    {
        $updateuser = User::findOrFail($request->user_id);
        $updateuser->update($request->all());
        return redirect()->back();
    }
}
