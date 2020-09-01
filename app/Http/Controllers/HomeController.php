<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $gaji = DB::table('gaji')->get();
        return view('home',['gaji' => $gaji]);
    }
    public function create() {
    // memanggil view create
        return view('create');
    }
    public function store(Request $request){
        //validasi form
        $this->validate($request,[
            'gaji' => 'required',
            'tahun' => 'required'
        ]);
        //insert data ke table gaji
        DB::table('gaji')->insert([
            'gaji'=>$request->gaji,
            'tahun'=>$request->tahun
        ]);
        return redirect('home')->with('status', 'Data gaji berhasil ditambahkan');
    }
}
