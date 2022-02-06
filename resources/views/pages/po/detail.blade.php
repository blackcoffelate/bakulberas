@extends('layouts.master')
@section('content')
	<section id="basic-horizontal-layouts">
		<div class="row">
			<div class="col-md-6 col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Detail PO</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<table class="table table-striped table-borderless">
								<tbody>
									<tr>
										<td>Kode PO</td>
										<td>:</td>
										<td>{{$po['kode']}}</td>
									</tr>
									<tr>
										<td>Suplier</td>
										<td>:</td>
										<td>{{$po['nama']}}</td>
									</tr>
									<tr>
										<td>Tanggal</td>
										<td>:</td>
										<td>{{$po['tanggal']}}</td>
									</tr>
									<tr>
										<td>Jumlah</td>
										<td>:</td>
										<td>Rp.{{number_format($po['jumlah'],0,',','.')}}</td>
									</tr>
									<tr>
										<td>Potongan</td>
										<td>:</td>
										<td>Rp.{{number_format($po['potongan'],0,',','.')}}</td>
									</tr>
									<tr>
										<td>Total</td>
										<td>:</td>
										<td>Rp.{{number_format($po['total'],0,',','.')}}</td>
									</tr>
									<tr>
										<td>Bayar</td>
										<td>:</td>
										<td>Rp.{{number_format($po['bayar'],0,',','.')}}</td>
									</tr>
									<tr>
										<td>Status</td>
										<td>:</td>
										<td>{{$po['status']}}</td>
									</tr>
									<tr>
										<td>Created at</td>
										<td>:</td>
										<td>{{$po['created_at']}}</td>
									</tr>
									<tr>
										<td>Updated at</td>
										<td>:</td>
										<td>{{$po['updated_at']}}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Detail PO Produk</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<table class="table table-striped table-borderless">
								<thead>
									<tr>
										<th>PRODUK</th>
										<th>QTY</th>
										<th>HARGA</th>
										<th>TOTAL</th>
									</tr>
								</thead>
								<tbody>
									@foreach($poDetail as $item)
										<tr>
											<td>{{$item['nama']}}</td>
											<td>{{$item['qty']}}</td>
											<td>Rp.{{number_format($item['harga'],0,',','.')}}</td>
											<td>Rp.{{number_format($item['harga'] * $item['qty'],0,',','.')}}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection
