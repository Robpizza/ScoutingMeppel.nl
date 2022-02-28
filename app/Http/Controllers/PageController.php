<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Document;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PageController extends Controller {

    /**
     *  Home page
     */
    public function home()
    {
        return $this->fallback();
    }

    public function becomeAMember()
    {
        $groups = Group::all();
        return view('pages.lid-worden.lid-worden')->with('groups', $groups);
    }

    public function volunteers()
    {
        return $this->fallback();
    }






    private function fallback()
    {
        $images = File::glob(public_path() . '/images/carousel/slide-*');
        return view('pages.home.home')->with('images', $images);
    }
}
