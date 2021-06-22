<?php

namespace App\Http\Controllers;

use App\Models\Benchmark;
use App\Models\Hardware;
use App\Models\Nomination;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BenchmarkController extends Controller
{
    public function index() //Отображение главной страницы с выводом результатов
    {
        $data = array(
            'title' => 'Homе'
        );

        $benchmarkCPUs = User::join('hardwares', 'users.id', '=', 'hardwares.user_id')
            ->where('hardwares.approved', '=', true)
            ->where('hardwares.reject', '=', false)
            ->join('benchmarks', 'users.id', '=', 'benchmarks.user_id')
            ->where('benchmarks.approved', '=', true)
            ->where('benchmarks.reject', '=', false)
            ->where('benchmarks.nomination_id', '10')
            ->orderBy('score', 'desc')
            ->limit(5)
            ->get();

        $benchmarkGPUs = User::join('hardwares', 'users.id', '=', 'hardwares.user_id')
            ->where('hardwares.approved', '=', true)
            ->where('hardwares.reject', '=', false)
            ->join('benchmarks', 'users.id', '=', 'benchmarks.user_id')
            ->where('benchmarks.approved', '=', true)
            ->where('benchmarks.reject', '=', false)
            ->where('benchmarks.nomination_id', '20')
            ->orderBy('score', 'desc')
            ->limit(5)
            ->get();

        $benchmarkRAMs = User::join('hardwares', 'users.id', '=', 'hardwares.user_id')
            ->where('hardwares.approved', '=', true)
            ->where('hardwares.reject', '=', false)
            ->join('benchmarks', 'users.id', '=', 'benchmarks.user_id')
            ->where('benchmarks.approved', '=', true)
            ->where('benchmarks.reject', '=', false)
            ->where('benchmarks.nomination_id', '30')
            ->orderBy('score', 'desc')
            ->limit(5)
            ->get();

        return view('home', compact('benchmarkCPUs', 'benchmarkGPUs', 'benchmarkRAMs'))->with($data);
    }

    public function indexCpu() //Вывод 100 результатов на категорию CPU
    {
        $data = array(
            'title' => 'CPU',
            'nomination' => 'CPU',
            'urlRoute' => 'results.'
        );

        $benchmarkCPUs = User::join('hardwares', 'users.id', '=', 'hardwares.user_id')
            ->where('hardwares.approved', '=', true)
            ->where('hardwares.reject', '=', false)
            ->join('benchmarks', 'users.id', '=', 'benchmarks.user_id')
            ->where('benchmarks.approved', '=', true)
            ->where('benchmarks.reject', '=', false)
            ->where('benchmarks.nomination_id', '10')
            ->orderBy('score', 'desc')
            ->limit(100)
            ->get();

        return view('benchmarks.nomination.results', compact('benchmarkCPUs'))->with($data);
    }

    public function indexGpu() //Вывод 100 результатов на категорию GPU
    {
        $data = array(
            'title' => 'GPU',
            'nomination' => 'GPU',
            'urlRoute' => 'results.GPU.'
        );

        $benchmarkGPUs = User::join('hardwares', 'users.id', '=', 'hardwares.user_id')
            ->where('hardwares.approved', '=', true)
            ->where('hardwares.reject', '=', false)
            ->join('benchmarks', 'users.id', '=', 'benchmarks.user_id')
            ->where('benchmarks.approved', '=', true)
            ->where('benchmarks.reject', '=', false)
            ->where('benchmarks.nomination_id', '20')
            ->orderBy('score', 'desc')
            ->limit(100)
            ->get();

        return view('benchmarks.nomination.results', compact('benchmarkGPUs'))->with($data);
    }

    public function indexRam() //Вывод 100 результатов на категорию RAM
    {
        $data = array(
            'title' => 'RAM',
            'nomination' => 'RAM',
            'urlRoute' => 'results.'
        );

        $benchmarkRAMs = User::join('hardwares', 'users.id', '=', 'hardwares.user_id')
            ->where('hardwares.approved', '=', true)
            ->where('hardwares.reject', '=', false)
            ->join('benchmarks', 'users.id', '=', 'benchmarks.user_id')
            ->where('benchmarks.approved', '=', true)
            ->where('benchmarks.reject', '=', false)
            ->where('benchmarks.nomination_id', '30')
            ->orderBy('score', 'desc')
            ->limit(100)
            ->get();

        return view('benchmarks.nomination.results', compact('benchmarkRAMs'))->with($data);
    }

    public function indexResult(Request $request, $indexResult) //Просмотр определенного результата
    {
        $data = array(
            'title' => $indexResult,
            'indexResult' => $indexResult
        );

        $indexResultGet = Benchmark::find($indexResult);

        if (!$indexResultGet) {
            return redirect(route('home.head'));
        }

        return view('benchmarks.results.index', compact('indexResultGet'))->with($data);
    }
}
