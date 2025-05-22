@extends('components.layouts.principal')

@section('contenido')
<div class="">
   @auth
    <div class="flex justify-center">
        <h1 class="text-4xl font-bold">Bienvenido {{ auth()->user()->nombre_completo }}</h1>
    </div>
    @guest
        
    @endguest
   @endauth
</div>
@endsection