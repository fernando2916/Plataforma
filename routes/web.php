<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ecommerce\HomeController;
use App\Http\Controllers\Plataforma\BlogController;
use App\Http\Controllers\Plataforma\AvisoController;
use App\Http\Controllers\Plataforma\CursosController;
use App\Http\Controllers\Plataforma\DiseñoController;
use App\Http\Controllers\Plataforma\GlosarioController;
use App\Http\Controllers\Plataforma\AsesoriasController;
use App\Http\Controllers\Plataforma\DiseñoWebController;
use App\Http\Controllers\Plataforma\ImpresionController;
use App\Http\Controllers\Plataforma\FotografiaController;
use App\Http\Controllers\Plataforma\Nosotros\EnviosController;
use App\Http\Controllers\Plataforma\Nosotros\ContactoController;
use App\Http\Controllers\Plataforma\Nosotros\NosotrosController;
use App\Http\Controllers\Plataforma\Nosotros\RecursosController;
use App\Http\Controllers\Plataforma\Nosotros\VacantesController;
use App\Http\Controllers\Plataforma\Nosotros\FrecuentesController;
use App\Http\Controllers\Plataforma\Nosotros\FacturacionController;
use App\Http\Controllers\Plataforma\TerminosController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/diseño-grafico', [DiseñoController::class, 'index'])->name('diseno.index');
Route::get('/fotografia', [FotografiaController::class, 'index'])->name('fotografia.index');
Route::get('/diseño-y-desarrollo-web', [DiseñoWebController::class, 'index'])->name('desarrollo.index');
Route::get('/impresión', [ImpresionController::class, 'index'])->name('impresion.index');
Route::get('/asesorias', [AsesoriasController::class, 'index'])->name('asesorias.index');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto.index');

// Soporte
Route::get('/soporte', [BlogController::class, 'index'])->name('soporte.index');

// Mi perfil
Route::middleware(['auth', 'verified'])->group(function () {

  Route::get('/mi-perfil', [BlogController::class, 'index'])->name('perfil.index');
Route::get('/perfil/mi-lista-de-deseos', [BlogController::class, 'index'])->name('deseos.index');
Route::get('/perfil/mis-compras', [BlogController::class, 'index'])->name('compras.index');
Route::get('/perfil/mis-cursos', [BlogController::class, 'index'])->name('cuenta.cursos.index');

Route::get('/facturacion', [FacturacionController::class, 'index'])->name('facturacion.index');

});
// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
// Tienda
Route::get('/tienda', [ContactoController::class, 'index'])->name('tienda.index');
// Cursos
Route::get('/cursos', [CursosController::class, 'index'])->name('cursos.index');
Route::get('/envios', [EnviosController::class, 'index'])->name('envios.index');
Route::get('/recursos', [RecursosController::class, 'index'])->name('recursos.index');
Route::get('/vacantes', [VacantesController::class, 'index'])->name('vacantes.index');
Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros.index');
Route::get('/preguntas-frecuentes', [FrecuentesController::class, 'index'])->name('frecuentes.index');
Route::get('/privacidad', [AvisoController::class, 'index'])->name('aviso.index');
Route::get('/privacidad/resumen', [AvisoController::class, 'resumen'])->name('resumen.index');
Route::get('/terminos-y-condiciones', [TerminosController::class, 'index'])->name('terminos.index');
Route::get('/glosario', [GlosarioController::class, 'index'])->name('glosario.index');
Route::get('/responsabilidad-social', [FrecuentesController::class, 'index'])->name('social.index');
Route::get('/politica-ambiental', [FrecuentesController::class, 'index'])->name('ambiental.index');



// require __DIR__.'/auth.php';
// require __DIR__.'/admin.php';