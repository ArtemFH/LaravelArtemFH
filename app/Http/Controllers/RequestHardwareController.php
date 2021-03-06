<?php

namespace App\Http\Controllers;

use App\Models\Benchmark;
use App\Models\Hardware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RequestHardwareController extends Controller
{
    public function requestHardware(Request $request) //Отправить заявку на оборудование
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

    public function requestHardwareAvailability() //Отображение формы на заявку на оборудование
    {
        $data = array(
            'title' => 'Hardware'
        );

        return view('requires.requestHardware')->with($data);
    }

    public function deleteHardware(Request $request) //Удалить своё оборудование
    {
        Hardware::where('user_id', Auth::id())->first()->delete();

        return redirect(route('user.profile'));
    }

    public function requestBenchmarkAvailability() //Отображение формы на заявку на результат
    {
        $data = array(
            'title' => 'Hardware'
        );

        return view('requires.requestBenchmark')->with($data);
    }

    public function requestBenchmark(Request $request)   //Отправить заявку на результат
    {
        $validate = $request->validate([
            'score' => 'required',
            'image' => 'required|file',
            'nomination_id' => 'required'
        ]);

        $filename = Storage::disk('public')->put('benchmarks', $request->image);

        Benchmark::create($request->only('score', 'nomination_id') + ['image' => $filename, 'user_id' => Auth::id()]);

        return redirect(route('user.profile'));
    }

    public function updateHardwareAvailability(Request $request) //Отображение формы на обновление оборудования
    {
        $data = array(
            'title' => 'Update Hardware'
        );

        $hardware = Hardware::where('user_id', Auth::id())->first();

        return view('requires.updateHardware', compact('hardware'))->with($data);
    }

    public function updateHardware(Request $request)//Отправить заявку на обновление оборудования
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
        $hardware->approved = false;
        $hardware->reject = false;
        $hardware->save();

        return redirect(route('user.profile'));
    }

    public function understandBenchmark() //Удаление записи с бд своего отклоненного оборудования
    {
        Benchmark::where('user_id', Auth::id())->where('approved', false)->where('reject', true)->delete();
        return redirect()->back();
    }

    public function understandHardware()//Удаление записи с бд своих отклоненных результатов
    {
        Hardware::where('user_id', Auth::id())->where('approved', false)->where('reject', true)->delete();
        return redirect()->back();
    }
}
