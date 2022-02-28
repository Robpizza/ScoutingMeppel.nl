<!doctype html>
<html lang="en" class="h-100 w-100">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="robots" content="noindex"/>

        <title>Admin - Scouting Meppel</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="h-100 w-100">

        <div class="modal" tabindex="-1" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" id="exampleModalContent" style="width: 40vw">
                </div>
            </div>
        </div>

        <div class="row h-100">
            <div class="col-2 pe-0">
                <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark h-100">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-4">Scouting Meppel</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="nav-link text-white">
                                <i class="fas fa-th-large"></i>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.groups.index') }}" class="nav-link text-white">
                                <i class="fas fa-address-book"></i>
                                Speltakken
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.roles.index') }}" class="nav-link text-white">
                                <i class="fas fa-user-tag"></i>
                                Rollen
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.volunteers.index') }}" class="nav-link text-white">
                                <i class="fas fa-hands-helping"></i>
                                Vrijwilligers
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.administrators.index') }}" class="nav-link text-white">
                                <i class="fas fa-hard-hat"></i>
                                Administrators
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sponsors.index') }}" class="nav-link text-white">
                                <i class="fas fa-hand-holding-usd"></i>
                                Sponsoren
                            </a>
                        </li>
                    </ul>

                    <hr>

                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('storage/avatars/default.jpg')}}" alt="" width="32" height="32" class="rounded-circle me-2">
                            <strong>{{auth()->user()->name}}</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">Instellingen</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="{{route('logout')}}" method="post">@csrf
                                    <button class="dropdown-item">Uitloggen</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-10 ps-0" style="background-color: #f1f1f1">
                <div class="d-flex flex-column flex-grow-1 h-100 mb-4">
                    @yield('content')
                </div>
            </div>
        </div>

        <script src="{{asset('js/app.js')}}"></script>
        @yield('scripts')
    </body>
</html>
