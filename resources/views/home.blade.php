@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1 class="m-0 text-dark">Home</h1>
    @if($busqueda ?? '')
        <h5 class="m-0 text-dark">Buscando: "{{$busqueda ?? ''}}"</h5>
    @endif
@stop

@section('content')
<div class="container">
    @if(Session::has('message'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
    @endif

    <table class="table table-light table-hover text-center text-middle">
        <thead class="thead-light">
            <tr>
                <th><i class="fas fa-clipboard-check"></th>
                <th>Foto  <i class="fas fa-camera"></i></th>
                <th>Titulo  <i class="fas fa-book"></i></th>
                <th>Tecnico  <i class="fas fa-user"></i></th>
                <th>Precio(soles)  <i class="fas fa-hand-holding-usd"></i></th>
                <th>Descripción  <i class="fas fa-id-card"></i></th>
            </tr>

        </thead>

        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                    <img src="{{asset('storage').'/'.$service->picture_path}}" class="img-thumbnail img-fluid" alt="" width="200">
                </td>
                <td> <a href="{{route('service.show', $service)}}">{{$service->title}}</a></td>
                <td> <a href="{{ route('profile.show', $service->profile) }}">{{$service->profile->firstname . " " . $service->profile->lastname}}</a></td>
                <td>{{$service->price}}</td>
                <td>{{$service->description}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
    {{$services->links()}}

</div>

@stop
