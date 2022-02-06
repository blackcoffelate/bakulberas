<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Varian;

class VarianController extends Controller
{

    public function index()
    {
        $varian = Varian::all()->toArray();
        return view('pages.varian.index')->with([
            'varian' => $varian
        ]);
    }

    public function new()
    {
        return view('pages.varian.new');
    }

    public function insert(Request $request)
    {
        $insert = Varian::insert($request['o']);
        if ($insert) {
            return redirect()->route('varianIndex');
        }
    }

    public function detail($id)
    {
        $varian = Varian::find($id);
        return view('pages.varian.detail')->with([
            'varian' => $varian
        ]);
    }

    public function edit($id)
    {
        $varian = Varian::find($id);
        return view('pages.varian.edit')->with([
            'varian' => $varian
        ]);
    }

    public function update(Request $request, $id)
    {
        $params = $request['o'] + ['updated_at' => now()];
        $update = Varian::where('id', $id)->update($params);
        if ($update) {
            return redirect()->route('varianIndex');
        }
    }

    public function delete($id)
    {
        $delete =  Varian::where('id', $id)->delete();
        if ($delete) {
            return redirect()->route('varianIndex');
        }
    }
}
