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
										<td>KODE PO</td>
										<td>:</td>
										<td>{{$po['kode']}}</td>
									</tr>
									<tr>
										<td>SUPLIER</td>
										<td>:</td>
										<td>{{$po['nama']}}</td>
									</tr>
									<tr>
										<td>TANGGAL</td>
										<td>:</td>
										<td>{{$po['tanggal']}}</td>
									</tr>
									<tr>
										<td>JUMLAH</td>
										<td>:</td>
										<td>Rp. {{number_format($po['jumlah'],0,',','.')}}</td>
									</tr>
									<tr>
										<td>POTONGAN</td>
										<td>:</td>
										<td>Rp. {{number_format($po['potongan'],0,',','.')}}</td>
									</tr>
									<tr>
										<td>TOTAL</td>
										<td>:</td>
										<td>Rp. {{number_format($po['total'],0,',','.')}}</td>
									</tr>
									<tr>
										<td>BAYAR</td>
										<td>:</td>
										<td>Rp. {{number_format($po['bayar'],0,',','.')}}</td>
									</tr>
									<tr>
										<td>STATUS</td>
										<td>:</td>
										<td>{{$po['status']}}</td>
									</tr>
									<tr>
										<td>CREATED</td>
										<td>:</td>
										<td>{{$po['created_at']}}</td>
									</tr>
									<tr>
										<td>UPDATED</td>
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
