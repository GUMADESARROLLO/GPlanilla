<?php
namespace App\Http\Controllers;

use App\Models\Articulos;
use Illuminate\Http\Request;


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