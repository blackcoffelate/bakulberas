{% extends "layouts/master.twig" %}
{% block content %}

	<section id="basic-horizontal-layouts">
		<div class="row">
			<div class="col-md-6 col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Detail Merk</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<table class="table table-striped table-borderless">
								<tbody>
									<tr>
										<td>Merk</td>
										<td>:</td>
										<td>{{item.merk}}</td>
									</tr>
									<tr>
										<td>Info</td>
										<td>:</td>
										<td>{{item.info}}</td>
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
		</div>
	</section>
{% endblock %}
