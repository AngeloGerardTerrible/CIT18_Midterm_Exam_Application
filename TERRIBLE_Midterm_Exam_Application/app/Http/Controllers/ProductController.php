<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

class ProductController extends Controller
{
    public function index()
    {
        $animes = Anime::all();
        return view('welcome', ['products' => $animes]);
    }
}
