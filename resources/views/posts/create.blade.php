@extends('layouts.app', ['activePage' => 'posts', 'titlePage' => __('Crea una publicacion')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('posts.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Crear Publicacion') }}</h4>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Titulo') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('titulo') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="titulo" id="input-name" type="text" placeholder="{{ __('Escribe un titulo') }}" value="{{ old('titulo')}}" required="true" aria-required="true"/>
                      @if ($errors->has('titulo'))
                        <span id="titulo-error" class="error text-danger" for="input-name">{{ $errors->first('titulo') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Contenido') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('contenido') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('contenido') ? ' is-invalid' : '' }}" name="contenido" id="input-email" type="text" placeholder="{{ __('Escribe una descripcion') }}" value="{{ old('contenido') }}" required />
                      @if ($errors->has('contenido'))
                        <span id="contenido-error" class="error text-danger" for="input-email">{{ $errors->first('contenido') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Categoria') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('categoria') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('categoria') ? ' is-invalid' : '' }}" name="categoria" id="input-name" type="text" placeholder="{{ __('Escribe una categoria') }}" value="{{ old('categoria') }}" required="true" aria-required="true"/>
                        @if ($errors->has('categoria'))
                          <span id="categoria-error" class="error text-danger" for="input-name">{{ $errors->first('categoria') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection