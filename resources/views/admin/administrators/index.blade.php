@extends('layouts.admin')
@section('content')
    <nav class="navbar navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Administrators</a>
        </div>
    </nav>



    <div class="container mt-4">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">#</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Email</th>
                        <th scope="col">2FA</th>
                        <th scope="col">Laatst gewijzigd</th>
                        <th scope="col">Aangemaakt op</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if($user->two_factor_secret !== null)
                                    <span class="text-success">
                                        <i class="fas fa-check-circle"></i>
                                    </span>
                                @else
                                    <span class="text-danger">
                                        <i class="fas fa-times-circle"></i>
                                    </span>
                                @endif
                            </td>
                            <td>{{ $user->updated_at }}</td>
                            <td>{{ $user->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
