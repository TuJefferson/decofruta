
@extends('admin.template')

@section('title', 'Crear Paises')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('paises.index') }}">Categoria</a></li>
              <li class="breadcrumb-item active">Crear Categoria</li>
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
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Crear Paises</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('paises.store') }}">
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="pais_codigo">País</label>
                    <input type="text" class="form-control" name="pais_codigo" id="pais_codigo" placeholder="País" >
                  </div>
                  <div class="form-group">
                    <label for="active">Activo</label>
                    <input type="text" class="form-control" name="active" id="active" placeholder="Activo" >
                  </div>
                  <div class="form-group">
                    <label for="imagen_pais">Imagen</label>
                    <input type="text" class="form-control" name="imagen_pais" id="imagen_pais" placeholder="Imagen" >
                  </div>
                  <div class="form-group">
                    <label for="pais_email">Email</label>
                    <input type="text" class="form-control" name="pais_email" id="pais_email" placeholder="Email" >
                  </div>
                  <div class="form-group">
                    <label for="country_shortcode">Codigo</label>
                    <input type="text" class="form-control" name="country_shortcode" id="country_shortcode" placeholder="Codigo" >
                  </div>
                  <div class="form-group">
                    <label for="moneda_id">Moneda_id</label>
                    <input type="text" class="form-control" name="moneda_id" id="moneda_id" placeholder="Moneda" >
                  </div>
                  <div class="form-group">
                    <label for="impuesto_id">Impuesto_id</label>
                    <input type="text" class="form-control" name="impuesto_id" id="impuesto_id" placeholder="Impuesto" >
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 




@endsection