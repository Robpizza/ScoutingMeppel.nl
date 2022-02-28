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
        <h2 class="pt-3 fw-bold">Speltakken binnen Scouting Meppel</h2>
        <div class="row">
            <div class="col-10">
                <section class="mt-4">
                    <p>
                        Een scoutingvereniging bestaat uit meerdere speltakken. Dit zijn groepen van scoutingleden met
                        dezelfde
                        leeftijd en interesse. Zo heb je de welpen van 7-11 jaar, de scouts van 11-15 jaar, de explorers
                        van
                        15-18 jaar en de roverscouts van 18 - 21 jaar. Vanaf Ook is er binnen scouting Meppel een
                        onderscheid
                        tussen land en waterscouting.
                        U kunt een informatie bekijken over een bepaalde speltak door met de cursor op 'speltakken' te
                        gaan
                        staan en vervolgens op een van de speltakken die verschijnt te klikken.
                    </p>
                </section>
            </div>
        </div>

        <section class="mt-4">
            <div class="row justify-content-around img-zoom">
                @foreach($groups as $group)
                    <div class="col-2">
                        <a href="{{route('groups.group', [ 'group' => $group->slug])}}">
                            <img class="img-fluid" src="{{ $group->icon }}" alt="{{ $group->name }}"/>
                            <p class="text-center text-dark fw-bold pt-3">{{ $group->name }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
