<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Po;
use App\PoDetail;
use App\Ro;
use App\RoDetail;

class RoController extends Controller
{
  public function index()
  {
    $this->data['time'] = time();
    $this->data['po'] = Po::join('supliers', 'supliers.id', '=', 'po.suplier_id')
      ->select(
        'po.id',
        'po.kode',
        'po.tanggal',
        'supliers.nama',
        'po.jumlah',
        'po.status'
      )->get();
    $this->data['ro'] = Ro::join('po', 'po.id', '=', 'ro.po_id')
      ->join('supliers', 'supliers.id', '=', 'po.suplier_id')
      ->select(
        'ro.id',
        'ro.kode',
        'supliers.nama as nama_suplier',
        'ro.tanggal',
        'ro.jumlah',
      )->get()->toArray();
    return view('pages.ro.index')->with($this->data);
  }

  public function insert(Request $request)
  {
    // return $request['items'];
    if ($ro = Ro::create($request['o'])) {
      foreach ($request['items'] as $i) {
        $payload = [
          'ro_id' => $ro->id,
          'product_id' => $i['product_id'],
          'qty' => $i['qty'],
          'harga' => $i['harga']
        ];
        RoDetail::create($payload);
      }
      return redirect()->route('roIndex');
    }
  }

  public function getPoDetail($id)
  {
    $this->data['poDetail'] = PoDetail::join('products', 'products.id', '=', 'po_detail.product_id')
      ->join('po', 'po.id', '=', 'po_detail.po_id')
      ->select(
        'po.id',
        'po.kode',
        'products.id as product_id',
        'products.nama',
        'po_detail.qty',
        'po_detail.harga',
      )->where('po.id', $id)->get();
    return response()->json($this->data['poDetail']);
  }
}
