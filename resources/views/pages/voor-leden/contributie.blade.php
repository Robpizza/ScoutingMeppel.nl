@extends('layouts.boilerplate')

@section('content')
    <div class="header-banner">
        <img src="{!! asset('images/speltakken-banners/header_banner_' . rand(1, 3) . '.jpg') !!}" alt="header-banner"
             class="w-100 h-100" style="object-fit: cover"/>
    </div>

    <div class="container pt-3">
        {!! Breadcrumbs::render(Route::currentRouteName()); !!}
    </div>

    <div class="container">
        <div class="row mt-4">

            <h2 class="fw-bold pb-3">Contributie</h2>
            <div>
                <h3>Voor jeugdleden</h3>
                <p>Voor de landtak (Welpen, Landscouts en Explorers) is deze 144 euro per jaar en dit wordt per kwartaal
                    via een verleende machtiging afgeschreven (36 euro per kwartaal)</p>
                <p>Voor de watertak (Waterscouts en Wilde vaart) is deze 174 euro per jaar en dit wordt per kwartaal via
                    een verleende machtiging afgeschreven (43,50 euro per kwartaal)</p>
            </div>

            <div class="pt-2">
                <h3>Voor volwassen leden</h3>
                <p>Roverscouts en Fustus Durus Stam: 84 euro per jaar en dit wordt per kwartaal via een verleende
                    machtiging afgeschreven (21 euro per kwartaal)</p>
                <p>Senis Amicus Stam: 96 euro per jaar en dit wordt per kwartaal via een verleende machtiging
                    afgeschreven (24 euro per kwartaal)</p>
            </div>
        </div>
    </div>
@endsection
