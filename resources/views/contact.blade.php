@extends('layouts.main')

@section('content')

	<!-- Breadcrumbs -->
    @include('includes.breadCrumbs')
		<!-- End Breadcrumbs -->

    <!-- Start Contact Us -->
    @include('includes.contactUs')

	<!--/ End Contact Us -->
    @section('footerJsMap')
        @include('includes.footerJsMap')
    @endsection
@endsection