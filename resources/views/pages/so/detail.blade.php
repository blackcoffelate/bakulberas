{% extends "layouts/master.twig" %}
{% block content %}

	<section id="basic-horizontal-layouts">
		<div class="row">
			<div class="col-md-6 col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Detail SO</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<table class="table table-striped table-borderless">
								<tbody>
									<tr>
										<td>Kode PO</td>
										<td>:</td>
										<td>{{item.kode}}</td>
									</tr>
									<tr>
										<td>Suplier</td>
										<td>:</td>
										<td>{{item.nama}}</td>
									</tr>
									<tr>
										<td>Tanggal</td>
										<td>:</td>
										<td>{{item.tanggal}}</td>
									</tr>
									<tr>
										<td>Jumlah</td>
										<td>:</td>
										<td>{{item.jumlah}}</td>
									</tr>
									<tr>
										<td>Potongan</td>
										<td>:</td>
										<td>{{item.potongan}}</td>
									</tr>
									<tr>
										<td>Total</td>
										<td>:</td>
										<td>{{item.total}}</td>
									</tr>
									<tr>
										<td>Bayar</td>
										<td>:</td>
										<td>{{item.bayar}}</td>
									</tr>
									<tr>
										<td>Status</td>
										<td>:</td>
										<td>{{item.status}}</td>
									</tr>
									<tr>
										<td>Status</td>
										<td>:</td>
										<td>{{item.status}}</td>
									</tr>
									<tr>
										<td>Created at</td>
										<td>:</td>
										<td>{{item.created_at}}</td>
									</tr>
									<tr>
										<td>Updated at</td>
										<td>:</td>
										<td>{{item.updated_at}}</td>
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
						<h4 class="card-title">Detail Produk</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<table class="table table-striped table-borderless">
								<thead>
									<tr>
										<th>PRODUK</th>
										<th>QTY</th>
										<th>HARGA</th>
									</tr>
								</thead>
								<tbody>
									{% for item in detail %}
										<tr>
											<td>{{item.nama}}</td>
											<td>{{item.qty}}</td>
											<td>{{item.harga}}</td>
										</tr>
									{% endfor %}
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
{% endblock %}
