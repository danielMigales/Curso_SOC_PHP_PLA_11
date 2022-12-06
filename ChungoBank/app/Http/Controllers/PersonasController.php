<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;
use Illuminate\Support\FAcades\Validator;
use App\Rules\nifExist;

class PersonasController extends Controller
{
    public function consulta($nif = null)
    {
        $data['nif'] = $nif;

        $rules = array('nif' => ["required", nifExist]);
        $messages = array('nif.required' => "El campo nif es obligatorio");
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            $datos['errors'] = $validator->messages();
            session()->forget('idPersona');
        }

        $persona = Personas::where('nif', $data['nif'])->first();

        session(['idPersona' => $persona->id]);

        $datos['errors'] = $validator->messages();
        $datos['persona'] = $persona;
        $datos['titulo'] = 'Gestion comercial';
        return view('gestion')->with($datos);
    }

    public function alta(){
        $datos = request()->all();

        'nif' =>'required|unique:personas, nif';
        'nombre' =>'required';
        'apellidos' =>'required';
        'direccion' =>'required';
        'email' =>'required|email;

        if($validator->fails()){


            return redirect()->route('altaPersonas')->withInput()->withErrors($validator);
        }

        

    }
}
