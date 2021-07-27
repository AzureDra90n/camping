@extends('layouts.app')

@section('title', 'CAMPING FUN | Main Equipments')

@section('content')
    <div class="container">
        <div class="mt-5 text-decoration-underline">
            <h1 class="text-center">
                Main Equipments
            </h1>
        </div>
        
        @foreach ($dataBrg as $dBrg)
            {{ $dBrg->Nama_Brg  }}
        @endforeach


    </div>
@endsection