<?php

namespace App\Http\Controllers;

use App\Models\Benchmark;
use App\Models\Hardware;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RequestHardwareController extends Controller
{
    public function requestHardware(Request $request)
    {
        if (Hardware::where('user_id', Auth::id())->first()) {
            return redirect('user.profile');
        }

        $validateFields = $request->validate([
            'CPU' => 'required',
            'GPU' => 'required',
            'RAM' => 'required',
            'PSU' => 'required',
            'storage' => 'required',
            'motherboard' => 'required'
        ]);

        Hardware::create($validateFields + ['user_id' => Auth::id()]);

        return redirect(route('user.profile'));
    }

    public function requestHardwareAvailability()
    {
        $data = array(
            'title' => 'Hardware'
        );

        return view('requires.requestHardware')->with($data);
    }

    public function deleteHardware(Request $request)
    {
        Hardware::where('user_id', Auth::id())->first()->delete();

        return redirect(route('user.profile'));
    }

    public function requestBenchmarkAvailability()
    {
        $data = array(
            'title' => 'Hardware'
        );

        return view('requires.requestBenchmark')->with($data);
    }

    public function requestBenchmark(Request $request)
    {
        $request->validate([
            'score' => 'required',
            'image' => 'required|file',
            'nomination_id' => 'required'
        ]);

        $filename = Storage::disk('public')->put('benchmarks', $request->image);

        Benchmark::create($request->only('score', 'nomination_id') + ['image' => $filename, 'user_id' => Auth::id()]);

        return redirect(route('home.head'));
    }

    public function updateHardwareAvailability(Request $request)
    {
        $data = array(
            'title' => 'Update Hardware'
        );

        $hardware = Hardware::where('user_id', Auth::id())->first();

        return view('requires.updateHardware', compact('hardware'))->with($data);
    }

    public function updateHardware(Request $request)
    {
        $request->validate([
            'CPU' => 'required',
            'GPU' => 'required',
            'RAM' => 'required',
            'PSU' => 'required',
            'storage' => 'required',
            'motherboard' => 'required'
        ]);

        $hardware = Hardware::where('user_id', Auth::id())->first();

        $hardware->CPU = $request->CPU;
        $hardware->GPU = $request->GPU;
        $hardware->RAM = $request->RAM;
        $hardware->PSU = $request->PSU;
        $hardware->storage = $request->storage;
        $hardware->motherboard = $request->motherboard;
        $hardware->approved = 0;
        $hardware->save();

        return redirect(route('user.profile'));
    }
}
