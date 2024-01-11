<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CargosController extends Controller
{
    public function index(Request $request){

        
        $search = $request->get('search');
        if($search){
            $cargos = DB::table('cargos')
            ->select ('cargos.*')
            ->where ('nome', 'like', '%'.$search.'%')
            ->get();
        } else{
            $cargos = Cargo::all();
        }
       
        return view('cargos', [
            'cargos' => $cargos,
            'search' => $search,
        ]);
       
    }
    
}
