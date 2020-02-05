

@extends('guatemala.tienda.template')

@section('content')


 

	@if (app()->isLocale('es'))
		@include('guatemala.index.español.indexguatemala')
	@else
		@include('guatemala.index.ingles.indexguatemala')
	@endif


	

@endsection


