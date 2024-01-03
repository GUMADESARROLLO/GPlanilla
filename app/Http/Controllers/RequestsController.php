<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestsController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getRequests()
    {        
        return view('Request.Home');
    }
    
}  