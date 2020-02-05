@extends('admin.template')

@section('title', 'Crear Producto')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Producto</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Productos</a></li>
              <li class="breadcrumb-item active">Crear producto</li>
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
                <h3 class="card-title">Nuevo Producto</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <div class="card-body">

                  <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre" required>
                  </div>

                  <div class="form-group">
                    <label for="slug">Descripción Corta</label>
                    <input type="text" class="form-control" name="slug" placeholder="Descripción Corta" required>
                  </div>

                  <div class="form-group">
                    <label for="description">Descripción</label>
                    <input type="text" class="form-control" name="description" placeholder="Descripción" required>
                  </div>

                  <div class="form-group">
                    <label for="extract">Ingredientes</label>
                    <input type="text" class="form-control" name="extract" placeholder="Ingredientes" required>
                  </div>

                  <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="text" class="form-control" name="price" placeholder="Precio Dolar" required>
                  </div>

                  <div class="form-group">
                    <label for="price_dolar">Precio Dolar</label>
                    <input type="text" class="form-control" name="price_dolar" placeholder="Precio Dolar" required>
                  </div>

                  <div class="form-group">
                    <label for="image">Imagen</label>
                    <input type="text" class="form-control" name="image" placeholder="Imagen" required>
                  </div>

                  <div class="form-group">
                    <label for="image_2">image_2</label>
                    <input type="text" class="form-control" name="image_2" placeholder="Imagen" required>
                  </div>

                  <div class="form-group">
                    <label for="orden">Orden</label>
                    <input type="text" class="form-control" name="orden" placeholder="Orden" required>
                  </div>

                  <div class="form-group">
                    <label for="tamano">Tamaño</label>
                    <input type="text" class="form-control" name="tamano" placeholder="Tamaño" required>
                  </div>

                  <div class="form-group">
                    <label for="pais_id">pais_id</label>
                    <input type="text" class="form-control" name="pais_id" placeholder="Pais_id" required>
                  </div>

                  <div class="form-group">
                    <label for="moneda_id">moneda_id</label>
                    <input type="text" class="form-control" name="moneda_id" placeholder="moneda_id" required>
                  </div>

                  <div class="form-group">
                    <label for="active">Activo</label>
                    <input type="text" class="form-control" name="active" placeholder="Activo" required>
                  </div>

                  <div class="form-group">
                    <label for="destacado">Destacado</label>
                    <input type="text" class="form-control" name="destacado" placeholder="Destacado" required>
                  </div>

                  <div class="form-group">
                    <label for="estatus_es">Estatus (Nuevo, Promoción...)</label>
                    <input type="text" class="form-control" name="estatus_es" placeholder="Estatus (Nuevo, Promoción...)" required>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Crear</button>
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