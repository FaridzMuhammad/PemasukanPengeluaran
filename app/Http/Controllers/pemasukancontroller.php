<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;

class pemasukancontroller extends Controller
{


    public function index()
    {
        $Pemasukan = Pemasukan::all();

        return view('index',  ['Pemasukan' => $Pemasukan]);
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
