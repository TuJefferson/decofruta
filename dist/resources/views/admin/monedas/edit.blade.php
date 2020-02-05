@extends('admin.template')

@section('title', 'Editar Monedas')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Monedas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('monedas.index') }}">Monedas</a></li>
              <li class="breadcrumb-item active">Editar Paises</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

    @endif

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar Producto</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('monedas.update',$moneda->id) }}" method="POST">
                
                @csrf

                @method('PUT')

                <div class="card-body">

                  <div class="form-group">
                    <label for="name">Nombre</label>
                    <input value="{{ $moneda->name }}" type="text" class="form-control" name="name" placeholder="Nombre" required>
                  </div>

                  <div class="form-group">
                    <label for="codigo">Codigo</label>
                    <input value="{{ $moneda->codigo }}" type="text" class="form-control" name="codigo" placeholder="Codigo" required>
                  </div>

                  <div class="form-group">
                    <label for="simbolo">Simbolo</label>
                    <input value="{{ $moneda->simbolo }}" type="text" class="form-control" name="simbolo" placeholder="Simbolo" required>
                  </div>
    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>

              </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
@endsection