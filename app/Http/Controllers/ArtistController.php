<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function index(){
        $artists = Artist::all();
        return view('artists.index', ['artists' => $artists]);
        
    }

    public function create(){
        return view('artists.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required'
        ]);

        $newArtist = Artist::create($data);

        return redirect(route('artist.index'));
    }

    public function edit(Artist $artist){
        return view('artist.edit', ['artist' => $artist]);
    }
}
