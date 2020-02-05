@extends('store.template')

@section('content')


	@if (app()->isLocale('es'))
		@include('store.contacto.español.contacto')
	@else
    	@include('store.contacto.ingles.contacto')
	@endif


@endsection

