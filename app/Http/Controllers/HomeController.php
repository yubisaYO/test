<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class HomeController extends Controller
{
    public function show(): View
    {
        $arrMahasiswa = ["charles", "nicky", "wincent"];
        return view('pages.home', ["mahasiswa" => $arrMahasiswa]);
    }
}
