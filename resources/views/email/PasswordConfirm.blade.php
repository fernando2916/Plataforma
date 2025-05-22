<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/mail.css') }}">
</head>
<body>
  <main>
    <div class="contenedor">
      <div class="fondo">

        <div class="imagen">
          <img src="{{ asset('images/icono.png')}} " alt="icono de la empresa">
        </div>
        <div class="contenedor-saludo">

          <p class="">Hola
            <span class="saludo">{{ $user->nombre_completo }}:
            </span>
            <p class="">
              Recibimos tu solicitud para cambiar tu contraseña.
            </p>
          </p>
          <div class="">
            <span class="saludo">¿No solicitaste esto?</span>            
            <p class="prec">Si recibiste este correo electrónico, pero no estás intentando restablecer tu contraseña, puedes ignorarlo. No se ha realizado ningún cambio en tu cuenta.
            </p>
           
            <div class="btn">

              <a class="link"
                href="{{ env("APP_URL") . "/auth/confirmar-contraseña/" . $user->verification_id}} ">
                Cambiar contraseña
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