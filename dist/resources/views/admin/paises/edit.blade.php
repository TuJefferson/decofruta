@extends('admin.template')

@section('title', 'Editar Paises')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Paises</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('paises.index') }}">Paises</a></li>
              <li class="breadcrumb-item active">Editar producto</li>
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
              <form action="{{ route('paises.update',$pais->id) }}" method="POST">
                
                @csrf

                @method('PUT')

                <div class="card-body">

                  <div class="form-group">
                    <label for="pais_codigo">País</label>
                    <input value="{{ $pais->pais_codigo }}" type="text" class="form-control" name="pais_codigo" placeholder="País" required>
                  </div>

                  <div class="form-group">
                    <label for="active">Active</label>
                    <input value="{{ $pais->active }}" type="text" class="form-control" name="active" placeholder="Nombre" required>
                  </div>

                  <div class="form-group">
                    <label for="imagen_pais">Descripción</label>
                    <input value="{{ $pais->imagen_pais }}" type="text" class="form-control" name="imagen_pais" placeholder="Descripción" required>
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