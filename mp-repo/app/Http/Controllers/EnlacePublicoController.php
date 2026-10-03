<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class EnlacePublicoController extends Controller
{

    public function index(){
        return view('enlacepublico.enlace-publico');
    }

    public function generar(Request $request)
    {
        $request->validate([
            'horas' => 'required|integer|min:1|max:720' // Máximo 30 días, por ejemplo
        ]);

        // Genera la URL temporal firmada
        $urlGenerada = URL::temporarySignedRoute(
            'proyectos.public.create', 
            now()->addHours($request->integer('horas'))
        );

        // Retorna a la vista con el enlace generado en una variable de sesión (Flash)
        return back()->with('enlace_generado', $urlGenerada);
    }

    public function create()
    {
        echo "Esta es la pantalla para subir un proyecto!";    

        // return view('proyectos.new');
    }



}
