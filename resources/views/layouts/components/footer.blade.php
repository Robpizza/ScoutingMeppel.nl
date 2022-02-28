<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v10.0&appId=1798321577006810&autoLogAppEvents=1"
        nonce="v7neI5yK"></script>

<div class="d-flex flex-column justify-content-center bg-dark text-white mt-5" style="min-height: 35vh; padding: 75px">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-xl-4 mt-5 mt-xl-0">
                <h4 class="mb-3">Over Scouting Nederland</h4>
                <p class="text-grey footer-p">
                    Scouting Nederland is de grootste jeugd- en jongerenorganisatie van Nederland. Als je lid wordt bij
                    een Scoutinggroep bij jou in de buurt, ga je naar wekelijkse opkomsten, kun je mee op kamp en
                    deelnemen aan allerlei lokale, landelijke of internationale evenementen.
                </p>
            </div>

            <div class="col-3"></div>

            <div class="col-sm-12 col-xl-4 mt-5 mt-xl-0">
                <h4 class="mb-3">Laatste post</h4>

                <div class="fb-page" data-href="https://www.facebook.com/scoutingmeppel/" data-tabs="timeline"
                     data-width="415" data-height="325" data-small-header="true" data-adapt-container-width="true"
                     data-hide-cover="false" data-show-facepile="false">
                    <blockquote cite="https://www.facebook.com/scoutingmeppel/" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/scoutingmeppel/">Scouting Meppel</a>
                    </blockquote>
                </div>

            </div>
{{--            <div class="col-sm-12 col-xl-4 mt-5 mt-xl-0">--}}
{{--                <h4 class="mb-3">Sponsoren</h4>--}}
{{--                <div class="row">--}}
{{--                    <div class="row py-1">--}}
{{--                        @foreach($sponsors as $sponsor)--}}
{{--                            <div class="col-6 col-md-4">--}}
{{--                                <h5>{{ $sponsor->name }}</h5>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>

        <div class="mb-5"></div>
    </div>

    <div class="container">
        <hr/>
        <a class="me-3 text-white" href="{{route('home')}}">Home</a>
        <a class="me-3 text-white" href="{{route('groups.groups')}}">Speltakken</a>
        <a class="me-3 text-white" href="{{route('becomeAMember')}}">Lid worden</a>
        {{--        <a class="me-3 text-white" href="{{route('volunteers')}}">Vrijwilligers</a>--}}
        <a class="me-3 text-white" href="{{route('general.privacy')}}">Privacy</a>
        <span class="float-end">
{{--            <a class="credits text-white" href="https://www.huttcom.nl">Huttcom</a>--}}
                    <a target="_blank"
                       href="https://www.scouting.nl/nieuws/vragen-en-antwoorden-over-scouting-en-het-coronavirus-covid-19"
                       class="nav-link text-danger">
                        SCOUTING EN HET CORONAVIRUS
                        <i class="fas fa-exclamation-triangle"></i>
                    </a>
        </span>

    </div>


</div>
