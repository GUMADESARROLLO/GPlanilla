<?php
namespace App\Http\Controllers;

use App\Models\Articulos;
use Illuminate\Http\Request;
use App\Models\Kardex;
use App\Models\Clasificacion;

class DashboardController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getDashboard()
    {        
        return view('Dashboard.Home');
    }
    
}  