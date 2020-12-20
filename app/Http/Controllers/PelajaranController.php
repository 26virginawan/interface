<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    public function index(){
        return view ('pelajaran');
    }

    public function mtk() {
        return view ('pelajaran.matematika');
    }

    public function ipa(){
        return view ('pelajaran.ipa');
    }

    public function olg(){
        return view ('pelajaran.olahraga');
    }
    
    public function indo(){
        return view ('pelajaran.indo');
    }

    public function seni(){
        return view ('pelajaran.seni');
    }

    public function ips(){
        return view ('pelajaran.ips');
    }
}