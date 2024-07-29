<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;

class viewmateriController extends Controller
{
    public function index()
    {
        $materi = Materi::all();
        return view('materi.viewmateri', compact ('materi'));
    }

    public function create()
    {
        return view('materi.addmateri');
    }
}

