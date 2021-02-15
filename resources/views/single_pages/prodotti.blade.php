@extends('layout.core') <!-- Prende il layout predefinito in core.blade.php -->

@section('title')   
    Prodotti
@endsection

@section('main')
<main>
    <div class="container">
      
      @include('partials.pasta');

    </div>
</main>
@endsection

