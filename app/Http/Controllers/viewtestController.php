<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Test;

class viewtestController extends Controller
{
    public function index()
    {
        $test = Test::all();
        return view('test.viewtest', compact ('test'));
    }

    public function create()
    {
        return view('test.addtest');
    }

    public function show()
    {
        $test = Test::all();
        return view('test.test', compact ('test'));
    }
}
