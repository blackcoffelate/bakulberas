@extends('layouts.master')
@section('content')
<div id="app">
	<section id="basic-horizontal-layouts">
		<div class="row">
			<div class="col-md-12 col-12">
				<div class="card">
					<div class="card-header">
						<div class="head-label">
						<h6 class="mb-0">
							PENGELUARAN PEMBELIAN
						</h6>
						</div>
					</div>
					<form class="form form-horizontal" method="post" action="{{route('soInsert')}}">
						@csrf
						<div class="card-body">
							<div class="row">
								<div class="col-md-3">
									<div class="mb-1">
										<label class="col-form-label" for="kode">Kode</label>
										<input type="text" id="kode" class="form-control" v-model="kode" name="o[kode]" required="true" readonly="true" value="SO-{{$time}}"/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="mb-1">
										<label class="col-form-label" for="tanggal">Tanggal</label>
										<input type="date" autocomplete="off" id="tanggal" class="form-control" name="o[tanggal]" v-model="tanggal" required="true" placeholder="yyyy-mm-dd"/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-1">
										<label class="col-form-label" for="customer">Customer</label>
										<select id="customer" name="o[customer_id]" class="form-select" required="true">
											<option value="">Pilih customer</option>
											@foreach($customer as $i)
												<option value="{{$i->id}}">{{$i->nama}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-1">
										<label class="col-form-label" for="sales">Seller</label>
										<select id="seller" name="o[seller_id]" class="form-select" required="true">
											<option value="">Pilih seller</option>
											@foreach($sales as $i)
												<option value="{{$i->id}}">{{$i->nama}}</option>
											@endforeach
										</select>
									</div>
								</div>
								
								<div class="col-md-3">
									<div class="mb-1">
										<label class="col-form-label" for="jumlah">Jumlah</label>
										<input type="number" autocomplete="off" id="jumlah" class="form-control" name="o[jumlah]" v-model="jumlah"  required="true" placeholder="0" readonly="true"/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="mb-1">
										<label class="col-form-label" for="info">Info</label>
										<input type="text" id="info" class="form-control" name="o[info]" required="true" v-model="info" placeholder="..."/>
									</div>
								</div>
							</div>
						</div>
						<div class="card-header bg-light">
							<button type="button" data-bs-toggle="modal" data-bs-target="#modalToggle" class="btn btn-primary waves-effect">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus me-50 font-small-4">
									<line x1="12" y1="5" x2="12" y2="19"></line>
									<line x1="5" y1="12" x2="19" y2="12"></line>
								</svg>
								Tambah Item
							</button>
						</div>
						<table class="table table-bordered" id="itemTable">
							<thead>
								<tr>
									<th>PRODUK</th>
									<th class="text-end">QTY</th>
									<th class="text-end">HARGA</th>
									<th class="text-end">JUMLAH</th>
								</tr>
							</thead>
							<tbody>
								<tr v-for="(p, i) in items" :key="i">
									<td>@{{p.nama}}</td>
									<td class="text-end">@{{p.qty}}
										<input hidden type="text" :name="'items['+i+'][product_id]'" v-model="p.product_id"/>
										<input hidden type="text" :name="'items['+i+'][nama]'" v-model="p.nama"/>
										<input hidden type="text" :name="'items['+i+'][harga]'" v-model="p.harga"/>
										<input hidden type="text" :name="'items['+i+'][qty]'" v-model="p.qty"/>
										<input hidden type="text" :name="'items['+i+'][jumlah]'" v-model="p.jumlah"/>
									</td>
									<td class="text-end">Rp.@{{formatPrice(p.harga)}}</td>
									<td class="text-end">Rp.@{{formatPrice(p.jumlah)}}</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th colspan="3">TOTAL</th>
									<th id="_total" class="text-end">Rp.@{{formatPrice(totalItems)}}</th>
								</tr>
							</tfoot>
						</table>
						<div class="card-body">
							<div class="d-grid">
								<button type="submit" class="btn btn-primary waves-effect" :disabled="!total > 0">Buat Pesanan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade" id="modalToggle" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalToggleLabel">Add Item</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
					<div class="modal-body">
					<div class="mb-1">
						<label class="col-form-label">Produk</label>
						{{-- <vue-bootstrap-typeahead v-model="item.product_id" :data="products" style="width: 100%" placeholder="Cari nama product..." :serializer="s => s.nama" @hit="getProduct($event)" /> --}}
							<v-select class="style-chooser" label="nama" @input="getProduct" :options="products" v-model="product"></v-select>
						</div>
					<div class="mb-1">
						<label class="col-form-label" for="_harga">Harga</label>
						<input type="text" v-model="item.harga" class="form-control" placeholder="0" required="true" readonly/>
					</div>
					<div class="mb-1">
						<label class="col-form-label">QTY</label>
						<input type="number" id="_qty" v-model="item.qty" class="form-control" placeholder="0" required="true"/>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary" v-on:click="addItem" id="add-btn">
						Tambah Item
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('css')
<link href="https://unpkg.com/vue-bootstrap-typeahead/dist/VueBootstrapTypeahead.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/vue-select@3.0.0/dist/vue-select.css">
<style>
	.style-chooser .vs__search::placeholder,
	.style-chooser .vs__dropdown-toggle,
	.style-chooser .vs__dropdown-menu {
	background: #efefef;
	color: #6e6b7b;
	height: 40px;
	}
</style>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue-bootstrap-typeahead"></script>
<script src="https://unpkg.com/vue-select@3.0.0"></script>
<script>
Vue.component('vue-bootstrap-typeahead', VueBootstrapTypeahead)
Vue.component('v-select', VueSelect.VueSelect);
	const product = () => {
		return {
			product_id: null,
			nama: null,
			harga: null,
			qty: null,
			jumlah: null
		}
	}
  
new Vue({
  el: '#app',
  component: VueBootstrapTypeahead,
  data() {
		return {
			customer: {!!json_encode($customer)!!},
			products: {!!json_encode($products)!!},
			kode: "SO-{{$time}}",
			tanggal: null,
			customer_id: null,
			jumlah: null,
			total: null,
			info: null,
			harga: null,
			product: null,
			item: product(),
			items: []
		}
	},
	computed: {
		totalItems: function() {
			let total = 0
			this.items.forEach(i => {
				total += i.jumlah
			})
			this.jumlah = total
			return total
		}
	},
	methods: {
		formatPrice(value) {
			let val = (value / 1).toFixed(0).replace('.', ',')
			return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')
		},
		async Potongan(e) {
			this.total = this.jumlah ? this.jumlah - e.target.value : 0
		},
		async getProduct(val) {
			this.item.product_id = val.id
			this.item.nama = val.nama
			this.item.harga = val.jual;
		},
		async addItem() {
			this.item.jumlah = parseInt(this.item.qty) * this.item.harga;
			await this.items.push(this.item);
			this.total = this.jumlah - (this.potongan ? this.potongan : 0)
			this.product = null
			this.item = {...product()};
			$('#modalToggle').modal('hide')
		}
	}
})
</script>
@endsection