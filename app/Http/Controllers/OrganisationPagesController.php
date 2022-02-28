<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class OrganisationPagesController extends Controller
{
    public function albums()
    {
        return view('pages.scouting-meppel.gallery')->with('albums', Album::all());
    }
    public function album(Album $album)
    {
        return view('pages.scouting-meppel.gallery_album')->with('album', $album);
    }

    public function rental()
    {
        return view('pages.scouting-meppel.verhuur');
    }

    public function donor()
    {
        return redirect('/');
    }
}
