<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    public function index(){
        return view ('pelajaran');
    }

    public function mtk() {
        return view ('matematika');
    }

    public function ipa(){
        return view ('ipa');
    }
}