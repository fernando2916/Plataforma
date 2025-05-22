<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/mail.css') }}">

</head>
<body >
  <main>
    <div class="contenedor">
      <div class="fondo">

        <div class="imagen">
          <img src="{{ asset('images/icono.png')}} " alt="icono de la empresa">
        </div>
        <div class="contenedor-saludo">

          <p class="">Hola
            <span class="saludo">{{$user->nombre_completo}}</span>,
            Al parecer se ha expirado tú código de verificación, no te preocupes aqui tienes otro.
          </p>
          <div>

            <p class="text-xl">Utiliza el siguiente código para verificar e iniciar sesión en tu cuenta de Emprendedores Creativos
            </p>
            <div>

              <p class="text-lg font-medium">
                Este código expira en 15 minutos.
              </p>
              <span class="codigo">
                {{-- {{ $user->verification_code }} --}}
                152535
              </span>
            </div>
            <div class="btn">

              <a class="link"
                href="{{ env("APP_URL") . "/auth/activar-cuenta/" . $user->verification_id}} ">
                Confirmar cuenta
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
  </main>

</body>
</html>