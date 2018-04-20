@include('partials.messages_partial')
{!! Form::open(['route'=> ['crm.tracing.store', $interested->id],"method"=>"POST"]) !!}

	<div class="form-group">
		{!! Form::label('type', 'Tipo', ['class'=>'form-control-label']) !!}
		{!! Form::select('type', ['Llamada'=>'Llamada','WhatsApp'=>'WhatsApp','SMS'=>'SMS','Email'=>'Email','Comentarios'=>'Comentarios'], null, ['class' => 'form-control select2', 'required'=>'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('detail', 'Detalle', ['class'=>'form-control-label']) !!}
		{!! Form::text('detail', null, ['class' => 'form-control', 'required'=>'required']) !!}
	</div>
	<br>
	{!! Form::submit('Agregar', ['class'=>'btn btn-danger btn-block']) !!}
{!! Form::close() !!}
