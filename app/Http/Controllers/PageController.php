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

    public function ComicDetail() 
    {
        $comics = config('comics');
        $comic = $comics[0];

        return view('pages.comic-detail', compact('comic'));
    }
}