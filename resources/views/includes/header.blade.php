<!-- Topbar -->
<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							<ul class="top-link">
							<li><a href="#">{{__('messages.about')}}</a></li>
								<li><a href="#">{{__('messages.doctors')}}</a></li>
								<li><a href="#">{{__('messages.contact')}}</a></li>
								<li><a href="#">{{__('messages.FAQ')}}</a></li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i>+880 1234 56789</li>
								<li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">support@yourmail.com</a></li>
							</ul>
							<!-- End Top Contact -->
							</div>
						<li class="language-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-globe"></i> {{__('messages.language')}} <i class="icofont-rounded-down"></i>
                         </a>
                       <ul class="dropdown-menu">
                             <li><a href="{{ LaravelLocalization::getLocalizedURL('en') }}"><i class="flag-icon flag-icon-gb"></i> {{__('messages.english')}}</a></li>
                            <li><a href="{{ LaravelLocalization::getLocalizedURL('ar') }}"><i class="flag-icon flag-icon-sa"></i> {{__('messages.arabic')}}</a></li>
                        </ul>
                      </li>
					
						
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			@include('includes.headerInner')
			<!--/ End Header Inner -->