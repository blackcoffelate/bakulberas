@extends('layouts.master')
@section('content')
	<section id="basic-horizontal-layouts">
		<div class="row">
			<div class="col-md-6 col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Detail Sales</h4>
					</div>
					<img src="{{ url('media/foto/thumbs_', $sales['foto'])}}">
					<div class="card-body">
						<div class="row">
							<table class="table table-striped table-borderless">
								<tbody>
									<tr>
										<td>Kode</td>
										<td>:</td>
										<td>{{$sales['kode']}}</td>
									</tr>
									<tr>
										<td>Nama</td>
										<td>:</td>
										<td>{{$sales['nama']}}</td>
									</tr>
									<tr>
										<td>Alamat</td>
										<td>:</td>
										<td>{{$sales['alamat']}}</td>
									</tr>
									<tr>
										<td>Telepon</td>
										<td>:</td>
										<td>{{$sales['telepon']}}</td>
									</tr>
									<tr>
										<td>Info</td>
										<td>:</td>
										<td>{{$sales['info']}}</td>
									</tr>
									<tr>
										<td>Created at</td>
										<td>:</td>
										<td>{{$sales['created_at']}}</td>
									</tr>
									<tr>
										<td>Updated at</td>
										<td>:</td>
										<td>{{$sales['updated_at']}}</td>
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
