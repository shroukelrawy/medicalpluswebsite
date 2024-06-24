<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="{{ route('home') }}"><img src="{{asset('assets/img/logo.png')}}" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">{{__('messages.home')}} <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="{{ route('home') }}">{{__('messages.home_page1')}}</a></li>
												</ul>
											</li>
											<li><a class="{{ request()->is('doctors') ? 'active' : '' }}" href="{{ route('doctors') }}">{{__('messages.doctors')}} </a></li>
											<li><a class="{{ request()->is('services') ? 'active' : '' }}" href="{{ route('services') }}">{{__('messages.services')}}  </a></li>
											<li><a class="{{ request()->is('error404') ? 'active' : '' }}" href="{{ route('error404') }}">{{__('messages.pages')}} <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="{{ route('error404') }}">{{__('messages.404_error')}}</a></li>
												</ul>
											</li>
											<li><a class="{{ request()->is('blog') ? 'active' : '' }}" href="{{ route('blog') }}">{{__('messages.Blogs')}}<i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="{{ route('blog') }}">{{__('messages.Blogs_details')}} </a></li>
												</ul>
											</li>
											<li><a class="{{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">{{__('messages.contact_us')}}</a></li>
										</ul>
										
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="appointment.html" class="btn">{{__('messages.book_appointment')}}</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>