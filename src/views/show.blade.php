@extends('layouts.admin.admin-layout')

@section('content')
<div class='padding'>
  <div class='row'>
    <div class='col-md-10 offset-1'>
      <div class='box'>
        <div class='box-header dark'>
          <h3>Detalle del registro</h3>
        </div>
        <div class='box-body'>
          <p> Nombre: <b>{{$interested->name}}</b></p>
          <p>Teléfono: <b>{{$interested->phone}}</b></p>
          <p>Correo: <b>{{$interested->email}}</b></p>

          @if($interested->extra1 != null)
          <p>Extra 1: <b>{{$interested->extra1}}</b></p>
          @endif

          @if($interested->extra2 != null)
          <p>Extra 2: <b>{{$interested->extra2}}</b></p>
          @endif

          @if($interested->extra3 != null)
          <p>Extra 3: <b>{{$interested->extra3}}</b></p>
          @endif

          @if($interested->extra4 != null)
          <p>Extra 4: <b>{{$interested->extra4}}</b></p>
          @endif

          @if($interested->extra5 != null)
          <p>Extra 5: <b>{{$interested->extra5}}</b></p>
          @endif

          <p>Landing: <b>{{$interested->landing}}</b></p>
          <p>Origen: <b>{{$interested->origin}}</b></p>
          <p>Fecha de registro: <b>{{$interested->created_at}}</b></p>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection