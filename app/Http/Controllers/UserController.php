<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request){
        $user = User::firstOrCreate(
            ['email' => $request->email], // Busca el usuario por su dirección de correo electrónico
            [ // Si no se encuentra, crea un nuevo usuario con estos datos
                'name' => $request->name,
                'lastName' => $request->lastName,
                'email' => $request->email,
                'password' => bcrypt($request->password) // Asegúrate de cifrar la contraseña antes de guardarla
            ]
        );
        
        if ($user->wasRecentlyCreated) {
            // El usuario fue recientemente creado, lo que significa que no existía previamente
            return view('auth.login');
        } else {
            // El usuario ya existía, no se creó uno nuevo
            return view('auth.login');
        }
        
    
    }
    
  

    public function index(){
        $users = User::all();
        return response()->json($users);
    }
    
}
