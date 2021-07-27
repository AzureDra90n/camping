@extends('layouts.app')

@section('title', 'CAMPING FUN | Main Equipments')

@section('content')
    <div class="container">
        <div class="mt-5 text-decoration-underline">
            <h1 class="text-center">
                Main Equipments
            </h1>
        </div>

        <div class="col d-flex justify-content-center flex-wrap">
            @foreach ($dataBrg as $dBrg)
            <div class="col d-flex justify-content-center mt-5">

                <div class="card border-dark" style="width: 18rem;">

                    <img src="{{ $dBrg->Foto_Brg }}" class="card-img-top" alt="...">

                    <div class="card-body">
                      <h5 class="card-title">{{ $dBrg->Nama_Brg  }}</h5>
                      <p class="card-text">Merk: {{ $dBrg->Merk_Brg }}</p>
                      <p class="card-text">Jenis: {{ $dBrg->Jenis_Brg }}</p>
                      <p class="card-text">{{ $dBrg->Harga_Sewa }}</p>

                      <a href="#" class="btn btn-outline-dark">Detail</a>
                      <a href="#" class="btn btn-outline-warning">Add to Rent List</a>
                    </div>

                </div>

            </div>
            @endforeach
            
        </div>


    </div>
@endsection