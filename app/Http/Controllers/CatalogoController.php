<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogoController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getCatalogos()
    {        
        return view('Catalogos.Home');
    }
    
}  