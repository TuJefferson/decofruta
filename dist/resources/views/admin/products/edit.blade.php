@extends('admin.template')

@section('title', 'Editar Producto')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Producto</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Productos</a></li>
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
              <form action="{{ route('products.update',$product->id) }}" method="POST">
                
                @csrf

                @method('PUT')

                <div class="card-body">

                  <div class="form-group">
                    <label for="name">Nombre</label>
                    <input value="{{ $product->name }}" type="text" class="form-control" name="name" placeholder="Nombre" required>
                  </div>

                  <div class="form-group">
                    <label for="slug">Descripción Corta</label>
                    <input value="{{ $product->slug }}" type="text" class="form-control" name="slug" placeholder="Descripción Corta" required>
                  </div>

                  <div class="form-group">
                    <label for="description">Descripción</label>
                    <input value="{{ $product->description }}" type="text" class="form-control" name="description" placeholder="Descripción" required>
                  </div>

                  <div class="form-group">
                    <label for="extract">Ingredientes</label>
                    <input value="{{ $product->extract }}" type="text" class="form-control" name="extract" placeholder="Ingredientes" required>
                  </div>

                  <div class="form-group">
                    <label for="price">Precio</label>
                    <input value="{{ $product->price }}" type="text" class="form-control" name="price" placeholder="Precio Dolar" required>
                  </div>

                  <div class="form-group">
                    <label for="price_dolar">Precio Dolar</label>
                    <input value="{{ $product->price_dolar }}" type="text" class="form-control" name="price_dolar" placeholder="Precio Dolar" required>
                  </div>

                  <div class="form-group">
                    <label for="image">Imagen</label>
                    <input value="{{ $product->image }}" type="text" class="form-control" name="image" placeholder="Imagen" required>
                  </div>

                  <div class="form-group">
                    <label for="image_2">image_2</label>
                    <input value="{{ $product->image_2 }}" type="text" class="form-control" name="image_2" placeholder="Imagen" required>
                  </div>

                  <div class="form-group">
                    <label for="orden">Orden</label>
                    <input value="{{ $product->orden }}" type="text" class="form-control" name="orden" placeholder="Orden" required>
                  </div>

                  <div class="form-group">
                    <label for="tamano">Tamaño</label>
                    <input value="{{ $product->tamano }}" type="text" class="form-control" name="tamano" placeholder="Tamaño" required>
                  </div>

                  <div class="form-group">
                    <label for="pais_id">pais_id</label>
                    <input value="{{ $product->pais_id }}" type="text" class="form-control" name="pais_id" placeholder="Pais_id" required>
                  </div>

                  <div class="form-group">
                    <label for="moneda_id">moneda_id</label>
                    <input value="{{ $product->moneda_id }}" type="text" class="form-control" name="moneda_id" placeholder="moneda_id" required>
                  </div>

                  <div class="form-group">
                    <label for="active">Activo</label>
                    <input value="{{ $product->active }}" type="text" class="form-control" name="active" placeholder="Activo" required>
                  </div>

                  <div class="form-group">
                    <label for="destacado">Destacado</label>
                    <input value="{{ $product->destacado }}" type="text" class="form-control" name="destacado" placeholder="Destacado" required>
                  </div>

                  <div class="form-group">
                    <label for="estatus_es">Estatus (Nuevo, Promoción...)</label>
                    <input value="{{ $product->estatus_es }}" type="text" class="form-control" name="estatus_es" placeholder="Estatus (Nuevo, Promoción...)" required>
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