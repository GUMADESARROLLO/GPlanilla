<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Kardex;
use App\Models\Contract;
use App\Models\Position;
use App\Models\Catalogos;
use App\Models\Employee;

class EmployeeController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getHome()
    {        
        return view('Employee.Form');
    }

    public function Employee()
    {        
        $Employee = Employee::where('active',1)->get();
        return view('Employee.Home',Compact('Employee'));
    }

    public function AddEmployee()
    {
        $Contract = Contract::where('active',1)->get();  
        $Position = Position::where('active',1)->get();
        $Paises =   Catalogos::Nacionalidades();   
        return view('Employee.Form', compact('Contract','Position','Paises'));
    }

    public function SaveEmployee(Request $request)
    {
        Employee::SaveEmployee($request);
        return redirect()->route('AddEmployee')->with('message_success', 'Registro creado exitosamente :)');

    }
    public function UpdateEmployee(Request $request)
    {
        $id_employee        = $request->input('id_employee');
        Employee::UpdateEmployee($request);
        return redirect()->route('EditEmployee', ['id_employee' => $id_employee])->with('message_success', 'Registro Actualizado exitosamente :)');

    }
    
    
    public function rmEmployee(Request $request)
    {        
        $response = Employee::rmEmployee($request);
        return response()->json($response);
    }

    public function EditEmployee($id)
    {
        $Contract = Contract::where('active',1)->get();  
        $Position = Position::where('active',1)->get();
        $Paises =   Catalogos::Nacionalidades();
        $Employee = Employee::where('id_employee',$id)->first();  
    
        return view('Employee.Form', compact('Contract','Position','Paises','Employee'));

    }

    
}  