<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requests;
use App\Models\PayrollType;
use App\Models\Company;
use App\Models\InssPatronal;
use App\Models\Inatec;

use App\Models\Employee;
use App\Models\RequestsVacation;
use Jenssegers\Date\Date;

use Illuminate\Support\Facades\Auth;

class PlayrollsController extends Controller {
    public function __construct()
    {
        Date::setLocale('es');
        $this->middleware('auth');
    }
    public function getPlayrolls()
    {        
       
        
        $Company = Company::where('active',1)->get();  
        $PayRollType = PayrollType::where('active',1)->get();    

        $RequestsVacation = RequestsVacation::where('active',1)->get();

        $Inactec = Inatec::where('active',1)->first();  
        $InssParonal = InssPatronal::where('active',1)->first();  
        
        
        return view('Payroll.Home',compact('Company','PayRollType','Inactec','InssParonal','RequestsVacation'));
    }
}  