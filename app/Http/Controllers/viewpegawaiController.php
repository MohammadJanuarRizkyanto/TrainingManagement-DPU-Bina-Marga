<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class viewpegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.viewpegawai', compact ('pegawai'));
    }

    public function create()
    {
        return view('pegawai.addpegawai');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([

            'nip_pegawai' => 'required|integer|unique:pegawai,nip_pegawai',
            'nama_pegawai' => 'required|string|max:100',
            'jabatan_pegawai' => 'required|string|max:100',
            'unit_kerja' => 'required|string|max:100'

        ]);
        dd($validatedData);

        Pegawai::create($validateData);

        return redirect()->route('listpegawai');
    }
}

