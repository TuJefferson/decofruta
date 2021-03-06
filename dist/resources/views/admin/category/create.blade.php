
@extends('admin.template')

@section('title', 'Crear categorias')

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
              <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Categoria</a></li>
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
                <h3 class="card-title">Crear Categoria</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('category.store') }}">
              	@csrf
                <div class="card-body">

                  <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre Ingles" >
                  </div>

                  <div class="form-group">
                    <label for="name">Nombre Ingles</label>
                    <input type="text" class="form-control" name="nombre_ingles" id="nombre_ingles" placeholder="Nombre Ingles" >
                  </div>

                  <div class="form-group">
                    <label for="slug">Descripción </label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción" >
                  </div>

                  <div class="form-group">
                    <label for="slug">Descripción Ingles</label>
                    <input type="text" class="form-control" name="descripcion_ingles" id="descripcion_ingles" placeholder="Descripción Ingles" >
                  </div>
                  
                  <div class="form-group">
                    <label for="active">Activa</label>
                    <input type="text" class="form-control" name="active" id="active" placeholder="Descripción" >
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