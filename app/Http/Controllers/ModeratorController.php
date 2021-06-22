<?php

namespace App\Http\Controllers;

use App\Models\Benchmark;
use App\Models\Hardware;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModeratorController extends Controller
{
    public function __construct()//Проверка доступа по ролям
    {
        $this->middleware('can:moderator');
    }

    public function index() //Отображение модоратор панели
    {
        $data = array(
            'title' => 'Moderator Panel'
        );

        return view('admin.moderator-panel')->with($data);
    }

    public function getHardware()//Вывод всех оборудований
    {
        $data = array(
            'title' => 'Moderator Panel - Hardware'
        );

        $dontApproved = Hardware::where('approved', false)->where('reject', false)->paginate(12);
        return view('admin.hardware.index', compact('dontApproved'))->with($data);
    }

    public function getResultHardware($id)//Возвращает данные об определенном оборудований
    {
        $data = array(
            'title' => 'Moderator Panel - Hardware'
        );

        $getHardware = Hardware::where('id', $id)->first();
        return view('admin.hardware.indexView', compact('getHardware'))->with($data);
    }

    public function approvedResultHardware($id)//Подтверждение определнного оборудования
    {
        $object = Hardware::where('id', $id)->first();
        $object->approved = true;
        $object->save();

        return redirect(route('moderator.panel_hardware'));
    }

    public function rejectResultHardware($id)//Отклонения определенного оборудования
    {
        $object = Hardware::where('id', $id)->first();
        $object->reject = true;
        $object->save();

        return redirect(route('moderator.panel_hardware'));
    }

    public function getBenchmarks() //Вывод всех результатов
    {
        $data = array(
            'title' => 'Moderator Panel - Benchmarks'
        );

        $dontApproved = Benchmark::where('approved', false)->where('reject', false)->orderBy('score', 'DESC')->paginate(12);
        return view('admin.benchmarks.index', compact('dontApproved'))->with($data);
    }

    public function getResultBenchmark($id)//Вывод определенного результата
    {
        $data = array(
            'title' => 'Moderator Panel - Benchmarks'
        );

        $getBenchmark = Benchmark::where('id', $id)->first();
        return view('admin.benchmarks.indexView', compact('getBenchmark'))->with($data);
    }

    public function approvedResultBenchmark($id) //Подтверждение определенного результата
    {
        $object = Benchmark::where('id', $id)->first();
        $object->approved = true;
        $object->save();

        return redirect(route('moderator.panel_benchmark'));
    }

    public function rejectResultBenchmark($id)//Отклонение определенного результата
    {
        $object = Benchmark::where('id', $id)->first();
        $object->reject = true;
        $object->save();

        return redirect(route('moderator.panel_benchmark'));
    }
}
