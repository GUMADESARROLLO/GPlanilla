<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Exception;
use Illuminate\Http\Request;

class Catalogos extends Model {
    public $timestamps = false;
    public static function AddCatalogo(Request $request)
    {
        if ($request->ajax()) {
            try {

                $Nombre           = $request->input('Nombre_');
                $Modelo           = $request->input('Modelo_');
                $Company           = $request->input('UND_');


                if ($Modelo === 'Contrato') {
                    $datos_a_insertar[0] = [
                        'contract_type_name' => $Nombre ,
                        'active' => 1
                        
                    ];
                    $response = Contract::insert($datos_a_insertar); 
                } elseif($Modelo === 'Unidad de Negocio') {
                    $datos_a_insertar[0] = [
                        'company_name' => $Nombre ,
                        'active' => 1
                        
                    ];
                    $response = Company::insert($datos_a_insertar); 
                }elseif($Modelo === 'Departamento') {
                    $datos_a_insertar[0] = [
                        'department_name' => $Nombre ,
                        'company_id' => $Company,
                        'active' => 1
                        
                    ];
                    $response = Department::insert($datos_a_insertar); 
                }elseif($Modelo === 'Posicion') {
                    $datos_a_insertar[0] = [
                        'position_name' => $Nombre ,
                        'department_id' => $Company,
                        'active' => 1
                        
                    ];
                    $response = Position::insert($datos_a_insertar); 
                }
                

               
                return $response;
                
            } catch (Exception $e) {
                $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
                return response()->json($mensaje);
            }
        }
    }
    public static function rmCatalogo(Request $request)
    {
        if ($request->ajax()) {
            try {

                $Id           = $request->input('id_');
                $Mdl           = $request->input('mdl_');


                if ($Mdl == 1) {
                    $response =  Contract::where('id_contract_type',  $Id)->update([
                        "active" => 0,
                    ]);
    
                } elseif($Mdl == 2) {
                    $response =  Company::where('id_compy',  $Id)->update([
                        "active" => 0,
                    ]);
                }elseif($Mdl == 3) {
                    $response =  Department::where('id_department',  $Id)->update([
                        "active" => 0,
                    ]);
                    
                }elseif($Mdl == 4) {
                    $response =  Position::where('id_position',  $Id)->update([
                        "active" => 0,
                    ]);
                }
                

               
                return $response;
                
            } catch (Exception $e) {
                $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
                return response()->json($mensaje);
            }
        }
    }
    public static function UpdateCatalogo(Request $request)
    {
        if ($request->ajax()) {
            try {

                $Id           = $request->input('ID_');
                $Name           = $request->input('Nombre_');
                $Model           = $request->input('Modelo_');
                $Select           = $request->input('Select_');


                if ($Model == 1) {
                    $response =  Contract::where('id_contract_type',  $Id)->update([
                        "contract_type_name" => $Name,
                    ]);
    
                } elseif($Model == 2) {
                    $response =  Company::where('id_compy',  $Id)->update([
                        "company_name" => $Name,
                    ]);
                }elseif($Model == 3) {
                    $response =  Department::where('id_department',  $Id)->update([
                        "department_name" =>  $Name,
                        "company_id" =>  $Select,
                    ]);
                    
                }elseif($Model == 4) {
                    $response =  Position::where('id_position',  $Id)->update([
                        "position_name" =>  $Name,
                        "department_id" =>  $Select,
                    ]);
                }
               
                return $response;
                
            } catch (Exception $e) {
                $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
                return response()->json($mensaje);
            }
        }
    }
}
