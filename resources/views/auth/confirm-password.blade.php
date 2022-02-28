@extends('layouts.boilerplate')
@section('content')
    <main class="d-flex align-items-center justify-content-center w-100 vh-65">
        <form class="w-25" method="post">
            <div class="form-floating mb-3">
                <input type="password" class="form-control @if($errors->any()) alert-danger @enderror" name="password" id="password" placeholder="Wachtwoord" aria-label="Wachtwoord" aria-describedby="addon-wrapping" required/>
                <label for="password">Wachtwoord</label>
            </div>
            @csrf
            <button class="w-100 btn btn-lg btn-primary" type="submit">Verifieer</button>
        </form>
    </main>
@endsection
