<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() 
    {

        return view('pages.home');
    }

    public function comics() 
    {
        $comics = config('comics');

        return view('pages.comics', compact('comics'));
    }

    public function comicDetail($index) 
    {
        $comics = config('comics');
        $comic = $comics[$index];

        return view('pages.comic-detail', compact('comic'));
    }
}