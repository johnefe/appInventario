@extends('auth.contenido')

@section('login')
<div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-group mb-0">
        <div class="card p-4">
        <form method="POST" class="form-horizontal was-validated" action="{{route('login')}}">
             {{ csrf_field() }}

          <div class="card-body">
            <h1>Acceder</h1>
            <p class="text-muted">Control de acceso al sistema</p>
            <div class="form-group mb-3{{$errors->has('usuario' ? 'is-invalid' : '')}}">
              <span class="input-group-addon"><i class="icon-user"></i></span>
            <input type="text" name="usuario" value="{{old('usuario')}}" id="usuario" class="form-control" placeholder="Usuario">
              {!!$errors->first('usuario','<span class="invalid-feedback">:message</span>')!!}
            </div>
            <div class="form-group mb-4{{$errors->has('password' ? 'is-invalid' : '')}}">
              <span class="input-group-addon"><i class="icon-lock"></i></span>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
              {!!$errors->first('password','<span class="invalid-feedback">:message</span>')!!}
            </div>
            <div class="row">
              <div class="col-6">
                <button type="submit" class="btn btn-success px-4">Acceder</button>
              </div>
            </div>
          </div>
        </form>
        </div>
        <div class="card text-white bg-success py-5 d-md-down-none" style="width:44%">
          <div class="card-body text-center">
            @foreach($dato as $d)
            <div>
              <h2>{{$d->nombre}}</h2>
              <br>{{$d->direccion}} - {{$d->ciudad}},{{$d->pais}}<br>Telefono:{{$d->telefono}}<br>Email:{{$d->email}}

            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
