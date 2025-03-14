<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GebruikersController extends Controller
{
    public function index(){
        $data = DB::table('gebruikers')
                ->select('naam', 'woonplaats')  
                ->where('woonplaats', 'like',  'b%')  
                ->orderBy('woonplaats', 'asc')
                ->orderBy('naam', 'asc')
                ->get();
        // dd($data);
        return view('gebruikers.index',['data'=>$data]);
    }
    public function create(){
        return view('gebruikers.create');
    }
    public function store(Request $request){
        DB::table('gebruikers')->insert([
            'nummer' => $request->nummer,
            'naam' => $request->naam,
            'woonplaats' => $request->woonplaats
        ]);
        return redirect('/gebruikers');
    }
    public function show($id){
    }
    public function edit($id){
    }
    public function update(Request $request, $id){
    }
    public function destroy($id){
    }
}
