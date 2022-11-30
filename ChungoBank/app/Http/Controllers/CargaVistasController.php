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

    public function altaMovimientos()
    {
        $datos['titulo'] = 'Alta Movimientos';
        return view('alta-movimientos')->with($datos);
    }

    public function consultaMovimientos()
    {
        $datos['titulo'] = 'Consulta Movimientos';
        return view('consulta-movimientos')->with($datos);
    }

    public function detalleMovimiento()
    {
        $datos['titulo'] = 'Detalle Movimiento';
        return view('detalle-movimiento')->with($datos);
    }


}
