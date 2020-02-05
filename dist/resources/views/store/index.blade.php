
@extends('store.template')

@section('content')

	@if (app()->isLocale('es'))
    	@include('store.banner.español.banner')
		@include('store.index.español.index')
	@else
    	@include('store.banner.ingles.banner')
		@include('store.index.ingles.index')
	@endif


@endsection



