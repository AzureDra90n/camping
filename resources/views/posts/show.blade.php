@extends('layouts.app')

@section('title', $post->Nama_Brg)
    
@section('content')
    <div class="container">
        <p>{{ $post->Nama_Brg }}</p>
    </div>
@endsection