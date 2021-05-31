<?php

namespace App\Http\Controllers;

use App\Models\Benchmark;
use App\Models\Nomination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BenchmarkController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Homе'
        );

        $benchmarkCPUs = Benchmark::query()->where('nomination_id', '10')->where('approved', 1)->orderBy('score', 'DESC')->limit(7)->get();
        $benchmarkGPUs = Benchmark::query()->where('nomination_id', '20')->where('approved', 1)->orderBy('score', 'DESC')->limit(7)->get();
        $benchmarkRAMs = Benchmark::query()->where('nomination_id', '30')->where('approved', 1)->orderBy('score', 'DESC')->limit(7)->get();

        return view('home', compact('benchmarkCPUs', 'benchmarkGPUs', 'benchmarkRAMs'))->with($data);
    }

    public function indexCpu()
    {
        $data = array(
            'title' => 'CPU',
            'nomination' => 'CPU',
            'urlRoute' => 'results.'
        );

        $benchmarkCPUs = Benchmark::query()->where('nomination_id', '10')->where('approved', 1)->orderBy('score', 'DESC')->limit(100)->get();

        return view('benchmarks.nomination.results', compact('benchmarkCPUs'))->with($data);
    }

    public function indexGpu()
    {
        $data = array(
            'title' => 'GPU',
            'nomination' => 'GPU',
            'urlRoute' => 'results.GPU.'
        );

        $benchmarkGPUs = Benchmark::query()->where('nomination_id', '20')->where('approved', 1)->orderBy('score', 'DESC')->limit(100)->get();

        return view('benchmarks.nomination.results', compact('benchmarkGPUs'))->with($data);
    }

    public function indexRam()
    {
        $data = array(
            'title' => 'RAM',
            'nomination' => 'RAM',
            'urlRoute' => 'results.'
        );

        $benchmarkRAMs = Benchmark::query()->where('nomination_id', '30')->where('approved', 1)->orderBy('score', 'DESC')->limit(100)->get();

        return view('benchmarks.nomination.results', compact('benchmarkRAMs'))->with($data);
    }

    public function indexResult(Request $request, $indexResult)
    {
        $data = array(
            'title' => $indexResult,
            'indexResult' => $indexResult
        );

        $indexResultGet = Benchmark::find($indexResult);

        return view('benchmarks.results.index', compact('indexResultGet'))->with($data);
    }
}
