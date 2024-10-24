<?php

namespace App\Http\Controllers;


use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function index()
    {
        $tracks = Track::all();
    
            return view('tracks.index', [
                'tracks' => $tracks
            ]);
    }
    
    public function show(Track $track)
    {
        return view('tracks.show', ['track' => $track]);
    }
}

