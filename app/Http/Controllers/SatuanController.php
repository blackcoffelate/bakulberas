<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Satuan;

class SatuanController extends Controller
{
  public function index()
  {
    $satuan = Satuan::get()->toArray();
    return view('pages.satuan.index')->with([
      'satuan' => $satuan
    ]);
  }

  public function new()
  {
    return view('pages.satuan.new');
  }

  public function insert(Request $request)
  {
    $insert = Satuan::insert($request['o']);
    if ($insert) {
      return redirect()->route('satuanIndex');
    }
  }

  public function detail($id)
  {
    $satuan = Satuan::find($id);
    return view('pages.satuan.detail')->with([
      'satuan' => $satuan
    ]);
  }

  public function edit($id)
  {
    $satuan = Satuan::find($id);
    return view('pages.satuan.edit')->with([
      'satuan' => $satuan
    ]);
  }

  public function update(Request $request, $id)
  {
    $data = $request['o'] + ['updated_at' => now()];
    $update =  Satuan::where('id', $id)->update($data);
    if ($update) {
      return redirect()->route('satuanIndex');
    }
  }

  public function delete($id)
  {
    $delete = Satuan::where('id', $id)->delete();
    if ($delete) {
      return redirect()->route('satuanIndex');
    }
  }
}
