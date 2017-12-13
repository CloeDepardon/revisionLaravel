@extends('layouts.base')


@section('title', 'Accueil')
@section('main')

<div class="container-fluid">

    <div class="row">
      <div class="col-lg-7">
        <h1>Ceci est une page d'accueil</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        <br>
      </div>



      <div class="col-lg-12">
      <h1>Liste des chatons</h1>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Âge</th>
            <th scope="col">Taille</th>
            <th scope="col">Poids</th>
            <th scope="col">Sexe</th>
            <th scope="col">Couleur(s)</th>
            <th scope="col">Supprimer</th>
            <th scope="col">Modifier</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($cats as $cat)
            <tr>
              <td> {{ $cat->name }} </td>
              <td> {{ $cat->age }} mois </td>
              <td> {{ $cat->size }} cm</td>
              <td> {{ $cat->weight }} kg</td>
              @if($cat->gender)
                <td> {{ $cat->gender->gender }} </td>
              @else
                <td> Null</td>
              @endif
              @if($cat->colors)
                <td>
                  @foreach ($cat->colors as $color)
                    {{{ $color->color }}}
                  @endforeach
                </td>
              @else
                <td>Null</td>
              @endif
              <td>
                <form action="/cat/delete/{{$cat->id}}" method="get">
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-outline-danger delete-btn">
                    <i class="fa fa-times" aria-hidden="true"></i>
                  </button>
                </form>
              </td>
              <td>
                <form action="/cat/update/{{$cat->id}}" method="get">
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-outline-info delete-btn">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                  </button>
                </form>
              </td>
          @endforeach
            </tr>

        </tbody>
      </div>
    </div>



</div>


@endsection
