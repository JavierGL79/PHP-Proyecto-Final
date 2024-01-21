<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    //Formulario de registro de usuarios
    public function formularioRegistro(){
        return view('auth.registro');
    }

    public function guardarRegistro(Request $request){
        //Lógica para guardar registro
        $request->validate([
            'username' => 'required|unique:users,username|string',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'string',
                'regex:/.{4}/',
                //'regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/',  //Regla de validación: 8 caracteres y al menos una letra y número.
                'confirmed',  // Confirmación de contraseña
            ]
    ]);
    
    // Lógica para crear un nuevo usuario en la base de datos
    // ...

    return redirect('/')->with('success', 'Usuario registrado con éxito. ¡Bienvenido!');
    }
}
