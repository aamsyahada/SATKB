<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalitaController extends Controller
{
    public function index()
    {
    	$data_balita = \App\Balita::all(); 
    	return view('balita.index',['data_balita' => $data_balita]);
    }
    public function create(Request $request)
    {
        \App\Balita::create($request->all());
        return redirect('/balita')->with('sukses','Penambahan Data Berhasil!');
    }
    public function edit($id)
    {
    	$balita = \App\Balita::find($id);
    	return view('/balita/edit',['balita' => $balita]);
    }

    public function update(Request $request,$id)
    {
    	$balita = \App\Balita::find($id);
    	$balita->update($request->all());
    	return redirect('/balita')->with('sukses','Update Data Berhasil!');
    }
}
