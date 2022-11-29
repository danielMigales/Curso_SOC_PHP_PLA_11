<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CargaVistasController extends Controller
{
    public function gestion()
    {
        $datos['titulo'] = 'Gestion comercial';
        return view('gestion')->with($datos);
    }

    public function altaMtoPuntos()
    {
        $datos['titulo'] = 'Alta y Mantenimiento Cta Puntos';
        return view('alta-mto-puntos')->with($datos);
    }

    public function altaPersonas()
    {
        $datos['titulo'] = 'Alta Personas';
        return view('alta-personas')->with($datos);
    }
}
