<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white py-3">
    <div class="container-fluid">

        <span id="navbarLogo" class="navbar-logo position-absolute">
            <img class="position-relative" src="{{asset('images/Scouting-Meppel.png')}}" alt="Scouting Meppel" style=""/>
        </span>

        <script>


            window.addEventListener('load', function () {
                let navbar = $("#navbarNav");
                navbar.on('show.bs.collapse', function () {
                    $("#navbarLogo").addClass("opacity-0")
                })
                navbar.on('hide.bs.collapse', function () {
                    $("#navbarLogo").removeClass("opacity-0")
                })
            }, false)
        </script>

        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto me-4 text-end">
                <li class="nav-item me-3">
                    <a target="_blank" href="https://www.scouting.nl/nieuws/vragen-en-antwoorden-over-scouting-en-het-coronavirus-covid-19" class="nav-link text-danger">
                        SCOUTING EN HET CORONAVIRUS
                        <i class="fas fa-exclamation-triangle"></i>
                    </a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item me-2">
                    <div class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="speltakken" data-bs-toggle="dropdown" aria-expanded="false">Speltakken</a>
                        <ul class="shadow-lg bg-body dropdown-menu border-0 rounded-bottom" aria-labelledby="speltakken">
                            <li><a href="{{route('groups.groups')}}" class="dropdown-item p-3">Algemeen</a></li>
                            @foreach(\App\Models\Group::all() as $group)
                                <li>
                                    <a href="{{route('groups.group', ['group' => $group->slug])}}" class="dropdown-item p-3">
                                        {{ $group->name }} ({{ $group->getAgeAsString() }} jaar)
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" href="{{route('becomeAMember')}}">Lid worden</a>
                </li>
{{--                <li class="nav-item me-2">--}}
{{--                    <a class="nav-link" href="{{route('volunteers')}}">Vrijwilligers</a>--}}
{{--                </li>--}}
                <li class="nav-item me-2">
                    <div class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="scoutingMeppel" data-bs-toggle="dropdown" aria-expanded="false">Scouting
                            Meppel</a>
                        <ul class="shadow-lg bg-body dropdown-menu border-0 rounded-bottom" aria-labelledby="scoutingMeppel">
                            <li><a href="{{route('organisation.albums')}}" class="dropdown-item p-3">Fotos</a></li>
                            <li><a href="{{route('organisation.rental')}}" class="dropdown-item p-3">Verhuur</a></li>
{{--                            <li><a href="{{route('organisation.donor')}}" class="dropdown-item p-3">Donateur</a></li>--}}
                        </ul>
                    </div>
                </li>
                <li class="nav-item me-2">
                    <div class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="voorLeden" data-bs-toggle="dropdown" aria-expanded="false">Voor
                            leden</a>
                        <ul class="shadow-lg bg-body dropdown-menu border-0 rounded-bottom" aria-labelledby="voorLeden">
                            <li><a href="{{route('self.scoutFit')}}" class="dropdown-item p-3">Scoutfit</a></li>
                            <li><a href="{{route('self.documents')}}" class="dropdown-item p-3">Documenten</a></li>
                            <li><a href="{{route('self.trustee')}}" class="dropdown-item p-3">Vertrouwenspersoon</a>
                            </li>
{{--                            <li><a href="{{route('self.myScout')}}" class="dropdown-item p-3">Mijn Scouting</a></li>--}}
                            <li><a href="{{route('self.contribution')}}" class="dropdown-item p-3">Contributie</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item me-2">
                    <div class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="algemeen" data-bs-toggle="dropdown" aria-expanded="false">Algemeen</a>
                        <ul class="shadow-lg bg-body dropdown-menu border-0 rounded-bottom" aria-labelledby="algemeen">
                            <li><a href="{{route('general.about')}}" class="dropdown-item p-3">Over Scouting</a></li>
{{--                            <li><a href="{{route('general.management')}}" class="dropdown-item p-3">Bestuur</a></li>--}}
{{--                            <li><a href="{{route('general.groupCouncil')}}" class="dropdown-item p-3">Groepsraad</a></li>--}}
                            <li><a href="{{route('general.privacy')}}" class="dropdown-item p-3">Privacy</a></li>
                            <li><a href="{{route('general.socialSafety')}}" class="dropdown-item p-3">Sociale
                                    veiligheid</a></li>
                        </ul>
                    </div>
                </li>
{{--                <li class="nav-item me-2">--}}
{{--                    <a class="nav-link" href="#"><i class="fas fa-search"></i></a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#"><i class="fas fa-envelope"></i></a>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>
</nav>
