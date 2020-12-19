<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        return view ('Dasboard');
    }

    public function Siswa(){
        return view ('Siswa');
    }

    public function Materi(){
        return view ('Materi');
    }
    public function Tugas(){
        return view ('Tugas');
    }
}