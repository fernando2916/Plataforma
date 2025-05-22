@extends('components.layouts.auth')

@section('titulo')
Restablecer Contraseña |
@endsection

@section('contenido')
<div class="flex flex-col gap-6">
  <x-auth-header :title="__('¿Se te olvido tu contraseña?')"
    :descripcion="__('Ingresa tu correo y espera instrucciones')" />
  <form class='flex flex-col gap-6' method="POST" action="{{ route('reset.store') }}">
    @csrf
    <div class="">
      <label for="email" class="text-sm font-medium mb-2 after:ml-0.5 after:text-red-500 after:content-['*']">Correo
        Electrónico</label>
      <input id="email" name="email" value="{{ old('email') }}" type="email" placeholder="example@correo.com" class="disabled:bg-nav-900 disabled:border-nav-900 focus:shadow-link-200 w-full rounded-md border-2 bg-transparent p-2 outline-none focus:shadow-md placeholder:text-slate-700 mt-2 @error('email')
        dark:border-alerts-500
        @enderror">
      @error('email')

      <p class="text-sm font-semibold text-alerts-500">{{ $message }}</p>
      @enderror
    </div>
    @if(session('message'))
    <p class="text-red-500 text-sm mt-2">{{ session('message') }}</p>
    @endif
    <button type="submit"
      class="bg-btn-200 hover:bg-btn-400 dark:bg-btn-400 text-white dark:hover:bg-btn-600 duration-300 transition-colors rounded-md px-3 py-2 w-full cursor-pointer flex items-center justify-center gap-2">
    
      Restablecer contraseña
    </button>
  </form>
</div>
@endsection