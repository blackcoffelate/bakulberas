@extends('layouts.master')
@section('content')
	<section id="basic-horizontal-layouts">
		<div class="row">
			<div class="col-md-6 col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Detail Satuan</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<table class="table table-striped table-borderless">
								<tbody>
									<tr>
										<td>Satuan</td>
										<td>:</td>
										<td>{{$satuan['satuan']}}</td>
									</tr>
									<tr>
										<td>Info</td>
										<td>:</td>
										<td>{{$satuan['info']}}</td>
									</tr>
									<tr>
										<td>Created at</td>
										<td>:</td>
										<td>{{$satuan['created_at']}}</td>
									</tr>
									<tr>
										<td>Updated at</td>
										<td>:</td>
										<td>{{$satuan['updated_at']}}</td>
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
