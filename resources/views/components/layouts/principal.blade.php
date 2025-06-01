<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="darkMode()" x-init="init()" :class="{ 'dark': isDarkMode }">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('titulo') Emprendedores Creativos &copy; </title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://kit.fontawesome.com/255bc8dd2c.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @livewireStyles
 
</head>
<body class="bg-slate-300 dark:bg-fondo-100 dark:text-white selection:bg-selec-100 selection:text-white">
  <x-header/>
  <main class="pt-[70px]">
    @yield('contenido')
  </main>
  <x-footer/>
  @livewireScripts
 @if (session('swal'))
        <script>
            Swal.fire(@json(session('swal')));
        </script>
    @endif
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