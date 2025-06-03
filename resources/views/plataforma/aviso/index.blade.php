@extends('components.layouts.principal')
@section('contenido')
<section>
  <div class="relative w-full z-20">
    <div class="flex items-center justify-end max-w-7xl mx-5 md:mx-auto mt-5 gap-2">
      <i class="fa-solid fa-user-shield"></i>
      <a href="" wire:navigate class="">
        <h3 class="text-link-300 dark:text-link-100">Ir a la Declaración de privacidad</h3>
      </a>
      <i class="fa-solid fa-angle-right"></i>
    </div>
    <div class="grid md:grid-cols-12 mx-5 max-w-7xl md:mx-auto">
      <div class="col-span-6 md:p-10 mt-5 space-y-3 place-content-center">
        <div>
          <h2 class="text-2xl md:text-3xl font-bold mb-3">
            Centro de privacidad Emprendedores Creativos
          </h2>
          <p class=" text-justify text-sm md:text-lg lg:text-xl">
            Te contamos cómo usamos y protegemos tus datos personales para
            mejorar nuestros servicios y ofrecerte una experiencia
            personalizada.
          </p>
        </div>
        <div>
          <ul class="flex flex-col md:flex-row justify-between gap-2 text-sm lg:text-lg">
            <li class="flex items-center gap-2">
              <i class="fa-solid fa-check"></i>
              Administra el uso de tus datos
            </li>
            <li class="flex items-center gap-2">
              <i class="fa-solid fa-check"></i>
              Conoce tus derechos
            </li>
          </ul>
        </div>
      </div>
      <div class="col-span-6 p-10">
        <img src="{{ asset('images/Hero.png') }}" alt="Aviso de privacidad" class="w-auto" />
      </div>
    </div>
  </div>
</section>

<section class="bg-slate-500 dark:bg-cont-100">
  <div class="grid md:grid-cols-12 max-w-7xl mx-5 md:mx-auto py-10">
    <div class="col-span-6 order-2 md:p-10">

    <div>
      <h2 class="text-2xl md:text-3xl mb-2 font-bold">Gestiona tus datos personales</h2>
    </div>
    <div class="mt-6 max-w-lg relative text-left">
      <ul>
        <div>

          <li class="flex items-center gap-5">
            <i class="fa-solid fa-check"></i>
            <h3 class="text-link-300 dark:text-link-100">
              Modifica a tus datos
            </h3>
          </li>
          <p class="text-justify text-sm pl-9 mb-3">
            Mantener actualizados tus datos personales nos permite
            ofrecerte una experiencia personalizada, garantizar el uso
            correcto de nuestras plataformas y el cumplimiento de las
            regulaciones vigentes.
          </p>
        </div>
        <div>

          <li class="flex items-center gap-5">
            <i class="fa-solid fa-check"></i>
            <h3 class="text-link-300 dark:text-link-100">
             Tus datos personales deben ser verídicos
            </h3>
          </li>
          <p class="text-justify text-sm pl-9 mb-3">
            Debes garantizar que los datos personales que nos das son exactos y verídicos para evitar la suspensión en los servicios o la inhabilitación de tu cuenta.
          </p>
        </div>
        <div>

          <li class="flex items-center gap-5">
            <i class="fa-solid fa-check"></i>
            <h3 class="text-link-300 dark:text-link-100">
              Integramos tus datos en nuestras plataformas
            </h3>
          </li>
          <p class="text-justify text-sm pl-9 mb-3">
            Buscamos que vender, comprar o lo que quieras hacer, sea rápido y fácil en todo nuestro ecosistema.
          </p>
        </div>
      </ul>
    </div>
    <div class="flex gap-10 my-5 max-w-lg items-center">
      <a wire:navigate href="{{ route('perfil.index') }}" class="">
        <button class="p-3 bg-btn-200 hover:bg-btn-400 text-white dark:bg-btn-400 dark:hover:bg-btn-600 transition-colors duration-150 rounded-lg font-semibold text-sm md:text-lg">Gestionar tus datos</button>
      </a>
      <a href="" class="">
        <button class="p-3 bg-btn-200 hover:bg-btn-400 text-white dark:bg-btn-400 dark:hover:bg-btn-600 transition-colors duration-150 rounded-lg font-semibold text-sm md:text-lg">
          Conoce más
          <i class="fa-solid fa-angle-right"></i>
        </button>
      </a>
    </div>
    </div>
    <div class="col-span-6 px-10">
      <img src="{{ asset('images/PersonalData.svg') }}" alt="Gestiona tus datos personales" class="rounded-lg" />
    </div>
  </div>
</section>

<section>
  <div class="grid md:grid-cols-12 max-w-7xl mx-5 md:mx-auto py-5">
    <div class="col-span-6 md:p-10">
      <div>
        <h2 class="text-2xl md:text-3xl mb-2 font-bold">Configura tus preferencias</h2>
        <p class="test-justify">
          Puedes controlar tu experiencia mediante la configuración de los
            permisos de privacidad. Habilitar estas opciones nos permite
            mostrarte contenido relevante según tus intereses.
        </p>
      </div>
      <div class="col-span-6 order-1 px-10 my-5 md:hidden ">
         <img src="{{ asset('images/Hero.png') }}" alt="Aviso de privacidad" class="w-auto" />
      </div>
      <div class="mt-6 max-w-lg relative text-left">
        <ul>
         <div>
              <li class="flex items-center gap-5">
                <div>
                  <i class="fa-solid fa-check"></i>
                </div>
                <h3 class="text-base md:text-xl font-semibold">
                  Personalizan tu experiencia
                </h3>
              </li>
              <p class="text-justify text-sm pl-9 mb-3">
                Te damos recomendaciones útiles de otros productos de acuerdo
                a la información de tus últimas compras, búsquedas y
                favoritos.
              </p>
            </div>
         <div>
              <li class="flex items-center gap-5">
                <div>
                  <i class="fa-solid fa-check"></i>
                </div>
                <h3 class="text-base md:text-xl font-semibold">
                   Nos ayudan a mejorar nuestros servicios
                </h3>
              </li>
              <p class="text-justify text-sm pl-9 mb-3">
                Cierta información sobre tu actividad cuando navegas nuestros
                sitios, nos permite analizar tus preferencias para mejorar
                nuestros servicios o crear nuevas soluciones
              </p>
            </div>
        </ul>
      </div>
      <div class="my-5">
        <button class="p-3 bg-btn-200 hover:bg-btn-400 text-white dark:bg-btn-400 dark:hover:bg-btn-600 transition-colors duration-150 rounded-lg font-semibold text-sm md:text-lg w-full md:w-auto" type="button">
          Configurar preferencias
        </button>
      </div>
    </div>
  <div class="col-span-6 order-1 px-10 my-5 md:flex ">
         <img src="{{ asset('images/Hero.png') }}" alt="Aviso de privacidad" class="rounded-lg" />
      </div>

  </div>
</section>

<section class="my-10 py-10 bg-slate-500 dark:bg-cont-100">
  <div class="my flex flex-col items-center justify-center md:mx-auto max-w-7xl">
    <div class="space-y-3 mx-5">
      <h2 class="text-2xl md:text-3xl font-bold text-center">
        Cómo usamos las cookies
      </h2>
      <p class="text-justify text-sm md:text-lg">
          Las cookies nos permiten conocer cómo navegas nuestras páginas y
          mantener su funcionamiento. Con esta información, hacemos que sea
          más fácil, rápido y seguro usar tu cuenta. Si desactivas ciertas
          cookies, es posible que no puedas disfrutar de algunas
          funcionalidades de nuestros sitios.
      </p>
    </div>
    <div class="my-3">
      <p>Te contamos para qué sirven:</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-2 md:mx-5 ">
      <div class="shadow-lg shadow-cyan-950 bg-slate-500 dark:bg-nav-800 rounded-xl mx-7 md:mx-2 p-7">
        <span>
          <img src="{{ asset('images/StickerAdvertising.svg') }}" alt="" class="p-5 w-32 md:w-44 justify-center mx-auto">
        </span>
        <div class="text-center mx-auto">
          <h2 class="font-bold mb-2">Publicidad personalizada</h2>
          <p class="text-sm text-center">Mejoramos nuestras ofertas y servicios y te mostramos anuncios que pueden interesarte.</p>
        </div>
      </div>
      <div class="shadow-lg shadow-cyan-950 bg-slate-500 dark:bg-nav-800 rounded-xl mx-7 md:mx-2 p-7">
        <span>
          <img src="{{ asset('images/StickerUserExperience.svg') }}" alt="" class="p-5 w-32 md:w-44 justify-center mx-auto">
        </span>
        <div class="text-center mx-auto">
          <h2 class="font-bold mb-2">Faciliita tu experiencia</h2>
          <p class="text-sm text-center">Recordamos tus datos para un ingreso fácil y rápido desde tus
              dispositivos habituales.</p>
        </div>
      </div>
      <div class="shadow-lg shadow-cyan-950 bg-slate-500 dark:bg-nav-800 rounded-xl mx-7 md:mx-2 p-7">
        <span>
          <img src="{{ asset('images/StickerSecurity.svg') }}" alt="" class="p-5 w-32 md:w-44 justify-center mx-auto">
        </span>
        <div class="text-center mx-auto">
          <h2 class="font-bold mb-2">Más seiguridad</h2>
          <p class="text-sm text-center">Refuerzan la seguridad de nuestro sitio y protegen a tu cuenta
              de posibles ataques maliciosos.
            </p>
        </div>
      </div>
    </div>
  </div>
  <div class="flex items-center justify-center gap-10 mb-5 mt-10">
    <button
        type="button"
        class="p-3 bg-btn-200 hover:bg-btn-400 text-white dark:bg-btn-400 dark:hover:bg-btn-600 transition-colors duration-150 rounded-lg font-semibold text-sm md:text-lg"
      >
        Configurar cookies
      </button>
      <button
        type="button"
        class="text-link-300 hover:text-link-500 dark:text-link-100 dark:hover:text-link-300 duration-150 transition-colors font-semibold flex items-center gap-2 text-sm md:text-lg"
      >
        Conocer más
        <i class="fa-solid fa-angle-right"></i>
      </button>
  </div>
</section>
@endsection