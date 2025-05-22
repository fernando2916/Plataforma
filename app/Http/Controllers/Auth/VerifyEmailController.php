<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\VerificationCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class VerifyEmailController extends Controller
{
    public function show(User $user)
    {
        return view('Auth.VerifyEmail', [
            'user' => $user,
        ]);
    }

    public function verify(Request $request, User $user)
    {
        
        $request->validate([
            'code' => 'required|string|max:6',
        ]);
        
        $code = $request->input('code');


        $user = User::where('verification_id', $user->verification_id)->first();
        if(!$user) {
            return back()->with('message', 'Código de verificación inválido');
        }

        if($user->verification_code !== $code) {
            return back()->with('message', 'Código de verificación incorrecto');
        }

        if(now()->greaterThan($user->verification_code_expires_at)) {
            return back()->with('message', 'El código de verificación ha expirado');
        }

        $user->is_verified = 'verificado';
        $user->email_verified_at = now();
        $user->verification_code = null;
        $user->verification_code_expires_at = null;
        $user->save();

        
        // mensaje flash
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Correo Verificado Correctamente',
            'text' => 'Listo, ahora puedes inicar sesión y disfrutar.',
            'background' => '#120024',
            'color' => '#ffffff',
        ]);
        return redirect()->route('login'); 
             
    }

    public function resetCode(Request $request, User $user)
    {
        $user->verification_code = random_int(100000, 999999);
        $user->verification_code_expires_at = now()->addMinutes(15);
        $user->save();

        // enviar correo
        Mail::to($user->email)->send(new VerificationCode($user));

        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Nuevo Código de Verificación Enviado',
            'text' => 'Revisa tu bandeja de entrada o carpeta de spam.',
            'background' => '#120024',
            'color' => '#ffffff',
        ]);

        return back()->with('message', 'Nuevo código de verificación enviado');
    }
    
        
}
