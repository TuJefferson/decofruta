@extends('store.template')


@section('content')

  @if (app()->isLocale('es'))
    @include('store.show.español.show')
  @else
    @include('store.show.ingles.show')
  @endif



@endsection
