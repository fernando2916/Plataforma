@extends('components.layouts.auth')

@section('titulo')
Ingresar |
@endsection

@section('contenido')
<div class="flex flex-col gap-6">

  <x-auth-header :title="__('Ingresar a tu cuenta')" :descripcion="__('Ingresa tu correo y contraseña a continuación para iniciar sesión')" />
  <form action="{{ route('login') }}" method="POST" noValidate class="flex flex-col gap-6">
    @csrf
      <div>
          <label for="email" class="text-sm font-medium mb-2 after:ml-0.5 after:text-red-500 after:content-['*']">Correo Electrónico</label>
          <input
          id="email" 
          name="email"
          value="{{ old('email') }}"
          type="email"
          placeholder="example@correo.com"                
          class="disabled:bg-nav-900 disabled:border-nav-900 focus:shadow-link-200 w-full rounded-md border-2 bg-transparent p-2 outline-none focus:shadow-md placeholder:text-slate-700 mt-2 @error('email')
          dark:border-alerts-500
          @enderror"
          >
          @error('email')
              
          <p class="text-sm font-semibold text-alerts-500">{{ $message }}</p>
          @enderror
      </div>
        @if(session('message'))
            <p class="text-red-500 text-sm mt-2">{{ session('message') }}</p>
        @endif

      <div>
          <label for="password" class="text-sm font-medium mb-2 after:ml-0.5 after:text-red-500 after:content-['*']">Contraseña</label>
          <x-password-input
              id="password" 
              name="password" 
              model="password" 
              placehlder="Contraseña" 
          />

      </div>

      <div class="flex justify-between items-center">
        <div class="flex items-center gap-2">
            <input type="checkbox" name="remember" class="accent-btn-400">
            <span class="text-sm text-slate-600 dark:text-white">Recuerdame</span>
        </div>
            <a href="{{ route('reset.index') }}" wire:navigate class="text-slate-600 dark:text-link-100">¿Olvidaste tu contraseña?</a>
      </div>
      <button type="submit" class="bg-btn-200 hover:bg-btn-400 dark:bg-btn-400 text-white dark:hover:bg-btn-600 duration-300 transition-colors rounded-md px-3 py-2 w-full cursor-pointer flex items-center justify-center gap-2">
          <i class="fa-solid fa-user"></i>
      Ingresar
  </button>
  </form> 
  <div class="space-x-1 rtl:space-x-reverse text-center text-zinc-600 dark:text-zinc-400 text-lg">
      ¿No tienes una cuenta?
      <a href="{{ route('register') }}" wire:navigate class="text-slate-600 dark:text-link-100 font-semibold">Crear Cuenta</a>
  </div>
</div>

@endsection

@push('scripts')
    @if (session('swal'))
        <script>
            Swal.fire(@json(session('swal')));
        </script>
    @endif
@endpush