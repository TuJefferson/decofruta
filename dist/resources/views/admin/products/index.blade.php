
@extends('admin.template')

@section('title', 'Productos')


<!-- dataTables -->
    <link rel="stylesheet" href="{{ asset('css/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
       
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3> 
              <a href="{{ route('products.create') }}">Crear nuevo producto</a>
            </div>
            <!-- /.card-header -->

             @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Imagen</th>
                  <th>Nombre</th>
                  <th>Categoria</th>
                  <th>Descripción</th>
                  <th>Precio Dolar</th>
                  <th>Activo</th>
                  <th>Destacado</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
                </thead>

                <tbody>
                @foreach($products as $product)
                <tr>
                  <td>{{$product->image}}</td>
                  <td>{{$product->name}}</td>
                  <td>{{$product->category->name}}</td>
                  <td>{{$product->description}}</td>
                  <td>{{$product->price_dolar}}</td>
                  @if($product->active == 1)
                  <td>Si</td>
                  @else
                  <td>No</td>
                  @endif

                  @if($product->destacado == 1)
                  <td>Si</td>
                  @else
                  <td>No</td>
                  @endif

              
                  
                  <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                  <!-- <td>
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                  </td> -->
                  <td>
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a> 
                  </td>

                  <td>
                    @csrf
                      
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                  </td>

                </form>

         
                  
                </tr>
                @endforeach
                </tbody>

                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection



