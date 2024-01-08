<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requests;
use App\Models\Roles;
use App\Models\RequestStatus;
use App\Models\RequestsType;
use App\Models\Employee;
use App\Models\RequestsVacation;



class RequestsController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getRequests()
    {        
        $Employee = Employee::where('active',1)->get();
        $RequestTypes = RequestsType::where('active',1)->get();  
        $RequestStatus = RequestStatus::where('active',1)->get();        
        $RequestsVacation = RequestsVacation::where('active',1)->get();
        return view('Request.Home',compact('RequestTypes','RequestStatus','Employee','RequestsVacation'));
    }
    public function SaveTypeRequest(Request $request)
    {        
        $response = RequestsVacation::SaveTypeRequest($request);
        return response()->json($response);
    }
    public function rmRequests(Request $request)
    {        
        $response = RequestsVacation::rmRequests($request);
        return response()->json($response);
    }
    public function UpdateRequest(Request $request)
    {        
        $response = RequestsVacation::UpdateRequest($request);
        return response()->json($response);
    }
    public function SaveRequest(Request $request)
    {        
        $response = RequestsVacation::SaveRequest($request);
        return response()->json($response);
    }
    
    
}  