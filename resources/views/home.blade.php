@extends('layouts.app')

@section('page-title')
    Home
@endsection

@section('main')
    <div class="container mt-5 fs-4">
        <div class="row">
            @foreach ($trains as $train)
                <a href="{{ route('train',['id' => $train->id]) }}">
                    {{$train['Azienda']}} - {{$train['Stazione_partenza']}} - {{$train['Stazione_arrivo']}}
                    
                </a>
            @endforeach
        </div>
    </div>
@endsection