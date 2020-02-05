
@extends('admin.template')

@section('title', 'Monedas')

@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Monedas</h1>
            <a href="{{route('monedas.create')}}">crear</a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Listado</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Codigo</th>
                    <th>Simbolo</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($monedas as $moneda)
                  <tr>
                    <td>{{$moneda->name}}</td>
                    <td>{{$moneda->codigo}}</td>
                    <td>{{$moneda->simbolo}}</td>
          
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                       <!--  <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a> -->
                        <form method="POST" action="{{ route('monedas.destroy' , $moneda->id) }}">
                        @csrf
                          <!-- <button type="submit" class="redondo btn btn-danger">  
                            <i class="fas fa-trash"></i>
                          </button> -->
<!--                           <a class="btn btn-info" href="{{ route('monedas.show',$moneda->id) }}">Show</a>
 -->
                          <a class="btn btn-primary" href="{{ route('monedas.edit',$moneda->id) }}">Edit</a>

                          @method('DELETE')
                          
                          <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                          
                        </form>

                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
  
@include('sweetalert::alert')

@endsection



