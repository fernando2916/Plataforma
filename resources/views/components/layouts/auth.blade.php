<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('titulo') Emprendedores Creativos &copy;</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://kit.fontawesome.com/255bc8dd2c.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @livewireStyles
    </head>
    <body class="min-h-screen bg-slate-300 dark:bg-fondo-100 dark:text-white selection:bg-selec-100 selection:text-white">
        <nav class="bg-slate-400 dark:bg-nav-900 text-slate-800 dark:text-white p-5">
            <div class="flex justify-between items-center">
                <a wire:navigate href="{{ route('home') }}" class="flex items-center justify-center">
                <img src="{{ asset('images/icono.png') }}" alt="" class="w-11 h-11">
            </a>
            <x-btn-darkmode/>
        </div>
        </nav>
        <div class="flex min-h-svh flex-col items-center gap-6 p-2 md:p-10">
            <div class="flex w-full max-w-md flex-col gap-6">               
                <div class="flex flex-col gap-6">
                    <div class="rounded-xl bg-slate-400 dark:bg-cont-100 shadow-xs">
                        <div class="px-7 md:px-10 py-8"> @yield('contenido')</div>
                    </div>
                </div>
            </div>
        </div>
    @livewireScripts
    @stack('scripts')    
    {{-- @if (session('swal'))
        <script>
            Swal.fire(@json(session('swal')));
        </script>
    @endif --}}
    <script>
    function darkMode() {
        return {
            isDarkMode: false,
            init() {
                const storedTheme = localStorage.getItem('theme');
                const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                this.isDarkMode = storedTheme === 'dark' || (!storedTheme && prefersDark);
                this.applyTheme();

                Livewire.hook('message.processed', () => {
                    this.applyTheme();
                });
            },
            toggle() {
                this.isDarkMode = !this.isDarkMode;
                localStorage.setItem('theme', this.isDarkMode ? 'dark' : 'light');
                this.applyTheme();
            },
            applyTheme() {
                document.documentElement.classList.toggle('dark', this.isDarkMode);
            }
        }
    }
</script>
    </body>
</html>
