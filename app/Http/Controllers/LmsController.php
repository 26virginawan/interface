<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LmsController extends Controller
{
    public function index(){
        return view ('lms');
    }

    public function absen(){
        return view ('absen');
    }

    public function tugas(){
        return view ('tugas');
    }

    public function jawab(){
        return view('jawaban');
    }
}