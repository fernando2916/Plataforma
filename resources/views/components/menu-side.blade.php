<ul class="p-3 border-b">
    <li
      class="hover:bg-slate-400 dark:hover:bg-nav-700 pl-3 rounded-lg transition-all"
      @click="showMenu = false"
    >
      <a
        href="{{ route('home') }}"
        class="flex items-center gap-3 p-3 text-lg"
      >
        <i class="fa-solid fa-house"></i>
      Inicio
        
      </a>
    </li>
    <li
      class="hover:bg-slate-400 dark:hover:bg-nav-700 pl-3 rounded-lg transition-all"
      @click="showMenu = false"
    >
      <a
        wire:navigate href="{{ route("blog.index") }}"
        class="flex items-center gap-3 p-3 text-lg"
      >
        <i class="fa-solid fa-book"></i>
      Blog
        
      </a>
    </li>
    <li
      class="hover:bg-slate-400 dark:hover:bg-nav-700 pl-3 rounded-lg transition-all"
      @click="showMenu = false"
    >
      <a
        wire:navigate href="{{ route("tienda.index") }}"
        class="flex items-center gap-3 p-3 text-lg"
      >
      <i class="fa-solid fa-cart-shopping"></i>
      Tienda
        
      </a>
    </li>
    <li
      class="hover:bg-slate-400 dark:hover:bg-nav-700 pl-3 rounded-lg transition-all"
      @click="showMenu = false"
    >
      <a
        wire:navigate href="{{ route("cursos.index") }}"
        class="flex items-center gap-3 p-3 text-lg"
      >
        <i class="fa-solid fa-video"></i>
      Cursos
        
      </a>
    </li>
  </ul>

  <p class="ml-8 pt-2 font-semibold text-link-500 dark:text-gray-400">
    Nuestros servicios
  </p>

  <ul class="p-3 border-b">
    <li
      class="hover:bg-slate-400 dark:hover:bg-nav-700 pl-3 rounded-lg transition-all"
      @click="showMenu = false"
    >
      <a
        wire:navigate href="{{ route("diseno.index") }}"
        class="flex items-center gap-3 p-3 text-lg"
      >
        <i class="fa-solid fa-pen"></i>
      Diseño Gráfico
        
      </a>
    </li>
    <li
      class="hover:bg-slate-400 dark:hover:bg-nav-700 pl-3 rounded-lg transition-all"
      @click="showMenu = false"
    >
      <a
        wire:navigate href="{{ route("fotografia.index") }}"
        class="flex items-center gap-3 p-3 text-lg"
      >
        <i class="fa-solid fa-camera"></i>
      Fotografía
        
      </a>
    </li>
    <li
      class="hover:bg-slate-400 dark:hover:bg-nav-700 pl-3 rounded-lg transition-all"
      @click="showMenu = false"
    >
      <a
        wire:navigate href="{{ route("desarrollo.index") }}"
        class="flex items-center gap-3 p-3 text-lg"
      >
      <i class="fa-solid fa-laptop-code"></i>
      Diseño y Desarrollo web
        
      </a>
    </li>
    <li
      class="hover:bg-slate-400 dark:hover:bg-nav-700 pl-3 rounded-lg transition-all"
      @click="showMenu = false"
    >
      <a
        wire:navigate href="{{ route("impresion.index") }}"
        class="flex items-center gap-3 p-3 text-lg"
      >
      <i class="fa-solid fa-print"></i>
      Impresión
        
      </a>
    </li>
    <li
      class="hover:bg-slate-400 dark:hover:bg-nav-700 pl-3 rounded-lg transition-all"
      @click="showMenu = false"
    >
      <a
        wire:navigate href="{{ route("asesorias.index") }}"
        class="flex items-center gap-3 p-3 text-lg"
      >
      <i class="fa-solid fa-chalkboard-user"></i>
      Asesorias
        
      </a>
    </li>
  </ul>
  
  <p class="ml-8 pt-2 font-semibold text-link-500 dark:text-gray-400">
   Sobre nosotros
  </p>

  <ul class="p-3 border-b">
    <li
    class="hover:bg-slate-400 dark:hover:bg-nav-700 pl-3 rounded-lg transition-all"
    @click="showMenu = false"
  >
    <a
      wire:navigate href="{{ route("nosotros.index") }}"
      class="flex items-center gap-3 p-3 text-lg"
    >
      <i class="fa-solid fa-circle-info"></i>
    Quienes somos
      
    </a>
  </li>
  <li
    class="hover:bg-slate-400 dark:hover:bg-nav-700 pl-3 rounded-lg transition-all"
    @click="showMenu = false"
  >
    <a
      wire:navigate href="{{ route("contacto.index") }}"
      class="flex items-center gap-3 p-3 text-lg"
    >
    <i class="fa-solid fa-envelopes-bulk"></i>
   Contacto
      
    </a>
  </li>
  <li
    class="hover:bg-slate-400 dark:hover:bg-nav-700 pl-3 rounded-lg transition-all"
    @click="showMenu = false"
  >
    <a
      wire:navigate href="{{ route("contacto.index") }}"
      class="flex items-center gap-3 p-3 text-lg"
    >
    <i class="fa-solid fa-download"></i>
    Recursos
      
    </a>
  </li>
  <li
    class="hover:bg-slate-400 dark:hover:bg-nav-700 pl-3 rounded-lg transition-all"
    @click="showMenu = false"
  >
    <a
      wire:navigate href="{{ route("glosario.index") }}"
      class="flex items-center gap-3 p-3 text-lg"
    >
    <i class="fa-brands fa-glide-g"></i>
    Glosario Gráfico
      
    </a>
  <li
    class="hover:bg-slate-400 dark:hover:bg-nav-700 pl-3 rounded-lg transition-all"
    @click="showMenu = false"
  >
    <a
      wire:navigate href="{{ route("social.index") }}"
      class="flex items-center gap-3 p-3 text-lg"
    >
    <i class="fa-solid fa-newspaper"></i>
    Responsabilidad Social
      
    </a>
  <li
    class="hover:bg-slate-400 dark:hover:bg-nav-700 pl-3 rounded-lg transition-all"
    @click="showMenu = false"
  >
    <a
      wire:navigate href="{{ route("ambiental.index") }}"
      class="flex items-center gap-3 p-3 text-lg"
    >
    <i class="fa-solid fa-earth-americas"></i>
    Politica Ambiental
      
    </a>
  </li>
  </ul>