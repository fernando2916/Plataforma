@extends('components.layouts.auth')

@section('titulo')
Crear Cuenta |
@endsection

@section('contenido')
<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Crear una Cuenta')"
        :descripcion="__('Ingresa tus datos a continuación para crear tu cuenta')" />
    <div>
        <form action="{{ route('register') }}" method="POST" novalidate class="flex flex-col gap-4">
            @csrf
            <div>
                <label for="name"
                    class="text-sm font-medium mb-3 after:ml-0.5 after:text-red-500 after:content-['*']">Nombre
                    Completo</label>
                <input id="name" name="nombre_completo" value="{{ old('nombre_completo') }}" type="text"
                    placeholder="Nombre Completo" class="disabled:bg-nav-900 disabled:border-nav-900 focus:shadow-link-200 w-full rounded-md border-2 bg-transparent p-2 outline-none focus:shadow-md placeholder:text-slate-700 mt-2 @error('nombre_completo')
               dark:border-alerts-500
               @enderror">
                @error('nombre_completo')

                <p class="text-sm font-semibold text-alerts-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="username"
                    class="text-sm font-medium mb-3 after:ml-0.5 after:text-red-500 after:content-['*']">Nombre de
                    usuario</label>
                <input id="username" name="username" value="{{ old('username') }}" type="text"
                    placeholder="Nombre de usuario" class="disabled:bg-nav-900 disabled:border-nav-900 focus:shadow-link-200 w-full rounded-md border-2 bg-transparent p-2 outline-none focus:shadow-md placeholder:text-slate-700 mt-2 @error('username')
               dark:border-alerts-500
               @enderror">
                @error('username')

                <p class="text-sm font-semibold text-alerts-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email"
                    class="text-sm font-medium mb-2 after:ml-0.5 after:text-red-500 after:content-['*']">Correo
                    Electrónico</label>
                <input id="email" name="email" value="{{ old('email') }}" type="email" placeholder="example@correo.com"
                    class="disabled:bg-nav-900 disabled:border-nav-900 focus:shadow-link-200 w-full rounded-md border-2 bg-transparent p-2 outline-none focus:shadow-md placeholder:text-slate-700 mt-2 @error('email')
               dark:border-alerts-500
               @enderror">
                @error('email')

                <p class="text-sm font-semibold text-alerts-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password"
                    class="text-sm font-medium mb-2 after:ml-0.5 after:text-red-500 after:content-['*']">Contraseña</label>
                <x-password-input id="password" name="password" model="password" placehlder="Contraseña" />

            </div>
            <div>
                <label for="password_confirmation"
                    class="text-sm font-medium mb-2 after:ml-0.5 after:text-red-500 after:content-['*']">Confirma tu
                    contraseña</label>
                <x-password-input id="password_confirmation" name="password_confirmation" model="password_confirmation"
                    placehlder="Confirma tu contraseña" />
            </div>
            <div className="flex items-start">

                <p class="w-full py-1 text-start md:text-[.7rem]">
                
                 Al crear tú cuenta, indicas que leíste y aceptas los
                
                 <x-terminos-modal />
                
                
                
                 <span class="md:text-[.7rem]">y el</span>
                
                 <x-aviso-privacidad />
                
                 <span class="font-bold md:text-[.9rem]">de Emprendedores Creativos.</span>
                
                </p>
                
                </div>
            <button type="submit"
                class="bg-btn-200 hover:bg-btn-400 dark:bg-btn-400 text-white dark:hover:bg-btn-600 duration-300 transition-colors rounded-md px-3 py-2 w-full cursor-pointer flex items-center justify-center gap-2">
                <i class="fa-solid fa-right-to-bracket"></i>
                Crear Cuenta
            </button>
        </form>
    </div>
    <div class="space-x-1 rtl:space-x-reverse text-center text-zinc-600 dark:text-zinc-400 text-lg">
        ¿Ya tienes una cuenta?
        <a href="{{ route('login') }}" wire:navigate
            class="text-slate-600 dark:text-link-100 font-semibold">Ingresar</a>
    </div>
</div>
@endsection