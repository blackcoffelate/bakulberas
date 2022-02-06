{% extends "layouts/master.twig" %}
{% block content %}

	<section id="basic-horizontal-layouts">
		<div class="row">
			<div class="col-md-6 col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">User Form</h4>
					</div>
					<div class="card-body">
						<form class="form form-horizontal" method="post" enctype="multipart/form-data">
							<input type="hidden" name="o[id]" value="{{item.id}}"/>
							<div class="row">
								<div class="col-12">
									<div class="mb-1 row">
										<div class="col-sm-3">
											<label class="col-form-label" for="username">username</label>
										</div>
										<div class="col-sm-9">
											<input type="text" autocomplete="off" id="username" class="form-control" name="o[username]" readonly="true" value="{{item.username}}"/>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="mb-1 row">
										<div class="col-sm-3">
											<label class="col-form-label" for="realname">Realname</label>
										</div>
										<div class="col-sm-9">
											<input type="text" autocomplete="off" id="realname" class="form-control" name="o[realname]" required="true" value="{{item.realname}}"/>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="mb-1 row">
										<div class="col-sm-3">
											<label class="col-form-label" for="password">Password</label>
										</div>
										<div class="col-sm-9">
											<input type="text" autocomplete="off" id="password" class="form-control" name="o[password]" placeholder="Leave empty for no change"/>
										</div>
									</div>
								</div>
								{% if item.role_id != 4 %}

									<div class="col-12">
										<div class="mb-1 row">
											<div class="col-sm-3">
												<label class="col-form-label" for="role">Role</label>
											</div>
											<div class="col-sm-9">
												<select id="role" name="o[role_id]" class="form-select" required="true">
													<option value="">Pilih role</option>
													{% for r in roles %}
														{% if r.id == item.role_id %}
															<option value="{{r.id}}" selected>{{r.role}}</option>
														{% else %}
															<option value="{{r.id}}">{{r.role}}</option>
														{% endif %}
													{% endfor %}
												</select>
											</div>
										</div>
									</div>
								{% endif %}
								<div class="col-12">
									<div class="mb-1 row">
										<div class="col-sm-3">
											<label class="col-form-label" for="info">Info</label>
										</div>
										<div class="col-sm-9">
											<textarea id="info" class="form-control" name="o[info]" placeholder="...">{{item.info}}</textarea>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="mb-1 row">
										<div class="col-sm-3">
											{% if item.avatar %}
												<div class="avatar m-auto">
													<img src="{{base_url('media/foto/thumbs_' ~ item.avatar)}}" alt="Avatar" height="40" width="40">
												</div>
											{% else %}
												<label class="col-form-label" for="foto">Foto</label>
											{% endif %}
										</div>
										<div class="col-sm-9">
											<input class="form-control" type="file" id="foto" name="foto"/>
										</div>
									</div>
								</div>
								<div class="col-sm-9 offset-sm-3">
									<button type="submit" class="btn btn-primary me-1">Submit</button>
									<button type="reset" class="btn btn-outline-secondary">Reset</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
{% endblock %}
