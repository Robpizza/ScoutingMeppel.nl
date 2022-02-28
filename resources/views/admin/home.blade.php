@extends('layouts.admin')
@section('content')

    <nav class="navbar navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
    </nav>

    <div class="container-fluid h-100 w-100 mt-4">
        <div class="row">
            <div class="col-3">
                <div class="card shadow rounded-end no-border h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-4 h-100 text-center d-flex bg-info justify-content-center align-items-center">
                            <h1 class="text-white"><i class="fas fa-address-book"></i></h1>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Speltakken</h4>
                                <p class="card-text">Aantal: {{ count(\App\Models\Group::all()) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card shadow rounded-end no-border h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-4 h-100 text-center d-flex bg-danger justify-content-center align-items-center">
                            <h1 class="text-white"><i class="fas fa-user-tag"></i></h1>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Rollen</h4>
                                <p class="card-text">Aantal: {{ count(\App\Models\VolunteerRole::all()) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow rounded-end no-border h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-4 h-100 text-center d-flex bg-success justify-content-center align-items-center">
                            <h1 class="text-white"><i class="fas fa-hands-helping"></i></h1>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Vrijwilligers</h4>
                                <p class="card-text">Aantal: {{ count(\App\Models\Volunteer::all()) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow rounded-end no-border h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-4 h-100 text-center d-flex bg-warning justify-content-center align-items-center">
                            <h1 class="text-white"><i class="fas fa-hand-holding-usd"></i></h1>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Sponsoren</h4>
                                <p class="card-text">Aantal: {{ count(\App\Models\Sponsor::all()) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
