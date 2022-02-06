{% extends "layouts/master.twig" %}
{% block content %}

	<section id="basic-horizontal-layouts">
		<div class="row">
			<div class="col-md-12 col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Pesanan Pembelian Form</h4>
					</div>
					<div class="card-body">
						<form class="form form-horizontal" method="post">
							<div class="row">
								<div class="col-md-2">
									<div class="mb-1">
										<label class="col-form-label" for="kode">Kode</label>
										<input type="text" autocomplete="off" id="kode" class="form-control" name="o[kode]" required="true" readonly="true" value="RO-{{time}}"/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="mb-1">
										<label class="col-form-label" for="tanggal">Tanggal</label>
										<input type="text" autocomplete="off" id="tanggal" class="form-control" name="o[tanggal]" required="true" placeholder="yyyy-mm-dd"/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="mb-1">
										<label class="col-form-label" for="suplier">Suplier</label>
										<select id="suplier" name="o[suplier_id]" class="form-select" required="true">
											<option value="">Pilih suplier</option>
											{% for m in suplier %}
												<option value="{{m.id}}">{{m.nama}}</option>
											{% endfor %}
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="mb-1">
										<label class="col-form-label" for="jumlah">Jumlah</label>
										<input type="number" autocomplete="off" id="jumlah" class="form-control" name="o[jumlah]" required="true" placeholder="0" readonly="true"/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="mb-1">
										<label class="col-form-label" for="ongkir">Potongan/Biaya</label>
										<input type="number" autocomplete="off" id="diskon" class="form-control" name="o[diskon]" required="true" placeholder="0"/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="mb-1">
										<label class="col-form-label" for="ongkir">Total</label>
										<input type="number" autocomplete="off" id="total" class="form-control" name="o[total]" readonly required="true" placeholder="0"/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-1">
										<label class="col-form-label" for="info">Info</label>
										<input type="text" id="info" class="form-control" name="o[info]" placeholder="..."/>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="card-header bg-light">
						<button data-bs-toggle="modal" data-bs-target="#modalToggle" class="btn btn-primary waves-effect">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus me-50 font-small-4">
								<line x1="12" y1="5" x2="12" y2="19"></line>
								<line x1="5" y1="12" x2="19" y2="12"></line>
							</svg>
							Tambah Item
						</button>
					</div>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>PRODUK</th>
								<th>QTY</th>
								<th>HARGA</th>
								<th>JUMLAH</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th colspan="4">TOTAL</th>
								<th>JUMLAH</th>
							</tr>
						</tfoot>
					</table>
					<div class="card-body">
						<div class="d-grid">
							<button type="submit" class="btn btn-primary waves-effect">Buat Pesanan</button>
						</div>

					</div>
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
{% endblock %}
