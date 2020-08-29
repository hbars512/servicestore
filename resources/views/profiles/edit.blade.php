@extends('adminlte::page')

@section('title', 'Editar Perfil')

@section('content_header')
    <h1 class="m-0 text-dark">Editar Perfil</h1>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Editar Perfil</h3>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('profile.update') }}">
                        @method('PUT')

                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre de Usuario</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" autocomplete="name" readonly>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" autocomplete="email" readonly>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ $profile->firstname ?? '' }}">

                                <!-- @error('name') -->
                                <!--     <span class="invalid&#45;feedback" role="alert"> -->
                                <!--         <strong>{{ $message }}</strong> -->
                                <!--     </span> -->
                                <!-- @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">Apellido</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ $profile->lastname ?? '' }}">

                                <!-- @error('name') -->
                                <!--     <span class="invalid&#45;feedback" role="alert"> -->
                                <!--         <strong>{{ $message }}</strong> -->
                                <!--     </span> -->
                                <!-- @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Dirección</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ $profile->address ?? '' }}">

                                <!-- @error('name') -->
                                <!--     <span class="invalid&#45;feedback" role="alert"> -->
                                <!--         <strong>{{ $message }}</strong> -->
                                <!--     </span> -->
                                <!-- @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">Teléfono</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ $profile->phone_number ?? '' }}">

                                <!-- @error('name') -->
                                <!--     <span class="invalid&#45;feedback" role="alert"> -->
                                <!--         <strong>{{ $message }}</strong> -->
                                <!--     </span> -->
                                <!-- @enderror -->
                            </div>
                        </div>

                        <div class="form-group row mb-0 justify-content-around">
                            <button type="submit" class="btn btn-primary">
                                Editar
                            </button>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('user.destroy') }}">
                        @method('DELETE')
                        @csrf
                        <div class="form-group row mb-0 justify-content-end">
                            <input
                                class="btn btn-sn btn-outline-danger"
                                type="submit"
                                value="Eliminar"
                                onclick="return confirm('¿Desea eliminar su cuenta de usuario?')">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
