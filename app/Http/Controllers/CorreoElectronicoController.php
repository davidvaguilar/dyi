<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorreoElectronicoController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        dd("create");
    }

    public function store(Request $request)
    {
        dd("sdsd");
      
    }

    public function show($id)
    {
        /*  $persona = new Persona();
        $nombre_completo = explode(' ', $request->nombre);
        $nombre_largo = count($nombre_completo);

        switch ($nombre_largo) {
            case 1:
                    $persona->nombre = $request->nombre;
                break;
            case 2:
                    $persona->paterno = $nombre_completo[$nombre_largo-1];
                    $persona->nombre = $nombre_completo[$nombre_largo-2];
                break;
            default:
                    if( $nombre_largo > 2 ){
                        $persona->materno = $nombre_completo[$nombre_largo-1];
                        $persona->paterno = $nombre_completo[$nombre_largo-2];
                        for ($i=0; $i < $nombre_largo-3 ; $i++) { 
                            $nombre = $nombre + $nombre_completo[i];
                        }
                        $persona->nombre = $nombre;
                    }
                break;
        }
        $persona->save();*/
       
        /*$correoElectronico = new CorreoElectronico();
        $correoElectronico->nombre = $request->nombre;
        $correoElectronico->tipo_documento = $request->tipo_documento;
        $correoElectronico->num_documento = $request->num_documento;
        $correoElectronico->telefono = $request->telefono;
        $correoElectronico->email = $request->email;
        $correoElectronico->direccion = $request->direccion;
        $correoElectronico->save();*/
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
