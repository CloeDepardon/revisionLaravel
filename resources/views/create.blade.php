@extends('layouts.base')


@section('title', 'Création')
@section('main')
  <h1>Insertion d'un nouveau chat</h1> <br>

  {!! Form::open(['url' => '/cat/insert']) !!}

    <div class="form-group">
      {{{ Form::label('Nom') }}}
      {{{ Form::text('name') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Taille (cm)') }}}
      {{{ Form::number('size') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Poids (kg)') }}}
      {{{ Form::number('weight') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Âge (mois)') }}}
      {{{ Form::number('age') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Sexe') }}}
      {{{ Form::select('gender', $genders)}}}
    </div>
    <div class="form-group">
      {{{ Form::label('Couleur', 'Couleur', ['class' => 'align-top']) }}}
      {{{ Form::select('colors[]', $colors, 0, ['multiple' => true, 'class' => 'select-color']) }}}
    </div>
    <div class="form-group">
      {{{ Form::submit('Insérer', ['class' => 'btn btn-outline-info'])}}}
    </div>
  {!! Form::close() !!}

@endsection
