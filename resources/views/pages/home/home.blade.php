@extends('layouts.boilerplate')
@section('content')
    <div class="row m-0">
        <div class="col-12 p-0 carousel-container">
            @include('pages.home.carousel')
        </div>
    </div>


    <div class="container">
    </div>


    <div class="container-fluid pt-5">
        <div class="row px-5 justify-content-center">
            <div class="col-sm-12 col-lg-6 col-xl-3">
                <h2 class="h1 text-success text-resize"><b>Lid worden</b></h2>
                <div class="card border-0">
                    <img src="{{asset('images/card1.jpg')}}" class="card-img-top img-fluid" alt="card1">
                    <div class="card-body pt-4">
                        <p class="card-text text-resize">
                            Laat je uitdagen en ontdek Scouting! Op deze pagina leggen we uit hoe de inschrijfprocedure
                            bij onze Scoutinggroep werkt.
                        </p>
                        <a href="{{ route('becomeAMember') }}" class="btn btn-lg btn-primary rounded-pill text-uppercase fw-bolder px-lg-4 text-resize">
                            Kom een keer meedoen!
                            <i class="fas fa-chevron-right ps-3"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-lg-6 col-xl-3 mt-5 mt-lg-0">
                <h2 class="h1 text-success text-resize"><b>Wat is Scouting?</b></h2>
                <div class="card border-0">
                    <img src="{{asset('images/card2.jpg')}}" class="card-img-top img-fluid" alt="card2">
                    <div class="card-body pt-4">
                        <p class="card-text text-resize">
                            Scouting biedt leuke en spannende activiteiten waarmee meiden en
                            jongens worden uitgedaagd zich persoonlijk te ontwikkelen.
                        </p>
                        <a target="_blank" href="https://www.scouting.nl/over-scouting/wat-is-scouting" class="btn btn-lg btn-primary rounded-pill text-uppercase fw-bold px-lg-4 text-resize">
                            Meer informatie
                            <i class="fas fa-chevron-right ps-3"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-xl-3 mt-5 mt-xl-0">
                <h2 class="h1 text-success text-resize"><b>Snel naar</b></h2>
                <div class="card border-0">
                    <img src="{{asset('images/card3.jpg')}}" class="card-img-top img-fluid" alt="card3">
                    <div class="card-body pt-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="{{route('general.about')}}">
                                    <i class="fas fa-chevron-right"></i>
                                    Over Scouting
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a target="_blank" href="https://instagram.com/scoutingmeppel">
                                    <i class="fas fa-chevron-right"></i>
                                    Instagram
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <i class="fas fa-chevron-right"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <br/>
    </div>
@endsection
