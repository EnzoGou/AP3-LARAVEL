@extends('template')

@section('content')
    <h1>Liste des adhérents</h1>

    <ul>
        @foreach($Adherent as $adherent)
            <li>{{ $adherent }}</li>
        @endforeach
    </ul>
@endsection