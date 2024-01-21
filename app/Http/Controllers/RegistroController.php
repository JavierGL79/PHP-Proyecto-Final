<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    //Formulario de registro de usuarios
    public function formularioRegistro(){
        return view('formulario.registro');
    }

    public function guardarRegistro(Request $request){
        //Lógica para guardar registro
        $request->validate([
            'username' => 'required|unique:users,username|string',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'string',
                'min:8',  
                'confirmed',  // Confirmación de contraseña
            ]
    ]);
    
    // Lógica para crear un nuevo usuario en la base de datos
    // ...

    return redirect('/')->with('success', 'Usuario registrado con éxito. ¡Bienvenido!');
    }
}
