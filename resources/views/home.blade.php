@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Default Card Example</h3>
        <div class="card-tools">
          <!-- Buttons, labels, and many other things can be placed here! -->
          <!-- Here is a label for example -->
          <span class="badge badge-primary">Label</span>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        The body of the card
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        The footer of the card
      </div>
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->
    <div class="row justify-content-md-center">
        <div class="card col-4">
            <div class="card-header">
                asdfasfda
            </div>
            <div class="card-body">
                <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                            value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@stop
