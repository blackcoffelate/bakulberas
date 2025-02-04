<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
	<div class="navbar-container d-flex content">
		<div class="bookmark-wrapper d-flex align-items-center">
			<ul class="nav navbar-nav d-xl-none">
				<li class="nav-item">
					<a class="nav-link menu-toggle" href="#">
						<i class="ficon" data-feather="menu"></i>
					</a>
				</li>
			</ul>
			<ul class="nav navbar-nav">
				<li class="nav-item d-none d-lg-block">
					<a class="nav-link bookmark-star">
						<i class="ficon text-warning" data-feather="star"></i>
					</a>
					<div class="bookmark-input search-input">
						<div class="bookmark-input-icon">
							<i data-feather="search"></i>
						</div>
						<input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
						<ul class="search-list search-list-bookmark"></ul>
					</div>
				</li>
			</ul>
		</div>
		<ul class="nav navbar-nav align-items-center ms-auto">
			<li class="nav-item d-none d-lg-block">
				<a class="nav-link nav-link-style">
					<i class="ficon" data-feather="moon"></i>
				</a>
			</li>
			<li class="nav-item dropdown dropdown-cart me-25">
				<a class="nav-link" href="#" data-bs-toggle="dropdown">
					<i class="ficon" data-feather="shopping-cart"></i>
					<span class="badge rounded-pill bg-primary badge-up cart-item-count">6</span>
				</a>
				<ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
					<li class="dropdown-menu-header">
						<div class="dropdown-header d-flex">
							<h4 class="notification-title mb-0 me-auto">My Cart</h4>
							<div class="badge rounded-pill badge-light-primary">4 Items</div>
						</div>
					</li>
					<li class="scrollable-container media-list">
						<div class="list-item align-items-center">
                            <img class="d-block rounded me-1" src="{{ url('app/app-assets/images/pages/eCommerce/1.png')}}" alt="donuts" width="62">
							<div class="list-item-body flex-grow-1">
								<i class="ficon cart-item-remove" data-feather="x"></i>
								<div class="media-heading">
									<h6 class="cart-item-title">
										<a class="text-body" href="app-ecommerce-details.html">
											Apple watch 5</a>
									</h6>
									<small class="cart-item-by">By Apple</small>
								</div>
								<div class="cart-item-qty">
									<div class="input-group">
										<input class="touchspin-cart" type="number" value="1">
									</div>
								</div>
								<h5 class="cart-item-price">$374.90</h5>
							</div>
						</div>
						<div class="list-item align-items-center">
                            <img class="d-block rounded me-1" src="{{ url('app/app-assets/images/pages/eCommerce/1.png')}}" alt="donuts" width="62">
							<div class="list-item-body flex-grow-1">
								<i class="ficon cart-item-remove" data-feather="x"></i>
								<div class="media-heading">
									<h6 class="cart-item-title">
										<a class="text-body" href="app-ecommerce-details.html">
											Apple watch 5</a>
									</h6>
									<small class="cart-item-by">By Apple</small>
								</div>
								<div class="cart-item-qty">
									<div class="input-group">
										<input class="touchspin-cart" type="number" value="1">
									</div>
								</div>
								<h5 class="cart-item-price">$374.90</h5>
							</div>
						</div>
\					</li>
					<li class="dropdown-menu-footer">
						<div class="d-flex justify-content-between mb-1">
							<h6 class="fw-bolder mb-0">Total:</h6>
							<h6 class="text-primary fw-bolder mb-0">$10,999.00</h6>
						</div>
						<a class="btn btn-primary w-100" href="app-ecommerce-checkout.html">Checkout</a>
					</li>
				</ul>
			</li>
			<li class="nav-item dropdown dropdown-notification me-25">
				<a class="nav-link" href="#" data-bs-toggle="dropdown">
					<i class="ficon" data-feather="bell"></i>
					<span class="badge rounded-pill bg-danger badge-up">5</span>
				</a>
				<ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
					<li class="dropdown-menu-header">
						<div class="dropdown-header d-flex">
							<h4 class="notification-title mb-0 me-auto">Notifications</h4>
							<div class="badge rounded-pill badge-light-primary">6 New</div>
						</div>
					</li>
					<li class="scrollable-container media-list">
						<a class="d-flex" href="#">
							<div class="list-item d-flex align-items-start">
								<div class="me-1">
									<div class="avatar"><img src="{{ url('app/app-assets/images/portrait/small/avatar-s-15.jpg')}}" alt="avatar" width="32" height="32"></div>
								</div>
								<div class="list-item-body flex-grow-1">
									<p class="media-heading">
										<span class="fw-bolder">Congratulation Sam 🎉</span>winner!</p>
									<small class="notification-text">
										Won the monthly best seller badge.</small>
								</div>
							</div>
						</a>
						<a class="d-flex" href="#">
							<div class="list-item d-flex align-items-start">
								<div class="me-1">
									<div class="avatar"><img src="{{ url('app/app-assets/images/portrait/small/avatar-s-15.jpg')}}" alt="avatar" width="32" height="32"></div>
								</div>
								<div class="list-item-body flex-grow-1">
									<p class="media-heading">
										<span class="fw-bolder">Congratulation Sam 🎉</span>winner!</p>
									<small class="notification-text">
										Won the monthly best seller badge.</small>
								</div>
							</div>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item dropdown dropdown-user">
				<a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<div class="user-nav d-sm-flex d-none">
						<span class="user-name fw-bolder">John Doe</span>
						<span class="user-status">Admin</span>
					</div>
					<span class="avatar"><img class="round" src="{{ url('app/app-assets/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span>
					</span>
				</a>
				<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
					<a class="dropdown-item" href="page-profile.html">
						<i class="me-50" data-feather="user"></i>
						Profile
                    </a>
					<a class="dropdown-item" href="page-account-settings-account.html">
						<i class="me-50" data-feather="settings"></i>
						Settings</a>
					<a class="dropdown-item" href="auth-login-cover.html">
						<i class="me-50" data-feather="power"></i>
						Logout</a>
				</div>
			</li>
		</ul>
	</div>
</nav>