<?php

namespace App\Http\Controllers;

use App\Models\Benchmark;
use App\Models\User;
use Illuminate\Http\Request;

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

        $dontApproved = Benchmark::where('approved', false)->paginate(3);

        return view('admin.moderator-panel', compact('dontApproved'))->with($data);
    }

    public function getResult($id)
    {
        $data = array(
            'title' => 'Moderator Panel'
        );

        $getBenchmark = Benchmark::where('id', $id)->first();
        return view('admin.benchmarks.indexView', compact('getBenchmark'))->with($data);
    }
}
