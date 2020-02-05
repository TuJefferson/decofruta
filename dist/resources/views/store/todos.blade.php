@extends('store.template')
 
@section('content')

  @if (app()->isLocale('es'))
    @include('store.todos.español.todos')
  @else
    @include('store.todos.ingles.todos')
  @endif

@endsection

