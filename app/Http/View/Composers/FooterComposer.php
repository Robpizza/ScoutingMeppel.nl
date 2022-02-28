<?php


namespace App\Http\View\Composers;


use App\Models\Sponsor;
use Illuminate\View\View;

class FooterComposer {


    protected $sponsors;

    public function __construct()
    {
        $this->sponsors = Sponsor::all();
    }

    public function compose(View $view) {
        $view->with('sponsors', $this->sponsors);
    }

}
