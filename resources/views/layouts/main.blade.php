<!doctype html>
<html class="no-js" lang="zxx">
    <head>
       
		
		@include('includes.head')
		
    </head>
    <body>
	
		<!-- Preloader -->
        @include('includes.preloader')
        <!-- End Preloader -->
		
		<!-- Get Pro Button -->
		@include('includes.proButton')
	
		<!-- Header Area -->
		<header class="header" >
        @include('includes.header')
		</header>
		<!-- End Header Area -->
		
		@yield('content')	
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
		@include('includes.footer')
		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
    @include('includes.footerJs')
	
	@yield('footerJsMap')

    </body>
</html>