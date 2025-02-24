<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime; // Import the Anime model

class ProductController extends Controller
{
    public function index()
    {
        $animes = Anime::all(); // Fetch all anime from the database

        return view('welcome', ['products' => $animes]);
    }
}
