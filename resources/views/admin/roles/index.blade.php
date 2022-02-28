@extends('layouts.admin')
@section('content')

    <nav class="navbar navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sponsoren</a>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">#</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Laatst gewijzigd</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <th scope="row">{{ $role->id }}</th>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->updated_at }}</td>
                            <td>
                                <a href="#"><i class="fas fa-edit"></i></a>
                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
