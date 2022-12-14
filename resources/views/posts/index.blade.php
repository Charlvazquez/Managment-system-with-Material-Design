@extends('layouts.app', ['activePage' => 'posts', 'titlePage' => __('Listado de Publicaciones')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="row">
              <div class="col-12 text-left">
                <a href="{{route('posts.create')}}" class="btn btn-success">Agregar</a>
              </div>
          </div>
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Simple Table</h4>
            <p class="card-category"> Aqui se encontrara el Listado de publicaciones</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Titulo
                  </th>
                  <th>
                    Contenido
                  </th>
                  <th>
                    Categoria
                  </th>
                  <th>
                    Opciones
                  </th>
                </thead>
                <tbody>
                    <!--el nombre agregado el compact hara referencia a la bdd-->
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->titulo}}</td>
                        <td>{{$post->contenido}}</td>
                        <td>{{$post->categoria}}</td>
                        <td>
                            <form action="{{route('posts.destroy', $post->id)}}" method="post">
                                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-warning">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Borrar</button>
                            </form>
                        </td>
                    </tr>   
                    @endforeach   
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection