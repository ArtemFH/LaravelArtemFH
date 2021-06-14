<?php

namespace App\Http\Controllers;

use App\Models\Benchmark;
use App\Models\Hardware;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModeratorController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:moderator');
    }

    public function index()
    {
        $data = array(
            'title' => 'Moderator Panel'
        );

        return view('admin.moderator-panel')->with($data);
    }

    public function getHardware()
    {
        $data = array(
            'title' => 'Moderator Panel - Hardware'
        );

        $dontApproved = Hardware::where('approved', false)->where('reject', false)->paginate(12);
        return view('admin.hardware.index', compact('dontApproved'))->with($data);
    }

    public function getResultHardware($id)
    {
        $data = array(
            'title' => 'Moderator Panel - Hardware'
        );

        $getHardware = Hardware::where('id', $id)->first();
        return view('admin.hardware.indexView', compact('getHardware'))->with($data);
    }

    public function approvedResultHardware($id)
    {
        $object = Hardware::where('id', $id)->first();
        $object->approved = true;
        $object->save();

        return redirect(route('moderator.panel_hardware'));
    }

    public function rejectResultHardware($id)
    {
        $object = Hardware::where('id', $id)->first();
        $object->reject = true;
        $object->save();

        return redirect(route('moderator.panel_hardware'));
    }

    public function getBenchmarks()
    {
        $data = array(
            'title' => 'Moderator Panel - Benchmarks'
        );

        $dontApproved = Benchmark::where('approved', false)->where('reject', false)->orderBy('score', 'DESC')->paginate(12);
        return view('admin.benchmarks.index', compact('dontApproved'))->with($data);
    }

    public function getResultBenchmark($id)
    {
        $data = array(
            'title' => 'Moderator Panel - Benchmarks'
        );

        $getBenchmark = Benchmark::where('id', $id)->first();
        return view('admin.benchmarks.indexView', compact('getBenchmark'))->with($data);
    }

    public function approvedResultBenchmark($id)
    {
        $object = Benchmark::where('id', $id)->first();
        $object->approved = true;
        $object->save();

        return redirect(route('moderator.panel_benchmark'));
    }

    public function rejectResultBenchmark($id)
    {
        $object = Benchmark::where('id', $id)->first();
        $object->reject = true;
        $object->save();

        return redirect(route('moderator.panel_benchmark'));
    }
}
