@extends('layouts.base')


@section('title', 'Modification')
@section('main')
  <h1>Modification des informations d'un chat</h1> <br>

  {!! Form::open(['url' => '/cat/update']) !!}
    {!! Form::hidden('id', $cat->id) !!}

    <div class="form-group">
      {{{ Form::label('Nom') }}}
      {{{ Form::text('name', $cat->name) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Taille (cm)') }}}
      {{{ Form::number('size', $cat->size) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Poids (kg)') }}}
      {{{ Form::number('weight', $cat->weight) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Âge (mois)') }}}
      {{{ Form::number('age', $cat->age) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Sexe') }}}
      {{{ Form::select('gender', $genders, $cat->gender->id)}}}
    </div>
    <div class="form-group">
      {{{ Form::label('Couleur') }}}
      {{{ Form::select('colors[]', $colors, $cat->colors, ['multiple' => true]) }}}

    </div>
    <div class="form-group">
      {{{ Form::submit('Modifier', ['class' => 'btn btn-outline-info'])}}}
    </div>

  {!! Form::close() !!}

@endsection
