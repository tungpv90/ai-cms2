<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function index()
    {
        return view('manga.index');
    }
}
