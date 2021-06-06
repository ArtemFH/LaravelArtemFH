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
}
