<?php

namespace App\Http\Controllers;

class GeneralPagesController extends Controller
{
    public function management()
    {
        return redirect('/');
    }

    public function aboutScouting()
    {
        return redirect('https://www.scouting.nl/over-scouting');
    }

    public function groupCouncil()
    {
        return redirect('/');
    }

    public function privacy()
    {
        return view('pages.algemeen.privacy');
    }

    public function socialSafety()
    {
        return view('pages.algemeen.sociale-veiligheid');
    }
}
