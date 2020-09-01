<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gaji;

class GajiController extends Controller
{
    public function index(){
        return Gaji::all();
    }
    public function show($id){
        return Gaji::find($id);
    }
    public function store(Request $request){
        return Gaji::create($request->all());
    }
    public function update(Request $request, $id){
        $gaji = Gaji::findOrFail($id);
        $gaji->update($request->all());
        return $gaji;
    }
    public function delete(Request $request, $id){
        $gaji = Gaji::findOrFail($id);
        $gaji->delete();

        return 204;
    }
}
