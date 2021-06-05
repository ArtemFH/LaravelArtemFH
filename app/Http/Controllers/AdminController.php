<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin');
    }

    public function index()
    {
        $data = array(
            'title' => 'Admin Panel'
        );

        $users = User::where('role_id', 1)->orWhere('role_id', 2)->get();
        return view('admin.admin-panel', compact('users'))->with($data);
    }

    public function setModerator($id)
    {
        if (Auth::id() != intval($id)) {
            if (Auth::user()->role_id == 3) {
                User::find($id)->update(['role_id' => 2]);
            }
        } else {
            dd(Auth::user());
        }

        return redirect()->back();
    }

    public function setUser($id)
    {
        if (Auth::id() != intval($id)) {
            if (Auth::user()->role_id == 3) {
                User::find($id)->update(['role_id' => 1]);
            }
        } else {
            dd(Auth::user());
        }

        return redirect()->back();
    }
}
