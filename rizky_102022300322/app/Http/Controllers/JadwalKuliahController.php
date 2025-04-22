<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalKuliah;

class JadwalKuliahController extends Controller
{
    public function index()
    {
        $jadwals = JadwalKuliah::all();
        return view('jadwal.index', compact('jadwals'));
    }

    public function create()
    {
        return view('jadwal.create');
    }

    public function store(Request $request)
    {
        JadwalKuliah::create($request->all());
        return redirect()->route('jadwal.index');
    }
}
