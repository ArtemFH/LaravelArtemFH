<?php

namespace App\Http\Controllers;

use App\Models\Benchmark;
use App\Models\Hardware;
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
        return view('admin.admin-panel');
    }

    public function getUsers()
    {
        $data = array(
            'title' => 'Admin Panel'
        );

        $users = User::where('role_id', 1)->orWhere('role_id', 2)->get();
        return view('admin.users.index', compact('users'))->with($data);
    }

    public function getHardware()
    {
        $data = array(
            'title' => 'Moderator Panel'
        );

        $dontApproved = Hardware::where('approved', false)->where('reject', false)->paginate(3);
        return view('admin.hardware.index', compact('dontApproved'))->with($data);
    }

    public function getResultHardware($id)
    {
        $data = array(
            'title' => 'Moderator Panel'
        );

        $getHardware = Hardware::where('id', $id)->first();
        return view('admin.hardware.indexView', compact('getHardware'))->with($data);
    }

    public function approvedResultHardware($id)
    {
        $object = Hardware::where('id', $id)->first();
        $object->approved = true;
        $object->save();

        return redirect(route('admin.panel_hardware'));
    }

    public function rejectResultHardware($id)
    {
        $object = Hardware::where('id', $id)->first();
        $object->reject = true;
        $object->save();

        return redirect(route('admin.panel_hardware'));
    }

    public function getBenchmarks()
    {
        $data = array(
            'title' => 'Moderator Panel'
        );

        $dontApproved = Benchmark::where('approved', false)->where('reject', false)->paginate(3);
        return view('admin.benchmarks.index', compact('dontApproved'))->with($data);
    }

    public function getResultBenchmark($id)
    {
        $data = array(
            'title' => 'Moderator Panel'
        );

        $getBenchmark = Benchmark::where('id', $id)->first();
        return view('admin.benchmarks.indexView', compact('getBenchmark'))->with($data);
    }

    public function approvedResultBenchmark($id)
    {
        $object = Benchmark::where('id', $id)->first();
        $object->approved = true;
        $object->save();

        return redirect(route('admin.panel_benchmark'));
    }

    public function rejectResultBenchmark($id)
    {
        $object = Benchmark::where('id', $id)->first();
        $object->reject = true;
        $object->save();

        return redirect(route('admin.panel_benchmark'));
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
