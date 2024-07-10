@extends('layouts.app')

@section('page-title')
    Train Info
@endsection

@section('main')
    <div class="container mt-5 fs-4">
        <div class="row">
            <div class="col">
                <div>{{$train['Azienda']}}</div>
                <div>{{$train['Stazione_partenza']}}</div>
                <div>{{$train['Stazione_arrivo']}}</div>
                <div>{{$train['Orario_partenza']}}</div>
                <div>{{$train['Orario_arrivo']}}</div>
                <div>{{$train['Codice_treno']}}</div>
                <div>{{$train['N_carozze']}}</div>
                <div>
                    @if ($train['In_orario'])
                        In orario
                    @elseif ($train['Cancellato'])
                        Linea Cancellata
                    @endif
                </div>  
            </div>
        </div>
    </div>
@endsection