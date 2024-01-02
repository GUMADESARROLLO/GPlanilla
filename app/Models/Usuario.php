<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Usuario extends Model {
    protected $table = "users";
    protected $connection = 'mysql';

    public function rol()
    {
        return $this->belongsTo(Roles::class, 'role_id','id');
    }


    public static function getUsuarios()
    {
        return Usuario::where('active',1)->get();
    }
    public static function SaveUsuario(Request $request) {
        if ($request->ajax()) {
            try {

                $usuario        = $request->input('usuario');
                $nombre         = $request->input('nombre');
                $passwprd       = Hash::make($request->input('passwprd'));
                $Estado         = $request->input('Estado');
                $id_rol         = $request->input('id_rol');


                if ($Estado=="0") {
                    $obj = new Usuario();   
                    $obj->username      = $usuario;                
                    $obj->nombre        = $nombre;
                    $obj->password      = $passwprd;
                    $obj->id_rol        = $id_rol;
                    $obj->activo        = 'S';                 
                    $response = $obj->save();
                } else {
                    $response =   Usuario::where('id',  $Estado)->update([
                        "username" => $usuario,
                        "nombre" => $nombre,
                        "id_rol" => $id_rol,
                    ]);
                }

                return response()->json($response);
                
            } catch (Exception $e) {
                $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
                return response()->json($mensaje);
            }
        }
    }
    public static function DeleteUsuario(Request $request)
    {
        if ($request->ajax()) {
            try {

                $id     = $request->input('id');
                
                $response =   Usuario::where('id',  $id)->update([
                    "activo" => 'N',
                ]);

                return response()->json($response);


            } catch (Exception $e) {
                $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
                return response()->json($mensaje);
            }
        }

    }
}