@extends('layouts.boilerplate')
@section('content')
    <div class="container pt-5">
        <h2 class="fw-bold pb-3">Lid worden!</h2>
        <div>
            <h3>Aanmelden om te komen kijken</h3>
            <p>Lijkt scouting je echt superleuk en wil je eens komen kijken? Dan is dat uiteraard mogelijk. De eerste 2
                maal kijken zijn gratis. Om te komen kijken surf even naar de pagina van de desbetreffende speltak, of
                vul het onderstaande formulier in. Op
                de speltakpagina's vind je de contactgegevens van de teamleiders. De teamleider kan je vertellen waar en
                wanneer je moet zijn en wat je mee moet nemen.</p>
        </div>

        <div class="pt-3 d-flex justify-content-center">
            <div class="w-75">
                <form>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Uw naam" aria-label="Uw naam" name="name">
                            </div>
                            <div class="col">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Welke groep wil je contacteren?</option>
                                    @foreach($groups as $group)
                                        <option value="{{$group->slug}}">{{$group->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <input type="email" class="form-control" placeholder="Uw e-mailadres" aria-label="Uw e-mailadres" name="email">
                            </div>
                            <div class="col">
                                <textarea class="form-control" placeholder="Bericht..."></textarea>
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-success float-end">Verstuur</button>
                </form>
            </div>
        </div>
    </div>
@endsection
