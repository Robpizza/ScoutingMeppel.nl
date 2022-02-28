@extends('layouts.boilerplate')
@section('content')
    <main class="d-flex align-items-center justify-content-center w-100 vh-65">
        <form class="w-25" method="post">


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h1 class="h3 mb-3 fw-normal">Administratie Omgeving</h1>
            <div class="form-floating mb-3">
                <input type="email" class="form-control @if($errors->any()) alert-danger @enderror" name="email" id="email" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping" value="{{old('email')}}" required/>
                <label for="email">E-mailadres</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control @if($errors->any()) alert-danger @enderror" name="password" id="password" placeholder="Wachtwoord" aria-label="Wachtwoord" aria-describedby="addon-wrapping" required/>
                <label for="password">Wachtwoord</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember" @if(old('remember')) checked @endif"> Blijf ingelogd
                </label>
            </div>
            @csrf
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            <p class="mt-4 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </main>
@endsection
