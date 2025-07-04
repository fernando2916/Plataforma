<header class="flex justify-between w-full items-center p-3 bg-slate-400 dark:bg-nav-900 fixed w-ful z-50">
  <div>
    <a wire:navigate href="{{ route('home') }}" class="">

      <img src="{{ asset('images/icono.png') }}" alt="icono de la empresa" class="w-10 h-10"/>
    </a>
  </div>
  <div class="md:hidden -order-1 md:order-none">
    <x-sidebar/>
  </div>
  <x-menu-principal/>
  @auth
  <x-menu-icons/>
    @else
    <x-menu-account/>
  @endauth
</header>