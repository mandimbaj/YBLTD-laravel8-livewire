@extends("layouts.master")

@section("contenu")
    <div class="row">
        <div class="col-12 p-4">
            <div class="jumbotron ">
                <h1 class="display-3">Bienvenu, <strong>{{userFullName()}} </strong></h1>
                @foreach(auth()->user()->roles as $role)
                <p class="font-weight-bold text-nowrap">{{$role->nom}}</p>
                @endforeach
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">En savoir plus...</a>
                </p>
            </div>
        </div>
    </div>
@endsection
