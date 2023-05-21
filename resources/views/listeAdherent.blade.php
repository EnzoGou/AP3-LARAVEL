@extends('template')

@section('content')

@foreach ($Adherent as $a)
    <p>Nom: {{$a->nom}}|Prenom: {{$a->prenom}}|Adresse: {{$a->adresse}}</p>
@endforeach

@endsection