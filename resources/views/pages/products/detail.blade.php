@extends('layouts.master')
@section('content')
	<section id="basic-horizontal-layouts">
		<div class="row">
			<div class="col-md-6 col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Detail Produk</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<table class="table table-striped table-condensed">
								<tbody>
									<tr>
										<td>Satuan</td>
										<td style="width:1px">:</td>
										<td>{{$product['kode']}}</td>
									</tr>
									<tr>
										<td>Nama</td>
										<td>:</td>
										<td>{{$product['nama']}}</td>
									</tr>
									<tr>
										<td>Merk</td>
										<td>:</td>
										<td>{{$product['merk']}}</td>
									</tr>
									<tr>
										<td>Varian</td>
										<td>:</td>
										<td>{{$product['varian']}}</td>
									</tr>
									<tr>
										<td>Satuan</td>
										<td>:</td>
										<td>{{$product['satuan']}}</td>
									</tr>
									<tr>
										<td>Harga Beli</td>
										<td>:</td>
										<td>{{number_format($product['beli'],0,',','.')}}</td>
									</tr>
									<tr>
										<td>Harga Jual</td>
										<td>:</td>
										<td>{{number_format($product['jual'],0,',','.')}}</td>
									</tr>
									<tr>
										<td>Min. Stock</td>
										<td>:</td>
										<td>{{number_format($product['min'],0,',','.')}} {{$product['satuan']}}</td>
									</tr>
									<tr>
										<td>Max. Stock</td>
										<td>:</td>
										<td>{{number_format($product['max'],0,',','.')}} {{$product['satuan']}}</td>
									</tr>
									<tr>
										<td>Stock Actual</td>
										<td>:</td>
										<td>{{number_format($product['stock'],0,',','.')}} {{$product['satuan']}}</td>
									</tr>
									<tr>
										<td>Created at</td>
										<td>:</td>
										<td>{{$product['created_at']}}</td>
									</tr>
									<tr>
										<td>Updated at</td>
										<td>:</td>
										<td>{{$product['updated_at']}}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
