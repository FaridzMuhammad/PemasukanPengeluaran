<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran;

class pengeluarancontroller extends Controller
{


    public function index()
    {
        $Pengeluaran = Pengeluaran::all();

        return view('tablePengeluaran',  ['Pengeluaran' => $Pengeluaran]);
    }

    public function create()
    {
        return view('pengeluaran');
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        Pengeluaran::insert($data);
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
