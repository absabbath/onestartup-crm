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

  <div class="row">
    <div class="col-md-10 offset-1">
      <div class="box">
        <div class="box-header dark">
          <b>Bitacora de seguimiento</b>
          <span>
            <a class="btn btn-sm btn-default" data-target="#m-a-a" data-toggle="modal" href="#" ui-target="#animate" ui-toggle-class="zoom">
              Agregar seguimiento
            </a>
          </span>
        </div>
        <div class="box-body">
          @if($interested->tracings()->count() > 0)

            <ul class="timeline">
              @foreach( $interested->tracings as $comment)
                <li class="tl-item">
                  <div class="tl-wrap b-primary">
                    <span class="tl-date text-muted">{{$comment->created_at}}</span>
                    <div class="tl-content box-color text-color w-xl w-auto-xs">
                      <span class="arrow b-white left pull-top"></span>
                      <div class="text-lt p-x m-b-sm">
                        {{$comment->type}}
                      </div>
                      <div class="p-a b-t b-light">
                        {{$comment->detail}}
                      </div>
                    </div>
                  </div>
                </li>
              @endforeach
            </ul>

          @else
            <p>No se han agregado registros</p>
          @endif

        </div>
      </div>
    </div>
  </div>

</div>

<div class="modal fade animate" data-backdrop="true" id="m-a-a">
  <div class="modal-dialog" id="animate">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar seguimiento</h5>
      </div>
      <div class="modal-body text-center p-lg">
        @include('crm::form-bitacora')
      </div>
    </div>
  </div>
</div>


@endsection