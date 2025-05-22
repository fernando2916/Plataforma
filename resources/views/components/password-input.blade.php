@props([
    'name',
    'placeholder' => 'Contraseña',
    'id',
])

<div x-data="{ show: false }" class="relative">
    <input 
        id="{{ $id }}"
        :type="show ? 'text' : 'password'"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        class="disabled:bg-nav-900 disabled:border-nav-900 focus:shadow-link-200 w-full rounded-md border-2 bg-transparent p-2 pr-10 outline-none focus:shadow-md placeholder:text-slate-700 mt-2 @error($name) dark:border-alerts-500 @enderror"
    >
    <button
        type="button"
        @click="show = !show" 
        class="absolute top-[22px] right-3 flex items-center"
    >
        <i class="fa-solid fa-eye" x-show="show"></i>
        <i class="fa-solid fa-eye-slash" x-show="!show"></i>
    </button>
    @error($name)
    <p class="text-sm font-semibold text-alerts-500">{{ $message }}</p>
    @enderror
</div>
