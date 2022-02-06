<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merk;

class MerkController extends Controller
{
  public function index()
  {
    $merk = Merk::get()->toArray();
    return view('pages.merk.index')->with([
      'merk' => $merk
    ]);
  }

  public function new()
  {
    return view('pages.merk.new');
  }

  public function insert(Request $request)
  {
    $insert = Merk::insert($request['o']);
    if ($insert) {
      return redirect()->route('merkIndex');
    }
  }

  public function detail($id)
  {
    $merk = Merk::find($id);
    return view('pages.merk.detail')->with([
      'merk' => $merk
    ]);
  }

  public function edit($id)
  {
    $merk = Merk::find($id);
    return view('pages.merk.edit')->with([
      'merk' => $merk
    ]);
  }

  public function update(Request $request, $id)
  {
    $data = $request['o'] + ['updated_at' => now()];
    $update =  Merk::where('id', $id)->update($data);
    if ($update) {
      return redirect()->route('merkIndex');
    }
  }

  public function delete($id)
  {
    $delete = Merk::where('id', $id)->delete();
    if ($delete) {
      return redirect()->back();
    }
  }
}
