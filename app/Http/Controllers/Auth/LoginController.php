<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    
     //Redirección después de login exitoso
 
    protected $redirectTo = '/home';
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
       // Sobrescribe el método redirectTo
       protected function redirectTo()
       {
           // Si hay una URL previa almacenada en la sesión, redirige a esa URL
           return session()->get('url.intended', $this->redirectTo);
       }

}
