<?php

namespace App\Http\Controllers;

use App\Models\Document;

class MemberPagesController extends Controller
{
    public function scoutFit()
    {
        return redirect('https://www.scouting.nl/over-scouting/wat-is-scouting/scoutfit');
    }

    public function documents()
    {
        $documents = Document::all();
        return view('pages.voor-leden.documenten')->with('documents', $documents);
    }

    public function trustee()
    {
        return redirect('/algemeen/sociale-veiligheid#vertrouwenspersoon');
    }

    public function myScouting()
    {
        return redirect('/');
    }

    public function contribution()
    {
        return view('pages.voor-leden.contributie');
    }
}
