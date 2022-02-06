@extends('layouts.master')
@section('content')
	<section id="basic-horizontal-layouts">
		<div class="row" id="app">
			<div class="col-md-12 col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Penerimaan Pembelian</h4>
					</div>
					<div class="card-body">
						<form class="form form-horizontal" method="post" action="{{ route('roInsert')}}">
							@csrf
							<div class="row">
								<div class="col-md-2">
									<div class="mb-1">
										<label class="col-form-label" for="kode">Kode</label>
										<input type="text" autocomplete="off" id="kode" class="form-control" name="o[kode]" required="true" readonly="true" value="RO-{{$time}}"/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="mb-1">
										<label class="col-form-label" for="po">Pemesanan</label>
										<select id="po" class="form-select" required="true" v-model="po" @change="getPo">
											<option value="" disabled>Pilih pemesanan</option>
											@foreach($po as $p)
												<option value="{{$p}}">{{$p->nama}}</option>
											@endforeach
										</select>
										<input type="text" hidden name="o[po_id]" v-model="po_id" />
									</div>
								</div>
								<div class="col-md-3">
									<div class="mb-1">
										<label class="col-form-label" for="tanggal">Tanggal</label>
										<input type="date" autocomplete="off" id="tanggal" class="form-control" name="o[tanggal]" required="true" placeholder="yyyy-mm-dd"/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="mb-1">
										<label class="col-form-label" for="jumlah">Jumlah</label>
										<input type="number" autocomplete="off" id="jumlah" class="form-control" name="o[jumlah]" v-model="po_jumlah" required="true" placeholder="0" readonly="true"/>
									</div>
								</div>
							</div>
							<table class="ro table table-bordered" id="itemTable">
								<thead>
									<tr>
										<th>KODE</th>
										<th>PRODUK</th>
										<th>QTY</th>
										<th>HARGA</th>
										<th>JUMLAH</th>
									</tr>
								</thead>
								<tbody>
									<tr v-for="(item, i) in items">
										<td>
											<input type="text" hidden :name="'items['+i+'][id]'" v-model="item.id"/>
											<input type="text" hidden :name="'items['+i+'][product_id]'" v-model="item.product_id"/>
											<input type="text" class="form-control" :name="'items['+i+'][kode]'" v-model="item.kode" readonly="true"/>
										</td>
										<td>
											<input type="text" class="form-control" :name="'items['+i+'][nama]'" v-model="item.nama" readonly="true"/>
										</td>
										<td>
											<input type="number" class="form-control" :name="'items['+i+'][qty]'" v-model="item.qty" required="true" placeholder="0"/>
										</td>
										<td>
											<input type="number" class="form-control" :name="'items['+i+'][harga]'" v-model="item.harga" required="true" placeholder="0" readonly="true"/>
										</td>
										<td>
											Rp.@{{formatPrice(item.qty * item.harga)}}
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th colspan="4">TOTAL</th>
										<th id="_total" class="text-end">Rp.@{{formatPrice(po_jumlah)}}</th>
									</tr>
								</tfoot>
							</table>
							<div class="card-body">
								<div class="d-grid">
									<button type="submit" class="btn btn-primary waves-effect">Terima Pesanan</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<table class="datatables-a table table-bordered" data-label="RO LIST">
						<thead>
							<tr>
								<th>Kode</th>
								<th>Nama Suplier</th>
								<th>tanggal</th>
								<th>Jumlah</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($ro as $list)
								<tr>
									<td class="text-center">{{$list['kode']}}</td>
									<td>{{$list['nama_suplier']}}</td>
									<td>{{$list['tanggal']}}</td>
									<td>Rp.{{number_format($list['jumlah'],0,',','.')}}</td>
									<td class="text-center">
										<div class="d-inline-flex">
											<a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-small-4">
													<circle cx="12" cy="12" r="1"></circle>
													<circle cx="12" cy="5" r="1"></circle>
													<circle cx="12" cy="19" r="1"></circle>
												</svg>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="{{ route('productDetail', $list['id'])}}" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text me-50 font-small-4">
														<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
														<polyline points="14 2 14 8 20 8"></polyline>
														<line x1="16" y1="13" x2="8" y2="13"></line>
														<line x1="16" y1="17" x2="8" y2="17"></line>
														<polyline points="10 9 9 9 8 9"></polyline>
													</svg>Details</a>

												<a href="{{ route('productDelete', $list['id'])}}" class="dropdown-item delete-record">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 me-50 font-small-4">
														<polyline points="3 6 5 6 21 6"></polyline>
														<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
														<line x1="10" y1="11" x2="10" y2="17"></line>
														<line x1="14" y1="11" x2="14" y2="17"></line>
													</svg>Delete</a>
											</div>
										</div>
										<a href="{{route('productEdit', $list['id'])}}" class="item-edit">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-small-4">
												<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
												<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
											</svg>
										</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade" id="modalToggle" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalToggleLabel">Modal 1</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">Show a second modal and hide this one with the button below.</div>
				<div class="modal-footer">
					<button class="btn btn-primary" data-bs-target="#modalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">
						Open second modal
					</button>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ url('app/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ url('app/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ url('app/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ url('app/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
<link href="https://unpkg.com/vue-bootstrap-typeahead/dist/VueBootstrapTypeahead.css" rel="stylesheet">
@endsection
@section('js')
<script src="{{ url('app/app-assets/vendors/js/jquery/jquery.min.js')}}"></script>
<script src="{{ url('app/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('app/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{ url('app/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{ url('app/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js')}}"></script>
<script src="{{ url('app/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{ url('app/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{ url('app/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')}}"></script>
<script src="{{ url('app/app-assets/js/scripts/tables/table-datatables-basic.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
$('.datatables-a').DataTable({
	"searching":true,
	"paging":   true,
	"ordering": true,
	"info": true
})
$('.ro').DataTable({
	"searching":false,
	"paging":   false,
	"ordering": false,
	"info":false
})


	new Vue({
		el: '#app',
		data() {
			return {
				po: null,
				po_id: null,
				items: []
			}
		},
		computed: {
			po_jumlah() {
				let total = 0;
				this.items.forEach(item => {
					total += item.harga * item.qty;
				});
				return total > 0 ? total : 0;
			}
		},
		methods: {
			async getPo() {
				const data = await JSON.parse(this.po);
				this.po_id = data.id;
				const res = await axios.post("{{route('apiPoDetail', ['id' => ':id'])}}".replace(':id', data.id));
				this.items = res.status === 200 ? res.data : [];
			},
			formatPrice(value) {
				return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
			}
		}
	})
</script>
@endsection
