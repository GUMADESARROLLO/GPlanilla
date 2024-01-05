<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Employee extends Model {
    protected $table = "tbl_employee";
    protected $connection = 'mysql';
    public $timestamps = false;

    public function Contract()
    {
        return $this->belongsTo(Contract::class, 'contract_type_id','id_contract_type');
    }
    public function Position()
    {
        return $this->belongsTo(Position::class, 'position_id','id_position');
    }

    public static function SaveEmployee(Request $request)
    {
            try {
                DB::transaction(function () use ($request) {
                    $posicion           = $request->input('posicion');
                    $contrato           = $request->input('contrato');

                    $nombres            = $request->input('nombres');
                    $apellidos          = $request->input('apellidos');
                    $telefono           = $request->input('telefono');
                    $cedula             = $request->input('cedula');
                    $num_inss           = $request->input('num_inss');
                    $email              = $request->input('email');
                    $direccion          = $request->input('direccion');
                    $Vacaciones         = $request->input('Vacaciones');
                    $date_in            = $request->input('date_in');
                    $date_out           = $request->input('date_out');
                    $genero             = $request->input('genero');
                    $nacionalidad       = $request->input('nacionalidad');
                    $talla_camisa       = $request->input('talla_camisa');
                    $talla_pantalon     = $request->input('talla_pantalon');
                    $activo             = $request->input('activo');

                    

                    $toInsert[0] = [
                        'position_id'           => $posicion ,
                        'contract_type_id'      => $contrato ,
                        'first_name'            => $nombres ,
                        'last_name'             => $apellidos ,
                        'phone_number'          => $telefono ,
                        'cedula_number'         => $cedula ,
                        'inss_number'           => $num_inss ,
                        'email'                 => $email ,
                        'address'               => $direccion ,
                        'vacation_balance'      => $Vacaciones ,
                        'date_in'               => $date_in ,
                        'date_out'              => $date_out ,
                        'gender'                => $genero ,
                        'nationality'           => $nacionalidad ,
                        'shirt_size'            => $talla_camisa ,
                        'pants_size'            => $talla_pantalon ,
                        'active'                => $activo
                    ];
                    Employee::insert($toInsert);
                }); 
                
            } catch (Exception $e) {
                
                $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
                return response()->json($mensaje);
            }
        
    }
    public static function UpdateEmployee(Request $request)
    {
            try {
                DB::transaction(function () use ($request) {
                    $id_employee        = $request->input('id_employee');
                    $posicion           = $request->input('posicion');
                    $contrato           = $request->input('contrato');
                    $nombres            = $request->input('nombres');
                    $apellidos          = $request->input('apellidos');
                    $telefono           = $request->input('telefono');
                    $cedula             = $request->input('cedula');
                    $num_inss           = $request->input('num_inss');
                    $email              = $request->input('email');
                    $direccion          = $request->input('direccion');
                    $Vacaciones         = $request->input('Vacaciones');
                    $date_in            = $request->input('date_in');
                    $date_out           = $request->input('date_out');
                    $genero             = $request->input('genero');
                    $nacionalidad       = $request->input('nacionalidad');
                    $talla_camisa       = $request->input('talla_camisa');
                    $talla_pantalon     = $request->input('talla_pantalon');
                    $activo             = $request->input('activo');

                    Employee::where('id_employee',  $id_employee)->update([
                        'position_id'           => $posicion ,
                        'contract_type_id'      => $contrato ,
                        'first_name'            => $nombres ,
                        'last_name'             => $apellidos ,
                        'phone_number'          => $telefono ,
                        'cedula_number'         => $cedula ,
                        'inss_number'           => $num_inss ,
                        'email'                 => $email ,
                        'address'               => $direccion ,
                        'vacation_balance'      => $Vacaciones ,
                        'date_in'               => $date_in ,
                        'date_out'              => $date_out ,
                        'gender'                => $genero ,
                        'nationality'           => $nacionalidad ,
                        'shirt_size'            => $talla_camisa ,
                        'pants_size'            => $talla_pantalon ,
                        'active'                => $activo
                    ]);
                }); 
                
            } catch (Exception $e) {
                
                $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
                return response()->json($mensaje);
            }
        
    }
    public static function rmEmployee(Request $request)
    {
        if ($request->ajax()) {
            try {

                $Id           = $request->input('id_');
                $response =  Employee::where('id_employee',  $Id)->update([
                    "active" => 2,
                ]);
                
                return $response;
                
            } catch (Exception $e) {
                $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
                return response()->json($mensaje);
            }
        }
    }
    public static function EditEmployee($id)
    {
        return "OK->".$id;

    }

}
