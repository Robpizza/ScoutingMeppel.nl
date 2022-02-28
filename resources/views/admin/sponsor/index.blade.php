@extends('layouts.admin')
@section('content')

    <nav class="navbar navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sponsoren</a>
        </div>
    </nav>

    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">Naam</th>
                    <th scope="col">Website</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Laatst gewijzigd</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sponsors as $sponsor)
                <tr>
                    <th scope="row">{{ $sponsor->id }}</th>
                    <td>{{ $sponsor->name }}</td>
                    <td>{{ $sponsor->website }}</td>
                    <td>{{ $sponsor->logo }}</td>
                    <td>{{ $sponsor->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
