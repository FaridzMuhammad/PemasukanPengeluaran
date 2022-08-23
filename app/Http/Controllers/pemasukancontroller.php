<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;

class pemasukancontroller extends Controller
{


    public function donutchart()
    {
        $pemasukan = Pemasukan::all();
        $pengeluaran = Pengeluaran::all();
        return view('main')->with([
            'pemasukan' => $pemasukan,
            'pengeluaran' => $pengeluaran
        ]);
    }

    public function index()
    {
        $pemasukan = Pemasukan::all();
        return view('tablePemasukan', ['pemasukan' => $pemasukan]);
    }

    public function create()
    {
        
        return view('pemasukan');
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        Pemasukan::insert($data);
        
        return redirect('/');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
